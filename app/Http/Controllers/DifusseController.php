<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DifusseController extends Controller
{
  public function index()
  {
    return view('difusa/index');
  }

  public function graph()
  {
    return view('difusa/graph');
  }
}
