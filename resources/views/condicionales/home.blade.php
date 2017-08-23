@extends('template')

@section('content')
  <div class="col-md-12 top20">
    <div class="jumbotron text-center">
      <h1>Quieres adquirir un credito?</h1><hr>
      <div class="row">
        <div class="col-md-6">
          <a class="btn btn-primary btn-lg" href="{{url('index/yes')}}" role="button">
            <i class="fa fa-check-circle"></i> Si</a>
        </div>
        <div class="col-md-6">
          <a class="btn btn-danger btn-lg" href="{{url('index/not')}}" role="button">
            <i class="fa fa-times-circle"></i> No</a>
        </div>
      </div>
    </div>
  </div>
@endsection
