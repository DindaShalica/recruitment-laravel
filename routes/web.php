<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\RfpController;

// ==========================
// HALAMAN UTAMA → REDIRECT KE LOGIN
// ==========================
Route::get('/', function () {
    return redirect('/login');
});

// ==========================
// LOGIN
// ==========================
Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->name('login');

Route::post('/login', [LoginController::class, 'login'])
    ->name('login.submit');

// ==========================
// UBAH PROFILE
// ==========================
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

// ==========================
// DASHBOARD
// ==========================
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ==========================
// RFP MONITORING
// ==========================
Route::get('/rfp-monitoring', function () {
    return view('rfp.monitoring');
})->name('rfp.monitoring');

// ==========================
// DETAIL MONITORING
// ==========================
Route::get('/monitoring/{id}', function ($id) {

    $data = [
        1 => [
            'judul' => 'UI/UX Design',
            'id_rekrutmen' => 'RFP-023',
            'tanggal_dibuat' => '17 April 2024',
            'deadline' => '30 April 2024',
            'updated' => '25 April 2024',
            'status' => 'On Progress',
            'progress' => 60,
            'pic_nama' => 'Budi Santoso',
            'divisi' => 'Human Resources',
            'email' => 'budi@company.com',
            'telepon' => '08123456789',
            'kandidat' => 20,
            'screening' => 15,
            'interview' => 8,
            'offering' => 2,
            'hired' => 1,
            'last_updated' => '25 April 2024'
        ],

        2 => [
            'judul' => 'Backend Developer',
            'id_rekrutmen' => 'RFP-024',
            'tanggal_dibuat' => '10 April 2024',
            'deadline' => '25 April 2024',
            'updated' => '20 April 2024',
            'status' => 'On Progress',
            'progress' => 30,
            'pic_nama' => 'Siti Aminah',
            'divisi' => 'IT',
            'email' => 'siti@company.com',
            'telepon' => '082233445566',
            'kandidat' => 10,
            'screening' => 0,
            'interview' => 0,
            'offering' => 0,
            'hired' => 0,
            'last_updated' => '25 April 2024'
        ],

        3 => [
            'judul' => 'Frontend Developer',
            'id_rekrutmen' => 'RFP-025',
            'tanggal_dibuat' => '11 April 2024',
            'deadline' => '27 April 2024',
            'updated' => '20 April 2024',
            'status' => 'Open',
            'progress' => 0,
            'pic_nama' => 'Siti Aminah',
            'divisi' => 'IT',
            'email' => 'siti@company.com',
            'telepon' => '082233445566',
            'kandidat' => 0,
            'screening' => 0,
            'interview' => 0,
            'offering' => 0,
            'hired' => 0,
            'last_updated' => '26 April 2024'
        ]
    ];

    $item = $data[$id] ?? $data[1]; // fallback kalau id tidak ada

    return view('rfp.detail-monitoring', compact('item'));

})->name('monitoring.detail');

// ==========================
// RFP MANAGEMENT
// ==========================
Route::get('/rfp-management', function () {
    return view('rfp.management');
})->name('rfp.management');

// ==========================
// DETAIL RFP
// ==========================
Route::get('/rfp-detail/{id}', function ($id) {

    $rfpData = [
        23 => [
            'id' => 'RFP-023',
            'position' => 'UI/UX Designer',
            'division' => 'IT',
            'requested slot' => '3',
            'submitted by' => 'Anton',
            'submission date' => '18 Januari 2026',
            'status' => 'Approved'
        ],
        24 => [
            'id' => 'RFP-024',
            'position' => 'Backend Developer',
            'division' => 'IT',
            'requested slot' => '2',
            'submitted by' => 'Fina',
            'submission date' => '20 Januari 2026',
            'status' => 'Waiting Approval'
        ],
        25 => [
            'id' => 'RFP-025',
            'position' => 'Frontend Developer',
            'division' => 'IT',
            'requested slot' => '2',
            'submitted by' => 'Liana',
            'submission date' => '20 Januari 2026',
            'status' => 'Approved'
        ],
        26 => [
            'id' => 'RFP-026',
            'position' => 'Financial Analyst',
            'division' => 'Finance',
            'requested slot' => '1',
            'submitted by' => 'Amar',
            'submission date' => '21 Januari 2026',
            'status' => 'Waiting Approval'
        ],
    ];

    $rfp = $rfpData[$id] ?? null;

    if (!$rfp) {
        abort(404);
    }

    return view('rfp.detail', compact('rfp'));
})->name('rfp.detail');

