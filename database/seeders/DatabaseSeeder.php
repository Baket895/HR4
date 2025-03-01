<?php

namespace Database\Seeders;

// database/seeders/DatabaseSeeder.php

use Illuminate\Database\Seeder;
use App\Models\SalaryStructure;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        SalaryStructure::create(['grade' => 'Entry Level', 'range' => '₱25,000 - ₱35,000', 'description' => 'For fresh graduates']);
        SalaryStructure::create(['grade' => 'Mid Level', 'range' => '₱35,000 - ₱65,000', 'description' => 'For experienced professionals']);
        // Magdagdag pa ng data
    }
}