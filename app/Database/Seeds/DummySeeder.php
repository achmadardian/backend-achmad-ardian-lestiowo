<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DummySeeder extends Seeder
{
    public function run()
    {
        $this->call('UsersSeeder');
        $this->call('CustomersSeeder');
        $this->call('MerchantsSeeder');
        $this->call('ProductsSeeder');
        $this->call('OrdersSeeder');
    }
}
