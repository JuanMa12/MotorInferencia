@extends('template')

@section('content')
  <div class="col-md-12 top20">
    <div class="jumbotron text-center">
      <h1> <i class="fa fa-info"></i> Credito {{ $estado }}</h1><hr>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <table class="table table-responsive">
            <tbody>
              <tr>
                <th>Nombre Afiliado</th>
                <td>{{ $credito->name }}</td>
              </tr>
              <tr>
                <th>Cedula Afiliado</th>
                <td>{{ $credito->cedula }}</td>
              </tr>
              <tr>
                <th>Ingresos Mensuales</th>
                <td>$ {{ number_format($credito->ingresos,0,',','.') }}</td>
              </tr>
              @if($credito->name_codeudor != null)
                <tr>
                  <th>Nombre Codeudor</th>
                  <td>{{ $credito->name_codeudor }}</td>
                </tr>
                <tr>
                  <th>Cedula Codeudor</th>
                  <td>{{ $credito->cedula_codeudor }}</td>
                </tr>
              @endif
              <tr>
                <th>Monto del credito</th>
                <td>$ {{ number_format($credito->valor,0,',','.') }}</td>
              </tr>
              @if($estado == "Aprovado")
              <tr>
                <th>Total a Pagar</th>
                <td>$ {{ number_format($total,0,',','.') }}</td>
              </tr>
              <tr>
                <th>Coutas</th>
                <td>Tus cuotas quedaran por $ {{ number_format($cuota,0,',','.') }}  , durante {{ $credito->num_cuotas }} meses.</td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>
        <div class="col-md-12">
          <a class="btn btn-primary pull-right" href="{{url('/')}}">
            <i class="fa fa-home"></i> Inicio
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
