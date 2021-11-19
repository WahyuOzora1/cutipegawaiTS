<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DetaillevelModel;
use App\Models\LevelModel;

class LevelController extends BaseController
{
    public $level;
    public $detail_level;

    public function __construct()
    {
        $this->level = new LevelModel();
        $this->detail_level = new DetaillevelModel();
    }


    public function index()
    {
        $data = $this->level->findAll();
        return view('level/index', ['data' => $data]);
    }

    public function detaillevel()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('detail_level');
        $builder->select('*');
        $builder->join('level', 'level.id=detail_level.level_id');
        $builder->join('user', 'user.id=detail_level.user_id');
        $query = $builder->get();
        $data = $query->getResult();

        // dd($data);
        return view('level/detail_level', [
            'data' => $data
        ]);
    }
}
