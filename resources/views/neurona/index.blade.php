@extends('template')

@section('content')
  <div class="col-md-12 top20">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">

        <div class="jumbotron">
        <h3>Redes Neuronales</h3> <hr>
        <table class="table table-responsive">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Peso 1</th>
              <th>Peso 2</th>
              <th>Umbral</th>
              <th>Fecha</th>
              <th>Ver</th>
            </tr>
          </thead>
          <tbody>
            @foreach($neurons as $neuron)
                <tr>
                  <td>{{$neuron->id}}</td>
                  <td>{{$neuron->name}}</td>
                  <td>{{$neuron->weight_one}}</td>
                  <td>{{$neuron->weight_two}}</td>
                  <td>{{$neuron->threshold}}</td>
                  <td>{{$neuron->created_at}}</td>
                  <td>
                    <a href="{{ url('neuron/'.$neuron->id)}}" class="btn btn-warning btn-sm">
                      <i class="fa fa-eye"></i>
                    </a>
                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>

        <a href="{{ url('/numbers')}}" class="btn btn-default pull-right" style="margin-left:5px;">
          <i class="fa fa-plus"> </i> Numeros </a>
        <a href="{{ url('/neuron/create')}}" class="btn btn-primary pull-right">
          <i class="fa fa-plus"> </i> Crear </a>
        </div>

      </div>
    </div>
  </div>
@endsection
