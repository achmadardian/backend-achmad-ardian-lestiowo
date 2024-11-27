<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
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
            'first_name'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 60,
            ],
            'last_name'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 60,
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 60,
                'unique'         => true
            ],
            'password'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'role'  => [
                'type'          => 'ENUM',
                'constraint'    => ['customer', 'merchant'],
                'default'       => 'customer'
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
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
