<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MerchantsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user_id'           => 1,
                'business_name'     => 'Legit Store',
                'business_address'  => 'Jl. menuju masa depan',
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s'),
            ]
        ];

        $this->db->table('merchants')->insertBatch($data);
    }
}
