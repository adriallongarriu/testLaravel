<?php

namespace App\Http\Controllers;


use App\Repositories\Phone\PhoneRepository;

class PhonesController extends Controller
{

    /**
     * @var PhoneRepository
     */
    protected $phones;

    /**
     * PhoneController constructor.
     * @param PhoneRepository $phones
     */
    public function __construct(PhoneRepository $phones)
    {
        $this->phones = $phones;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $phones = $this->phones->all();
        return view('phones.index', array('phones' => $phones));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $phone = $this->phones->find($id);
        return view('phones.show', array('phone' => $phone));
    }
}
