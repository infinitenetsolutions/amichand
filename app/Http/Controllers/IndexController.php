<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{


    function index()
    {
        $products = DB::table('product_with_image')->limit(9)->get();
        $services = DB::table('service_with_images')->limit(9)->get();

        return response()->json(['products' => $products, 'services' => $services]);
    }

    function about($type)
    {
        $all_product = DB::table('products')->count('id');
        $all_clients = DB::table('clients')->count('id');
        $about =  DB::table('abouts')->where('type', $type)->first();
        return response()->json(['all_product' => $all_product, 'all_clients' => $all_clients, 'about' => $about]);
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
