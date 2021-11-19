<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\PegawaiModel;


class UserController extends BaseController
{
    public $pegawai;


    public function __construct()
    {
        $this->user = new UserModel();
        $this->pegawai = new PegawaiModel();
    }

    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('user');
        $builder->select('*');
        $builder->join('pegawai', 'pegawai.id=user.pegawai_id');
        $query = $builder->get();
        $data = $query->getResult();

        // dd($data);
        return view('user/index', [ 
            'data' => $data
        ]);
        
        return view('user/index');
    }

    public function pegawai()
    {
        $data = $this->pegawai->findAll();
        // dd($data);
        return view('user/pegawai', [
            'data'=>$data
        ]);
    }
}
