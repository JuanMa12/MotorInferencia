<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;

class AnimalController extends Controller
{
    public function index()
    {
      $animals = Animal::all();
      return view('animales/index',compact('animals'));
    }

    public function first()
    {
      return view('animales/first');
    }

    public function bark(Request $request)
    {
      $domestic = $request->domestic;
      $bark = $request->bark;

      $animal = Animal::where('domestic',$domestic)->where('bark',$bark)->first();

      return response()->json(['animal' => $animal]);
    }

    public function extinction(Request $request)
    {
      $domestic = $request->domestic;
      $extinction = $request->extinction;

      $animal = Animal::where('domestic',$domestic)->where('extinction',$extinction)->first();

      return response()->json(['animal' => $animal]);
    }
}