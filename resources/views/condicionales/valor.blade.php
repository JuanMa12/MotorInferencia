@extends('template')

@section('content')
  <div class="col-md-12 top20">
    <div class="jumbotron text-center">
      <h1>Valor</h1><hr>
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <form action="{{url('valor')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{$id}}">
              <div class="form-group">
                <label for="">Valor del prestamo</label>
                <input type="text" name="valor" class="form-control" required>
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
