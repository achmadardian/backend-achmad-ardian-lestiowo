<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrdersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'customer_id'       => 1,
                'product_id'        => 1,
                'discount'          => 10,
                'shipping_cost'     => 0,
                'shipping_type'     => 'free',
                'total_payment'     => 95000,
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s'),
            ]
        ];

        $this->db->table('orders')->insertBatch($data);
    }
}
