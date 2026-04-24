<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateController extends Controller
{
    // 🔹 TEMPAT SEMUA DATA
    private function getCandidates()
    {
        return [
            [
                'id' => 1,
                'name' => 'Nabila',
                'email' => 'nabila@gmail.com',
                'phone' => '085776788888',
                'location' => 'Jakarta',
                'position' => 'UI/UX Design',
                'position_applied' => 'UI/UX Design',
                'division' => 'IT',
                'applied_date' => '20 Januari 2026',
                'last_update' => '2 Hours Ago',
                'recruiter' => 'Rizky',
                'status' => 'Hired',
                'stage' => 'Hired',
                'source' => 'LinkedIn'
            ],

            [
                'id' => 2,
                'name' => 'Najla',
                'email' => 'najla@gmail.com',
                'phone' => '084321112344',
                'location' => 'Jakarta Selatan',
                'position' => 'UI/UX Design',
                'position_applied' => 'UI/UX Design',
                'division' => 'IT',
                'applied_date' => '18 Januari 2026',
                'last_update' => 'Yesterday',
                'recruiter' => 'Rizky',
                'status' => 'In Progress',
                'stage' => 'Interview',
                'source' => 'LinkedIn'
            ]
        ];
    }

    // 🔹 HALAMAN LIST
    public function index()
    {
        $candidates = $this->getCandidates();
        return view('candidate.management', compact('candidates'));
    }

    // 🔹 HALAMAN DETAIL
    public function detail($id)
{
    $candidates = $this->getCandidates();

    $candidate = collect($candidates)->firstWhere('id', (int)$id);

    // 🔥 kalau tidak ketemu, ambil data pertama
    if (!$candidate) {
        $candidate = $candidates[0];
    }

    return view('candidate.detail', compact('candidate'));
}

    // HALAMAN CREATE
public function create()
{
    return view('candidate.create');
}

// HALAMAN EDIT
public function edit($id)
{
    $candidates = $this->getCandidates();

    $candidate = collect($candidates)->firstWhere('id', (int)$id);

    // fallback kalau tidak ketemu
    if (!$candidate) {
        $candidate = $candidates[0];
    }

    return view('candidate.create', compact('candidate'));
}
}