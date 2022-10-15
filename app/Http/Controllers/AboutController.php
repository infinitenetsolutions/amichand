<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AboutController extends Controller
{
  public function team(){
    return DB::table('all_users')->get();
   }
  public function mission_vision(){
      $mission=DB::table('about')->where('type','mission')->first();
      $vision=DB::table('about')->where('type','vision')->first();
      return response()->json(['mission'=>$mission,'vision'=>$vision]);
   }
}
