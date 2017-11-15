<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Neuron;
use App\Position;

class NeuronController extends Controller
{
  public function index(Request $request)
  {
    $neurons = Neuron::all();

    return view('neurona.index',compact('neurons'));
  }

  public function create()
  {
    return view('neurona.create');
  }

  public function store(Request $request)
  {
    $neuron = Neuron::create($request->all());

    $numbers = explode(";", $request->values);

    $total_numbers = count($numbers)-1;
    for ($i=0; $i < $total_numbers; $i++) {
      $num = $numbers[$i];
      $number = Position::create([
          'value' => $num,
          'neuron_id' => $neuron->id
        ]);
    }

    return redirect()->to('/');
  }

  public function show($id)
  {
    $neuron = Neuron::where('id',$id)->first();
    $values = Position::where('neuron_id',$id)->get();

    $weight_one = $neuron->weight_one;
    $weight_two = $neuron->weight_two;
    $umbral = $neuron->threshold;

    $x1 = $values[0]['value'];
    $x2 = $values[1]['value'];
    $y1 = 0.5+(1/PI())*ATAN($x1*$weight_one+$x2*$weight_two-$umbral);
    for ($i=0; $i < count($values); $i++) {
      $array_values[] = $values[$i]['value'];
    }

    $min = min($array_values);
    $max = max($array_values);

    return view('neurona.view',compact('neuron','values','y1','min','max'));
  }


  public function numbers()
  {
    $numbers = array();
    $max_num = 20;
    for ($x=0;$x<$max_num;$x++) {
      $num_aleatorio = rand(100,999);
      array_push($numbers,$num_aleatorio);
    }

    return view('neurona.numbers',compact('numbers'));
  }


  public function list_numbers(Request $request)
  {
    $id = $request->get('id');

    $values = Position::where('neuron_id',$id)->select('value')->get();
    $ids = Position::where('neuron_id',$id)->select('id')->get();

    return response()->json([
      'values' => $values,
      'ids' => $ids
    ]);
  }

  public function y1()
  {
    $id = 2;
    $threshold = Neuron::where('id',$id)->first();
    $values = Position::where('neuron_id',$id)->get();

    $weight_one = $threshold->weight_one;
    $weight_two = $threshold->weight_two;
    $umbral = $threshold->threshold;

    $y1 = [];

    for($i = $values[0]['id']; $i < count($values) ; $i++) {

      $x1 = $values[$i]['value'];
      $x2 = $x1+1;


      $formula = 0.5+(1/PI())*ATAN($x1*$weight_one+$x2*$weight_two-$umbral);


      $y1 = array(
        'value' => $formula,
        'id' => $values[$i]['id'] );

      $array[] = $y1;
    }



    dd($array);
    return response()->json([
      'values' => $values
    ]);
  }
}
