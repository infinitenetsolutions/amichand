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
    function product_single($slug)
    {
        $product =  DB::table('products')->where('slug', $slug)->first();
        $feature = DB::table('product_features')->where('product_id', $product->id)->get();
        $images = DB::table('product_images')->where('product_id', $product->id)->get();
        $products = DB::table('product_with_image')->limit(20)->get();
        $category = DB::table('product_categories')->get();
        return response()->json(['product' => $product, 'feature' => $feature, 'images' => $images, 'products' => $products, 'category' => $category]);
    }
}
