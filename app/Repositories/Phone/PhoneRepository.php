<?php

namespace App\Repositories\Phone;

interface PhoneRepository
{
    /**
     * Get all phones.
     *
     * @return mixed
     */
    public function all();


    /**
     * Find phones by its id.
     *
     * @param $id
     * @return mixed
     */
    public function find($id);
}