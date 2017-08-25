@extends('template')

@section('content')
  <div class="col-md-12 top20">
    <div class="jumbotron text-center">
      <h3>Elige uno entre estos animales!</h3>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            @foreach($animals as $animal)
              <div class="col-md-3 top20">
                @if($animal->id == 1)<span class="label label-success">{{ $animal->name }}</span>@endif
                @if($animal->id == 2)<span class="label label-primary">{{ $animal->name }}</span>@endif
                @if($animal->id == 3)<span class="label label-warning">{{ $animal->name }}</span>@endif
                @if($animal->id == 4)<span class="label label-danger">{{ $animal->name }}</span>@endif
                @if($animal->id == 7)<span class="label label-success">{{ $animal->name }}</span>@endif
                @if($animal->id == 5)<span class="label label-primary">{{ $animal->name }}</span>@endif
                @if($animal->id == 8)<span class="label label-warning">{{ $animal->name }}</span>@endif
                @if($animal->id == 6)<span class="label label-danger">{{ $animal->name }}</span>@endif
                <img src="{{ $animal->image }}"
                  alt="gato" class="img-thumbnail img-animals">
              </div>
            @endforeach
          </div>
        </div>
        <div class="col-md-12 text-center">
          <p>Este sistema tratara de adivinar cual animal elegiste.</p>
          <a class="btn btn-primary btn-lg" href="{{url('/first')}}" role="button">
            <i class="fa fa-check-circle"></i> Empezemos</a>
        </div>
        <div class="col-md-12 text-center">
          <a href="{{url('/reglas')}}">Leer Reglas</a>
        </div>
      </div>
    </div>
  </div>
@endsection
