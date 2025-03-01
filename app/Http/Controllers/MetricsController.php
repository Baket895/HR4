<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetricsController extends Controller
{
    //
    public function index()
{
    $recruitmentCosts = [
        'Q1' => 75000,
        'Q2' => 60000,
        'Q3' => 40000,
        'Q4' => 25000
    ];

    $topHiringSources = [
        'LinkedIn' => 30,
        'Indeed' => 25,
        'Glassdoor' => 20,
        'Company Website' => 15,
        'Referrals' => 10
    ];

    return view('metrics', compact('recruitmentCosts', 'topHiringSources'));
}
}


