<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CutiController extends BaseController
{
    public function index()
    {
        return view('cuti/index');
    }

    public function jeniscuti()
    {

        $db = \Config\Database::connect();
        $builder = $db->table('cuti');
        $builder->select('*');
        $builder->join('jenis_cuti', 'jenis_cuti.id=cuti.jenis_cuti_id');
        $query = $builder->get();
        $data = $query->getResult();

        dd($data);
        return view('cuti', [ 
            'data' => $data
        ]);
    }
}
