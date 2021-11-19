<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cuti extends Migration
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

                'pegawai_id' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'null'           => false,
                ],

                'jenis_cuti_id' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'null'           => false,
                ],       

                'tanggal_mulai' => [
                    'type'           => 'DATE',
                    'null'           => false,
                ],

                'tanggal_selesai' => [
                    'type'           => 'DATE',
                    'null'           => false,
                ],

                'keterangan' => [
                    'type'           => 'TEXT',
                    'null'           => false,
                ],

                'bukti' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 255,
                    'null'           => false,
                ],

                'status' => [
                    'type'           => 'ENUM',
                    'constraint'     => ["0","1"],
                    'null'           => true,
                ],

                'tanggal_approval' => [
                    'type'           => 'DATE',
                    'null'           => true,
                ],

                'tanggal_pengajuan' => [
                    'type'           => 'DATE',
                    'null'           => false,
                ],

            ],

        );

        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->createTable('cuti', TRUE);
    }
    public function down()
    {
        $this->forge->dropTable('cuti');
    }
}
