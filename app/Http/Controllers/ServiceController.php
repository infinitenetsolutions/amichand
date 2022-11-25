<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    function index($category)
    {
        $cat=DB::table('categories')->where('name','like','%'.$category.'%')->first();
        $services = DB::select('select `services`.`id` AS `id`,`services`.`category` AS `category`,`services`.`log_title` AS `log_title`,`services`.`slug` AS `slug`,`services`.`log_description` AS `log_description`,`service_images`.`name` AS `img_name` from (`services` join `service_images`) where `services`.`id` = `service_images`.`service_id`  &&  `category`='.$cat->id.' group by `services`.`id`');
        return $services;
    }
    function service_single($slug)
    {
        $service =  DB::table('services')->where('slug', $slug)->first();
        $category= DB::table('categories')->get();
        $images = DB::table('service_images')->where('service_id', $service->id)->get();
        $all_services = DB::select('select `services`.`id` AS `id`,`services`.`category` AS `category`,`services`.`log_title` AS `log_title`,`services`.`slug` AS `slug`,`services`.`log_description` AS `log_description`,`service_images`.`name` AS `img_name` from (`services` join `service_images`) where `services`.`id` = `service_images`.`service_id` LIMIT 20');
        return response()->json(['service' => $service, 'images' => $images,'category'=>$category,'all_service'=>$all_services]);
    }
}
