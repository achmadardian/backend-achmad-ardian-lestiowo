<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orders extends Migration
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
            'customer_id'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
            ],
            'product_id'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
            ],
            'discount'          => [
                'type'           => 'DECIMAL',
                'constraint'     => '10,2',
                'default'        => 0.00,
                'comment'        => 'The value of the discount percentage, e.g., 10.00, which means ten percent.',
            ],
            'shipping_cost'          => [
                'type'           => 'DECIMAL',
                'comment'        => 'The actual price, e.g., 15000.00, which means IDR 15,000.',
            ],
            'shipping_type'          => [
                'type'           => 'ENUM',
                'constraint'     => ['standard', 'free'],
                'default'        => 'standard'
            ],
            'total_payment'          => [
                'type'           => 'DECIMAL',
            ],
            'stock'          => [
                'type'           => 'INT',
                'constraint'     => 5,
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
        $this->forge->addForeignKey('customer_id', 'customers', 'id');
        $this->forge->addForeignKey('product_id', 'products', 'id');
        $this->forge->createTable('orders');
    }

    public function down()
    {
        $this->forge->dropTable('orders');
    }
}
