<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function show($i = 0)
    {
        $data = DB::table('quiz')
            ->select('quiz_number', 'title','value')
            ->where('quiz_number', '=', $i)
            ->get();
        return Inertia::render('Dashboard', [
            'title' => 'Quiz',
            'quiz' =>  $data,
            'st' => $i
        ]);
    }
}
