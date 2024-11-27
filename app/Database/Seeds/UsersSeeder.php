<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'first_name' => 'Fulan',
                'last_name'  => 'bin alan',
                'email'      => 'fulan@gmail.com',
                'password'   => password_hash('Password123', PASSWORD_BCRYPT),
                'role'       => 'customer',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'first_name' => 'Fulanah',
                'last_name'  => 'binti fulan',
                'email'      => 'fulanah@gmail.com',
                'password'   => password_hash('Password123', PASSWORD_BCRYPT),
                'role'       => 'merchant',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
