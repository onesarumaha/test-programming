<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pembayaran' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_marketing' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'transaction_number' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tgl' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'jumlah' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'metode_pembayaran' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_pembayaran', true);
        $this->forge->addForeignKey('id_marketing', 'tabel_marketing', 'id_marketing');
        $this->forge->createTable('tabel_pembayaran');
    }

    public function down()
    {
        $this->forge->createTable('tabel_pembayaran');
    }
}
