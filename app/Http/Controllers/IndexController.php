<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    function slider()
    {
        return DB::table('slider_tbl')->get();
    }
    function projects()
    {
    }

    function services()
    {
        return DB::table('testimonials')->get();

    }
    function  testimonial()
    {
        return DB::table('testimonials')->get();

    }
    function clients()
    {
        return DB::table('clients')->get();
    }
    
}
