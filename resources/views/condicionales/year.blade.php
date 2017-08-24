@extends('template')

@section('content')
  <div class="col-md-12 top20">
    <div class="jumbotron text-center">
      @if($value == 'yes')
      <h1>Cuantos años tienes?</h1><hr>
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <form class="" action="{{url('year')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="number" name="years" class="form-control" required>
            <button class="btn btn-primary btn-md top20"  type="submit">
              <i class="fa fa-send"></i> Enviar</button>
          </form>
        </div>
      </div>
      @else
      <div class="row">
        <div class="col-md-12 text-center">
            <h3>  <i class="fa fa-info"></i>
            Lo sentimos no podemos hacer nada mas por ti!.</h3>
            <a class="btn btn-primary" href="{{url('/')}}">
              <i class="fa fa-home"></i> Inicio
            </a>
        </div>
      </div>
      @endif
    </div>
  </div>
@endsection
