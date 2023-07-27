<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\template;

class AdminHomeController extends Controller
{
   public function index(){
    $templates = template::get();
    return view('admin.home',compact('templates'));
   }
}
