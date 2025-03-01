<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function index()
    {
        // Sample data (ito ay mula sa database sa tunay na setup)
        $data = [
            'totalCompensationBudget' => 1000000,
            'avgSalaryPerPosition' => 70000,
            'annualAdjustmentPercentage' => 5,
            'turnoverRate' => 10,
            'salaryDistribution' => [15, 25, 30, 20], // Sample salary distribution
        ];

        return view('salary', compact('data'));
    }
}
