<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'merchant_id'       => 1,
                'name'              => 'Buku X',
                'price'             => 100000,
                'stock'             => 100,
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s'),
            ]
        ];

        $this->db->table('products')->insertBatch($data);
    }
}
