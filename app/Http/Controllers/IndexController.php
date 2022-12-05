<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{


    function index()
    {
        $products = DB::select('select `products`.`id` AS `id`,`products`.`category` AS `category`,`products`.`log_title` AS `log_title`,`products`.`slug` AS `slug`,`products`.`log_description` AS `log_description`,`product_images`.`name` AS `img_name` from (`products` join `product_images`) where `products`.`id` = `product_images`.`product_id` group by `products`.`id` order by `products`.id desc   limit 9');
        $services = DB::select('select `services`.`id` AS `id`,`services`.`category` AS `category`,`services`.`log_title` AS `log_title`,`services`.`slug` AS `slug`,`services`.`log_description` AS `log_description`,`service_images`.`name` AS `img_name` from (`services` join `service_images`) where `services`.`id` = `service_images`.`service_id`  group by `services`.`id`  order by `services`.id desc limit 9');
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
