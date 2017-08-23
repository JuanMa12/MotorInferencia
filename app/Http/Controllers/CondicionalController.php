<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Credito;

class CondicionalController extends Controller
{
    public function index($value)
    {
      return view('condicionales/year',compact('value'));
    }

    public function year(Request $request)
    {
      $years = $request->input('years');

      $credito = Credito::create($request->all());
      $id = $credito->id;
      if($years <= 22){
        $codeudor = true;
      }
      if($years > 22){
        $codeudor = false;
      }

      return view('condicionales/datos',compact('codeudor','id'));
    }

    public function datos(Request $request)
    {
      $id = $request->input('id');
      $name = $request->input('name');
      $ingresos = $request->input('ingresos');
      $cedula = $request->input('cedula');
      $name_codeudor = $request->input('name_codeudor');
      $cedula_codeudor = $request->input('cedula_codeudor');

      $credito = Credito::find($id);
      $credito->name = $name;
      $credito->ingresos = $ingresos;
      $credito->cedula = $cedula;
      if($name_codeudor){ $credito->name_codeudor = $name_codeudor; }
      if($cedula_codeudor){ $credito->cedula_codeudor = $cedula_codeudor; }
      $credito->save();

      return view('condicionales/valor',compact('id'));
    }

    public function valor(Request $request)
    {
      $id = $request->input('id');
      $valor = $request->input('valor');

      $credito = Credito::find($id);
      $credito->valor = $valor;
      $credito->save();

      return view('condicionales/tipo',compact('id'));
    }

    public function tipo(Request $request)
    {
      $id = $request->input('id');
      $tipo = $request->input('tipo');
      $num_cuotas = $request->input('num_cuotas');

      $credito = Credito::find($id);
      $credito->tipo = $tipo;
      $credito->num_cuotas = $num_cuotas;
      $credito->save();

      $calculo = $credito->valor/$num_cuotas;

      //estado: segun=> valor/cuotas menor que ingresos
      if($calculo <= $credito->ingresos){ $estado = "Aprovado"; }
      if($calculo > $credito->ingresos){ $estado = "No Aprovado";  }

      //interes: interes segun por el valor
      if($tipo == 0){ $interes = 1.2; }
      if($tipo == 1 || $tipo == 2){ $interes = 2.0; }
      if($tipo == 3){ $interes = 1.5; }

      //valor por cuota
      $con_interes = (($credito->valor*$interes)/$num_cuotas);
      $cuota = (($credito->valor+$con_interes)/$num_cuotas);
      $total = $credito->valor+$con_interes;

      return view('condicionales/result',compact('credito','estado','cuota','total'));
    }

}
