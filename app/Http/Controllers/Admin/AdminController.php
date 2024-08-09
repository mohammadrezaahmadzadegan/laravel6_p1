<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.index');

   }
   public function index2()
   {

       return view('admin.index2');

  }
  public function index3()
  {

      return view('admin.index3');

 }
}
