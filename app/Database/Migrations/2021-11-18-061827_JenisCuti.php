<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisCuti extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => true, //tidak boleh mulai dari 0
                    'auto_increment' => true,
                ],

                'nama_jenis' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 255,
                    'null'           => false,
                ],
            ],

        );

        $this->forge->addPrimaryKey("id");
        $this->forge->createTable('jenis_cuti');
    }

    public function down()
    {
        $this->forge->dropTable("jenis_cuti");
    }
}
