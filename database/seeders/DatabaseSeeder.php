<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Customer::create(['full_name' => 'Maria Santos', 'email' => 'maria.santos@gmail.com', 'phone' => '0917-555-0101']);
        Customer::create(['full_name' => 'Juan Dela Cruz', 'email' => 'juan.delacruz@yahoo.com', 'phone' => '0918-555-0102']);
        Customer::create(['full_name' => 'Angela Reyes', 'email' => 'angela.reyes@gmail.com', 'phone' => '0919-555-0103']);
        Customer::create(['full_name' => 'Paolo Garcia', 'email' => 'paolo.garcia@outlook.com', 'phone' => '0920-555-0104']);
        Customer::create(['full_name' => 'Sofia Mendoza', 'email' => 'sofia.mendoza@gmail.com', 'phone' => '0921-555-0105']);

        User::create(['username' => 'admin.mia', 'full_name' => 'Mia Villanueva']);
        User::create(['username' => 'cashier.lee', 'full_name' => 'Leonardo Tan']);
        User::create(['username' => 'sales.ana', 'full_name' => 'Ana Bautista']);
        User::create(['username' => 'inventory.kai', 'full_name' => 'Kai Navarro']);
        User::create(['username' => 'support.jules', 'full_name' => 'Julia Ramos']);
    }
}
