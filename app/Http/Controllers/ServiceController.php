<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    function index($category)
    {
        $cat=DB::table('categories')->where('name','like','%'.$category.'%')->first();
        $services= DB::table('service_with_images')->where('category',$cat->id)->get();
        return $services;
    }
    function service_single($slug)
    {
        $service =  DB::table('services')->where('slug', $slug)->first();
        $category= DB::table('categories')->get();
        $images = DB::table('service_images')->where('service_id', $service->id)->get();
        return response()->json(['service' => $service, 'images' => $images,'category'=>$category]);
    }
}
