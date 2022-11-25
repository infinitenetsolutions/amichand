<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        return DB::table('careers')->get();
    }

    public function store(Request $request)
    {
        DB::table('career_applied')->insert($request->except('resume'));
        return response()->json($request);
    }
}
