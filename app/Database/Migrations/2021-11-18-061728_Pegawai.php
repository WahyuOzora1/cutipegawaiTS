<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pegawai extends Migration
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

                'nama' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 255,
                    'null'           => false,
                ],
                'jenis_kelamin' => [
                    'type'           => 'ENUM',
                    'constraint'     => ["L", "P"],
                    'null'           => true,
                ],
                'alamat' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 255,
                    'null'           => false,
                ],

                'telepon' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 15,
                    'null'           => false,
                ],

                'email' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 255,
                    'null'           => false,
                ],


            ],

        );

        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->addUniqueKey("email");
        $this->forge->createTable('pegawai', TRUE);
    }
    public function down()
    {
        $this->forge->dropTable('pegawai');
    }
}
