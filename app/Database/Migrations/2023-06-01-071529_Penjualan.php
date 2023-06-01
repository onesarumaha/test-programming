<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penjualan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_penjualan' => [
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
            'date' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'cargo_fee' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'total_balance' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'grand_total' => [
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
        $this->forge->addKey('id_penjualan', true);
        $this->forge->addForeignKey('id_marketing', 'tabel_marketing', 'id_marketing');
        $this->forge->createTable('tabel_penjualan');
    }

    public function down()
    {
        $this->forge->dropTable('tabel_penjualan');    
    }
}
