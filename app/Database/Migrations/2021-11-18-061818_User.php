<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true, //tidak boleh mulai dari 0
                'auto_increment' => true,
            ],

            'username' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => false,
            ],

            'password' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => false,
            ],

            'pegawai_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'null'           => false,
            ],

            'level_active' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'null'           => false,
            ],
            

        ],

    );

    $this->forge->addPrimaryKey("id");
    $this->forge->addUniqueKey("username");
    $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable("user");
    }
}
