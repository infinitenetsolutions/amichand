<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    function index()
    {
        
        return DB::table('product_with_image')->groupBy('id')->get();
    }
}
