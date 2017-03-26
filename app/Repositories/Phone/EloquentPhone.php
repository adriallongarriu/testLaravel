<?php

namespace App\Repositories\Phone;

use App\Models\Phone;

class EloquentPhone implements PhoneRepository
{

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return Phone::all();
    }

    /**
     * {@inheritdoc}
     */
    public function find($id)
    {
        return Phone::find($id);
    }
}