// ==========================
// CREATE RFP
// ==========================
Route::get('/rfp/create', [RfpController::class, 'create'])->name('rfp.create');
Route::get('/rfp/edit/{id}', [RfpController::class, 'edit'])->name('rfp.edit');

// ==========================
// SLOT MANAGEMENT PEGAWAI
// ==========================
Route::get('/slot-management-pegawai', function () {
    return view('slot.management-pegawai');
})->name('slot.management-pegawai');

// ==========================
// DETAIL SLOT PEGAWAI
// ==========================
Route::get('/slot-detail/{id}', function ($id) {

    $slotData = [
        1 => [
        'position' => 'UI/UX Designer',
        'division' => 'IT',
        'total_slot' => 3,
        'status' => 'On Recruitment',
        'date' => '2 Januari 2026',

        'requirements' => [
            'qualification' => [
                'Minimum Bachelor’s degree in Informatics Engineering / Computer Science',
                '2 years experience in the same field (Fresh Graduate are welcome)',
                'Proficient in using Figma and understand UX concepts',
                'Able to work and communication with team',
            ],
            'level' => 'Staff',
            'location' => 'Jakarta',
            'employment_type' => 'PKWT',
            'salary' => 'Rp 6.000.000 - Rp. 8.000.000'
        ],

        'candidates' => [
            [
                'name' => 'Michelle',
                'email' => 'michelle@email.com',
                'source' => 'LinkedIn',
                'status' => 'Offering'
            ],
            [
                'name' => 'Ranty',
                'email' => 'ranty@email.com',
                'source' => 'LinkedIn',
                'status' => 'Offering'
            ],
            [
                'name' => 'Nabila',
                'email' => 'nabila@gmail.com',
                'source' => 'LinkedIn',
                'status' => 'Hired'
            ],

        ]
    ],

         2 => [
        'position' => 'Financial Analyst',
        'division' => 'Finance',
        'total_slot' => 2,
        'status' => 'Open',
        'date' => '3 Januari 2026',

        'requirements' => [
            'qualification' => [
                'Bachelors degree in Finance, Accounting, Economics, or related fields',
                'At least 3 years of relevant working experience',
                'Strong ability to read, interpret, and analyze financial data',
                'Ability to build financial model as a plus',
                'Solid understanding of budgeting and financial performance analysis',
            ],
            'level' => 'Junior',
            'location' => 'Jakarta',
            'employment_type' => 'PKWT',
            'salary' => 'Rp 5.000.000 - Rp. 7.000.000'
        ],

        'candidates' => []
    ],

    3 => [
    'position' => 'Frontend Developer',
    'division' => 'IT',
    'total_slot' => 3,
    'status' => 'On Recruitment',
    'date' => '5 Januari 2026',

    'requirements' => [
        'qualification' => [
            'Bachelors degree in Computer Science, Information Systems, Informatics Engineering, or related field',
            'Open for Fresh Graduate or candidate with project/freelance experience',
            'Familiar with Linux Operating System,open-source environment, and repository tools such as GitHub',
            'Good knowledge of data analysis and statistics',
            'Familiarity with ERP systems is a plus',
        ],
        'level' => 'Staff',
        'location' => 'Bandung',
        'employment_type' => 'PKWT',
        'salary' => 'Rp 7.000.000 - Rp 9.000.000'
    ],

    'candidates' => [
        [
            'name' => 'Fajar',
            'email' => 'fajar@gmail.com',
            'source' => 'LinkedIn',
            'status' => 'Offering'
        ]
    ]
],
    
    ];
    
    
    $slot = $slotData[$id] ?? null;

    if (!$slot) {
        abort(404);
    }

    return view('slot.detail', compact('slot'));

})->name('slot.detail');

