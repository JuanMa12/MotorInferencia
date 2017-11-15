@extends('template')

@section('content')
  <div class="col-md-12 top20">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">

        <div class="jumbotron">
          <h3>Crear</h3> <hr>
          <form class="" action="{{ url('neuron')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="">Nombre</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Valores</label>
              <textarea name="values" class="form-control"></textarea>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Peso 1</label>
                  <input type="number" name="weight_one" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Peso 2</label>
                  <input type="number" name="weight_two" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Umbral</label>
                  <input type="number" name="threshold" class="form-control">
                </div>
              </div>
            </div>

            <div class="form-group text-center">
              <input type="submit" value="Enviar" class="btn btn-success">
            </div>
          </form>
          <a href="{{url('/')}}" class="btn btn-primary">
            <i class="fa fa-arrow-left"></i> Volver
          </a>
        </div>

      </div>
    </div>
  </div>
@endsection
