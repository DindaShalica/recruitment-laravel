<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RfpController extends Controller
{
    public function create()
{
    return view('rfp.create'); // kosong
}

public function edit($id)
{
    $rfps = [
        23 => [
            'id' => 23,
            'job_title' => 'UI/UX Designer',
            'division' => 'IT',
            'employment_type' => 'PKWT',
        ],
        24 => [
            'id' => 24,
            'job_title' => 'Backend Developer',
            'division' => 'IT',
            'employment_type' => 'PKWT',
        ],
        25 => [
            'id' => 25,
            'job_title' => 'Frontend Developer',
            'division' => 'IT',
            'employment_type' => 'TPC',
        ],
    ];

    $rfp = $rfps[$id] ?? null;

    return view('rfp.create', compact('rfp'));
}
}
