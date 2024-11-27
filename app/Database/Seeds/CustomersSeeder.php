<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CustomersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user_id'           => 1,
                'shipping_address'  => 'Jl. Jalan kita kapan',
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s'),
            ]
        ];

        $this->db->table('customers')->insertBatch($data);
    }
}
