<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class Home extends Controller
{
   public function showHome()
   {
       //$menus = DB::select("Select * from menus");
       $menus = Menu::all();
       return view('welcome',compact('menus'));
   }
}
