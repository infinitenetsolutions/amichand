<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index(){
        return DB::table('careers')->get();
    }
}
