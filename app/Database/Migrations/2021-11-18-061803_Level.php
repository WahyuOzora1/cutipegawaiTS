<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Level extends Migration
{
    public function up()
    {
        //Membuat kolom/field untuk tabel hantu
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => true, //tidak boleh mulai dari 0
                    'auto_increment' => true,
                ],

                'nama_level' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 255,
                    'null'           => false,
                ],



            ],

        );

        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->createTable('level', TRUE);
    }
    public function down()
    {
        $this->forge->dropTable('level');
    }
}
