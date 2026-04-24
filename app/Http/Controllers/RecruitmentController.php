<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    /**
     * Display recruitment main page
     */
    public function index()
    {
        return view('recruitment.index');
    }
}