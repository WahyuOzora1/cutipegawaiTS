<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CutiModel;
use App\Models\JenisCuti;


class CutiController extends BaseController
{
    public $cuti;
    public $jenis_cuti;
    public function __construct()
    {
        $this->cuti = new CutiModel();
        $this->jenis_cuti = new JenisCuti();
        
    }
    public function index()
    {
        
        $db = \Config\Database::connect();
        $builder = $db->table('cuti');
        $builder->select('*');
        $builder->join('jenis_cuti', 'jenis_cuti.id=cuti.jenis_cuti_id');
        $builder->join('pegawai', 'pegawai.id=cuti.pegawai_id');
        $query = $builder->get();
        $data = $query->getResult();

        // dd($data);
        return view('cuti/index', [ 
            'data' => $data
        ]);
    }

    public function jeniscuti()
    {
        $data = $this->jenis_cuti->findAll();

        return view('cuti/jenis_cuti', ['data'=>$data]);


    }
}
