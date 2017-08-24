@extends('template')

@section('content')
  <div class="col-md-12 top20">
    <div class="jumbotron text-center">

      <div class="row" id="domestic_content">
        <div class="col-md-12">
          <h3>Es una mascota?</h3>
        </div>
        <div class="col-md-6 col-md-offset-3">
          <div class="row top20">
            <div class="col-md-6">
              <button class="btn btn-primary" onclick="domestic('true')"> <i class="fa fa-check-circle"></i> Si</button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-danger" onclick="domestic('false')"> <i class="fa fa-times-circle"></i> No</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Domestic -->
      <div class="row hidden" id="bark_content">
        <div class="col-md-12">
          <h3>Ladra?</h3>
        </div>
        <div class="col-md-6 col-md-offset-3">
          <div class="row top20">
            <div class="col-md-6">
              <button class="btn btn-primary" onclick="bark('true')"> <i class="fa fa-check-circle"></i> Si</button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-danger" onclick="bark('false')"> <i class="fa fa-times-circle"></i> No</button>
            </div>
          </div>
        </div>
      </div>

      <!-- End Domestic -->

      <div class="row hidden" id="extinction_content">
        <div class="col-md-12">
          <h3>Esta en extinsión?</h3>
        </div>
        <div class="col-md-6 col-md-offset-3">
          <div class="row top20">
            <div class="col-md-6">
              <button class="btn btn-primary" onclick="extinction('true')"> <i class="fa fa-check-circle"></i> Si</button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-danger" onclick="extinction('false')"> <i class="fa fa-times-circle"></i> No</button>
            </div>
          </div>
        </div>
      </div>



      <div class="row hidden" id="result_content">
        <div class="col-md-12">
          <h2>El animal es un:</h2>
          <h3 id="name" class="btn btn-sm btn-success">Nombre Mascota</h3>
        </div>
        <div class="col-md-12 center-block">
          <img src="" id="image_data" class="img-thumbnail img-big" alt="">
        </div>
      </div>



    </div>
  </div>

  <div class="col-md-12 top20">
    <div class="jumbotron text-center row">
      <div class="values col-md-12">
        <label for="">Domestic</label>
        <input type="text" name="domestic" id="domestic" class="form-control">
        <label for="">Bark</label>
        <input type="text" name="bark" id="bark" class="form-control">
        <label for="">Extinction</label>
        <input type="text" name="extinction" id="extinction" class="form-control">
        <input type="text" name="jump" id="jump" class="form-control">
        <input type="text" name="bark" id="bark" class="form-control">
      </div>
    </div>
  </div>
  <script type="text/javascript">
      function domestic(value){
        $('#domestic').val(value);
        $('#domestic_content').addClass('hidden');
        if(value == 'false'){
          $('#extinction_content').removeClass('hidden');
        }else{
          $('#bark_content').removeClass('hidden');
        }
      }

      // ajax function
      function ajax(url,data,done,error){
          $.ajax({
              url: url,
              context : document.body,
              dataType: "json",
              type: "GET",
              data: data
          }).done(done);
      }

      function bark(value){
        $('#bark').val(value);
        $('#bark_content').addClass('hidden');
        if(value == 'false'){
          $('#extinction_content').removeClass('hidden');
        }else{
          var domestic_data = $('#domestic').val();
          var bark_data = $('#bark').val();
          ajax("/bark",{domestic: domestic_data, bark: bark_data},
            function(data){
              result(data);
            },10000);
        }
      }

      function extinction(value){
        $('#extinction').val(value);
        $('#extinction_content').addClass('hidden');
        if(value == 'false'){
          $('#extinction_content').removeClass('hidden');
        }else{
          var domestic_data = $('#domestic').val();
          var extinction_data = $('#extinction').val();
          ajax("/extinction",{domestic: domestic_data, extinction: extinction_data},
            function(data){
              result(data);
            },10000);
        }
      }

      function result(data){
        var animal = data.animal
        $('#result_content').removeClass('hidden');
        $('#name').text(animal.name);
        var image_animal = animal.image;
        console.log(image_animal);
        $('#image_data').attr('src',image_animal);
      }




  </script>
@endsection