// ==========================
// CANDIDATE MANAGEMENT
// ==========================
Route::get('/candidate-management', [CandidateController::class, 'index'])
    ->name('candidate.management');


Route::delete('/candidate/{id}', function ($id) {
    // logic delete nanti di sini
    return redirect()->back();
})->name('candidate.delete');

// ==========================
// CREATE / ADD CANDIDATE
// ==========================
Route::get('/candidate/create', [CandidateController::class, 'create'])
    ->name('candidate.create');

// ==========================
// EDIT CANDIDATE
// ==========================
Route::get('/candidate/{id}/edit', [CandidateController::class, 'edit'])
    ->name('candidate.edit');

// ==========================
// DETAIL CANDIDATE
// ==========================
Route::get('/candidate/{id}', [CandidateController::class, 'detail'])
    ->where('id', '[0-9]+')
    ->name('candidate.detail');

// ==========================
// ASSIGN CANDIDATE DETAIL
// ==========================
Route::get('/assign-candidate/{id}', function ($id) {

    $candidates = [
        1 => ['name' => 'Michelle'],
        2 => ['name' => 'Ranty'],
    ];

    $candidate = $candidates[$id] ?? null;

    if (!$candidate) {
        abort(404);
    }

    return view('slot.assign-detail', compact('candidate'));

})->name('assign.candidate.detail');

// ==========================
// RECRUITMENT PIPELINE
// ==========================
Route::get('/recruitment-pipeline', function () {
    return view('recruitment.pipeline');
})->name('recruitment.pipeline');

// ==========================
// TASK APPROVAL
// ==========================
Route::get('/task-approval', function () {
    return view('task.approval');
})->name('task.approval');

// ==========================
// DETAIL TASK APPROVAL
// ==========================
Route::get('/task-approval/{id}', function ($id) {

    $tasks = [
        1 => [
            'id' => 1,
            'task_name' => 'RFP Approval',
            'rfp_code' => 'RFP-023 Backend Developer',
            'division' => 'IT',
            'requester' => 'Rania',
            'submitted_date' => '20 Jan 2026',
            'due_date' => '25 Jan 2026',
            'jumlah' => '2 Orang',
            'priority' => 'High',
            'status' => 'Waiting Approval',
            'description' => 'Membutuhkan backend developer untuk pengembangan sistem internal berbasis Laravel.'
        ],

        2 => [
            'id' => 2,
            'task_name' => 'Overtime Request',
            'rfp_code' => '-',
            'division' => 'Finance',
            'requester' => 'Farhan',
            'submitted_date' => '18 Jan 2026',
            'due_date' => '24 Jan 2026',
            'jumlah' => '-',
            'priority' => 'Medium',
            'status' => 'Approved',
            'description' => 'Permintaan lembur untuk penyelesaian laporan keuangan akhir bulan.'
        ],

        3 => [
            'id' => 3,
            'task_name' => 'New Slot Approval',
            'rfp_code' => 'RFP-026 Marketing',
            'division' => 'Marketing',
            'requester' => 'Cyntia',
            'submitted_date' => '23 Jan 2026',
            'due_date' => '26 Jan 2026',
            'jumlah' => '1 Orang',
            'priority' => 'High',
            'status' => 'Waiting Approval',
            'description' => 'Penambahan slot untuk kebutuhan campaign marketing Q2.'
        ],
    ];

    $task = $tasks[$id] ?? null;

    if (!$task) {
        abort(404);
    }

    return view('task.detail', compact('task'));

})->name('task.approval.detail');

Route::post('/task-approval/{id}/approve', function ($id) {
    return redirect()->back()->with('success', 'Task berhasil di-approve');
})->name('task.approval.approve');

Route::post('/task-approval/{id}/reject', function ($id) {
    return redirect()->back()->with('success', 'Task berhasil di-reject');
})->name('task.approval.reject');


// ==========================
// REPORT & MONITORING SLA
// ==========================
Route::get('/report-monitoring-SLA', function () {
    return view('report.monitoring-SLA');
})->name('report.monitoring-SLA');

// ==========================
// LOGOUT
// ==========================
Route::post('/logout', function () {
    // logout tanpa database
    return redirect('/login');
})->name('logout');