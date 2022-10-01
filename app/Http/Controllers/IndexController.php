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
    function products()
    {
        return DB::table('product_with_image')->limit(9)->get();
    }

    function services()
    {
        return DB::table('service_with_images')->limit(9)->get();
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
      $service_category=   DB::table('categories')->get();
      $product_category=    DB::table('product_categories')->get();
      return response()->json(['service_category'=>$service_category,'product_category'=>$product_category]);
    }
 
}
