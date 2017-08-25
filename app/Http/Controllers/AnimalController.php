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

    public function listAnimals()
    {
      $animals = Animal::all();
      return view('recursos/index',compact('animals'));
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

    public function rodent(Request $request)
    {
      $domestic = $request->domestic;
      $rodent = $request->rodent;

      $animal = Animal::where('domestic',$domestic)->where('rodent',$rodent)->first();

      return response()->json(['animal' => $animal]);
    }

    public function mount(Request $request)
    {
      $domestic = $request->domestic;
      $mount = $request->mount;

      $animal = Animal::where('domestic',$domestic)->where('mount',$mount)->first();

      return response()->json(['animal' => $animal]);
    }

    public function stripes(Request $request)
    {
      $domestic = $request->domestic;
      $stripes = $request->stripes;

      $animal = Animal::where('domestic',$domestic)->where('stripes',$stripes)->first();

      return response()->json(['animal' => $animal]);
    }

    public function flying(Request $request)
    {
      $domestic = $request->domestic;
      $flying = $request->flying;

      $animal = Animal::where('domestic',$domestic)->where('flying',$flying)->first();

      return response()->json(['animal' => $animal]);
    }
}
