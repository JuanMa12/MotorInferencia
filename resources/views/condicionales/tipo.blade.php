@extends('template')

@section('content')
  <div class="col-md-12 top20">
    <div class="jumbotron text-center">
      <h1>Tipo</h1><hr>
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <form action="{{url('tipo')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{$id}}">
              <div class="form-group">
                <label for="">Tipo del credito</label>
                <select type="text" name="tipo" class="form-control" required>
                  <option value="0" disabled>Seleccione el tipo</option>
                  <option value="0">Credito Educativo</option>
                  <option value="1">Credito de libre inversion</option>
                  <option value="2">Credito para vehiculo</option>
                  <option value="3">Credito de vivienda</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Numero de cuotas</label>
                <input type="number" name="num_cuotas" class="form-control" required>
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-md top20" type="submit">
                  <i class="fa fa-send"></i> Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
