<?php

namespace Database\Seeders;
use App\Models\Medicine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        Medicine::create([
            'name' => 'Ibuprofen',
            'description' => 'Anti-inflammatory',
            'price' => 20.00,
            'quantity' => 80,
            'manufacturer' => 'XYZ Labs',
            'expiry_date' => '2025-10-15',
        ]);
    
    }
}
