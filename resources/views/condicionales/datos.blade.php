@extends('template')

@section('content')
  <div class="col-md-12 top20">
    <div class="jumbotron text-center">
      <h1>Datos</h1><hr>
      <div class="row">
        <div class="col-md-12 text-center">
            @if($codeudor == true)
                <h4>Por tener menos de 22 años necesitas de codeudor!</h4>
            @endif
        </div>
        <div class="col-md-6 col-md-offset-3">
          <form action="{{url('datos')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{$id}}">
            <div class="row top20">
              @if($codeudor == true)
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Nombre Codeudor</label>
                    <input type="text" name="name_codeudor" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="">Cedula Codeudor</label>
                    <input type="number" name="cedula_codeudor" class="form-control" required>
                  </div>
                </div>
              @endif

              @if($codeudor == true)<div class="col-md-6">@else
                <div class="col-md-12">
              @endif
                <div class="form-group">
                  <label for="">Nombre </label>
                  <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="">Cedula</label>
                  <input type="text" name="cedula" class="form-control" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="">Ingresos Mensuales @if($codeudor == true) Codeudor @endif </label>
                  <input type="text" name="ingresos" class="form-control" required>
                </div>
              </div>
            </div>


            <button class="btn btn-primary btn-md top20" type="submit">
              <i class="fa fa-send"></i> Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
