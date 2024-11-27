<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Merchants extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'auto_increment' => true,
                'unsigned'       => true,
            ],
            'user_id'          => [
                'type'           => 'INT',
                'unsigned'       => true,
            ],
            'business_name'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'business_address'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'deleted_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('merchants');
    }

    public function down()
    {
        $this->forge->dropTable('merchants');
    }
}
