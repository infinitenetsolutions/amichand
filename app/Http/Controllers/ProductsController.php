<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    function index($category)
    {
        $cat=DB::table('product_categories')->where('name','like','%'.$category.'%')->first();
     

        $products = DB::select('select `products`.`id` AS `id`,`products`.`category` AS `category`,`products`.`log_title` AS `log_title`,`products`.`slug` AS `slug`,`products`.`log_description` AS `log_description`,`product_images`.`name` AS `img_name` from (`products` join `product_images`) where `products`.`id` = `product_images`.`product_id` group by `products`.`id` && `category`='.$cat->id.'');

       $category = DB::table('product_categories')->get();
       return response()->json(['products' => $products, 'category' => $category]);
    }
    function product_single($slug)
    {
        $product =  DB::table('products')->where('slug', $slug)->first();
        $feature = DB::table('product_features')->where('product_id', $product->id)->get();
        $images = DB::table('product_images')->where('product_id', $product->id)->get();
        $products = DB::select('select `products`.`id` AS `id`,`products`.`category` AS `category`,`products`.`log_title` AS `log_title`,`products`.`slug` AS `slug`,`products`.`log_description` AS `log_description`,`product_images`.`name` AS `img_name` from (`products` join `product_images`) where `products`.`id` = `product_images`.`product_id` group by `products`.`id` LIMIT 20');
        $category = DB::table('product_categories')->get();
        return response()->json(['product' => $product, 'feature' => $feature, 'images' => $images, 'products' => $products, 'category' => $category]);
    }
}
