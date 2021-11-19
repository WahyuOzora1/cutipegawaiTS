<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailLevel extends Migration
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

                'user_id' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'null'           => false,
                ],

                'level_id' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'null'           => false,
                ],
            ],

        );

        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->createTable('detail_level', TRUE);
    }
    public function down()
    {
        $this->forge->dropTable('detail_level');
    }
}
