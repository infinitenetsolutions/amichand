<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{


    function index()
    {
        $products = DB::table('product_with_image')->limit(9)->get();
        $service = DB::table('service_with_images')->limit(9)->get();
    
        return response()->json(['products' => $products, 'service' => $service]);

    }

    function about($type){
        return DB::table('abouts')->where('type',$type)->get();
    }

    function slider()
    {
        return DB::table('slider_tbl')->get();
    }

    function  testimonial()
    {
        return DB::table('testimonials')->get();
    }
    function clients()
    {
        return DB::table('clients')->get();
    }

    function category()
    {
        $service_category =   DB::table('categories')->get();
        $product_category =    DB::table('product_categories')->get();
        return response()->json(['service_category' => $service_category, 'product_category' => $product_category]);
    }
}
