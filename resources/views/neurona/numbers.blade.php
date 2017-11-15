@extends('template')

@section('content')
  <div class="col-md-12 top20">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">

        <div class="jumbotron">
        <h2>20 numeros aleatorios</h2> <hr>
          <p>
            @foreach($numbers as $number)
              {{ $number }};
            @endforeach
          </p>
          <a href="{{url('/')}}" class="btn btn-primary">
            <i class="fa fa-arrow-left"></i> Volver
          </a>
        </div>

      </div>
    </div>
  </div>
@endsection
