<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LevelController extends BaseController
{
    public function index()
    {
        return view('level/index');
    }

    public function detaillevel(){
        return view('level/detail_level');
    }
}
