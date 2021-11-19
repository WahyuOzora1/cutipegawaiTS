<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PegawaiModel;


class UserController extends BaseController
{
    public $pegawai;


    public function __construct()
    {
        $this->pegawai = new PegawaiModel();
    }

    public function index()
    {
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
