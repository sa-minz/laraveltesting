<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pharmacist;

class PharmacistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pharmacists = [
            [
                'name' => 'Savinthi Abey',
                'email' => 'savinthi@example.com',
                'phone' => '0711234567',
                'license_number' => 'LIC1001',
                'pharmacy_name' => 'City Pharmacy',
                'password' => bcrypt('password123'),
            ],
            [
                'name' => 'Kamal Perera',
                'email' => 'kamal@example.com',
                'phone' => '0779876543',
                'license_number' => 'LIC1002',
                'pharmacy_name' => 'HealthPlus',
                'password' => bcrypt('password123'),
            ],
            [
                'name' => 'Nadeesha Silva',
                'email' => 'nadeesha@example.com',
                'phone' => '0751237890',
                'license_number' => 'LIC1003',
                'pharmacy_name' => 'GoodHealth Pharmacy',
                'password' => bcrypt('password123'),
            ],
        ];

        foreach ($pharmacists as $pharmacist) {
            Pharmacist::create($pharmacist);
        }
    }
}
