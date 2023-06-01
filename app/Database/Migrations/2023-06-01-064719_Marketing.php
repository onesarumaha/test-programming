<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Marketing extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'id_marketing' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_marketing' => [
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
        $this->forge->addKey('id_marketing', true);
        $this->forge->createTable('tabel_marketing');
    }

    public function down()
    {
        $this->forge->dropTable('tabel_marketing');    
    }
}
