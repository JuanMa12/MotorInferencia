@extends('template')

@section('content')
  <div class="col-md-12 top20">
    <div class="jumbotron text-center">

      <div class="row" id="domestic_content">
        <div class="col-md-12">
          <h3>Es una mascota?</h3>
        </div>
        <div class="col-md-6 col-xs-12 col-md-offset-3">
          <div class="row top20">
            <div class="col-md-6 col-xs-6">
              <button class="btn btn-primary" onclick="domestic('true')"> <i class="fa fa-check-circle"></i> Si</button>
            </div>
            <div class="col-md-6 col-xs-6">
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
        <div class="col-md-6 col-xs-12 col-md-offset-3">
          <div class="row top20">
            <div class="col-md-6 col-xs-6">
              <button class="btn btn-primary" onclick="bark('true')"> <i class="fa fa-check-circle"></i> Si</button>
            </div>
            <div class="col-md-6 col-xs-6">
              <button class="btn btn-danger" onclick="bark('false')"> <i class="fa fa-times-circle"></i> No</button>
            </div>
          </div>
        </div>
      </div>

      <div class="row hidden" id="rodent_content">
        <div class="col-md-12">
          <h3>Es un roedor?</h3>
        </div>
        <div class="col-md-6 col-xs-12 col-md-offset-3">
          <div class="row top20">
            <div class="col-md-6 col-xs-6">
              <button class="btn btn-primary" onclick="rodent('true')"> <i class="fa fa-check-circle"></i> Si</button>
            </div>
            <div class="col-md-6 col-xs-6">
              <button class="btn btn-danger" onclick="rodent('false')"> <i class="fa fa-times-circle"></i> No</button>
            </div>
          </div>
        </div>
      </div>

      <div class="row hidden" id="mount_content">
        <div class="col-md-12">
          <h3>Se puede montar?</h3>
        </div>
        <div class="col-md-6 col-xs-12 col-md-offset-3">
          <div class="row top20">
            <div class="col-md-6 col-xs-6">
              <button class="btn btn-primary" onclick="mount('true')"> <i class="fa fa-check-circle"></i> Si</button>
            </div>
            <div class="col-md-6 col-xs-6">
              <button class="btn btn-danger" onclick="mount('false')"> <i class="fa fa-times-circle"></i> No</button>
            </div>
          </div>
        </div>
      </div>

      <!-- End Domestic -->

      <div class="row hidden" id="extinction_content">
        <div class="col-md-12">
          <h3>Esta en extinsión?</h3>
        </div>
        <div class="col-md-6 col-xs-12 col-md-offset-3">
          <div class="row top20">
            <div class="col-md-6 col-xs-6">
              <button class="btn btn-primary" onclick="extinction('true')"> <i class="fa fa-check-circle"></i> Si</button>
            </div>
            <div class="col-md-6 col-xs-6">
              <button class="btn btn-danger" onclick="extinction('false')"> <i class="fa fa-times-circle"></i> No</button>
            </div>
          </div>
        </div>
      </div>

      <div class="row hidden" id="flying_content">
        <div class="col-md-12">
          <h3>Vuela?</h3>
        </div>
        <div class="col-md-6 col-xs-12 col-md-offset-3">
          <div class="row top20">
            <div class="col-md-6 col-xs-6">
              <button class="btn btn-primary" onclick="flying('true')"> <i class="fa fa-check-circle"></i> Si</button>
            </div>
            <div class="col-md-6 col-xs-6">
              <button class="btn btn-danger" onclick="flying('false')"> <i class="fa fa-times-circle"></i> No</button>
            </div>
          </div>
        </div>
      </div>

      <div class="row hidden" id="jump_content">
        <div class="col-md-12">
          <h3>Salta?</h3>
        </div>
        <div class="col-md-6 col-xs-12 col-md-offset-3">
          <div class="row top20">
            <div class="col-md-6 col-xs-6">
              <button class="btn btn-primary" onclick="jump('true')"> <i class="fa fa-check-circle"></i> Si</button>
            </div>
            <div class="col-md-6 col-xs-6">
              <button class="btn btn-danger" onclick="jump('false')"> <i class="fa fa-times-circle"></i> No</button>
            </div>
          </div>
        </div>
      </div>

      <div class="row hidden" id="stripes_content">
        <div class="col-md-12">
          <h3>Tiene rayas?</h3>
        </div>
        <div class="col-md-6 col-xs-12 col-md-offset-3">
          <div class="row top20">
            <div class="col-md-6 col-xs-6">
              <button class="btn btn-primary" onclick="stripes('true')"> <i class="fa fa-check-circle"></i> Si</button>
            </div>
            <div class="col-md-6 col-xs-6">
              <button class="btn btn-danger" onclick="stripes('false')"> <i class="fa fa-times-circle"></i> No</button>
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
          <img src="" id="image_data" class="img-thumbnail img-big img-responsive hidden-xs hidden-sm" alt="">
          <img src="" id="image_data1" class="img-thumbnail img-medium img-responsive hidden-md hidden-lg" alt="">
        </div>
      </div>



    </div>
  </div>

  <div class="col-md-12 top20 hidden">
    <div class="jumbotron text-center row">
      <div class="values col-md-12">
        <label for="">Domestic</label>
        <input type="text" name="domestic" id="domestic" class="form-control">
        <label for="">Bark</label>
        <input type="text" name="bark" id="bark" class="form-control">
        <label for="">Extinction</label>
        <input type="text" name="extinction" id="extinction" class="form-control">
        <label for="">Vuela</label>
        <input type="text" name="flying" id="flying" class="form-control">
        <label for="">Roedor</label>
        <input type="text" name="rodent" id="rodent" class="form-control">
        <label for="">Rayas</label>
        <input type="text" name="stripes" id="stripes" class="form-control">
        <label for="">Mount</label>
        <input type="text" name="mount" id="mount" class="form-control">
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
          $('#rodent_content').removeClass('hidden');
        }else{
          var domestic_data = $('#domestic').val();
          var bark_data = $('#bark').val();
          ajax("/bark",{domestic: domestic_data, bark: bark_data},
            function(data){
              result(data);
            },10000);
        }
      }

      function rodent(value){
        $('#rodent').val(value);
        $('#rodent_content').addClass('hidden');
        if(value == 'false'){
          $('#mount_content').removeClass('hidden');
        }else{
          var domestic_data = $('#domestic').val();
          var rodent_data = $('#rodent').val();
          ajax("/rodent",{domestic: domestic_data, rodent: rodent_data},
            function(data){
              result(data);
            },10000);
        }
      }

      function mount(value){
        $('#mount').val(value);
        $('#mount_content').addClass('hidden');
        if(value == 'false'){
          $('#jump_content').removeClass('hidden');
        }else{
          var domestic_data = $('#domestic').val();
          var mount_data = $('#mount').val();
          ajax("/mount",{domestic: domestic_data, mount: mount_data},
            function(data){
              result(data);
            },10000);
        }
      }





      function extinction(value){
        $('#extinction').val(value);
        $('#extinction_content').addClass('hidden');
        if(value == 'false'){
          $('#flying_content').removeClass('hidden');
        }else{
          $('#mount_content').removeClass('hidden');
        }
      }

      function flying(value){
        $('#flying').val(value);
        $('#flying_content').addClass('hidden');
        if(value == 'false'){
          $('#stripes_content').removeClass('hidden');
        }else{
          var domestic_data = $('#domestic').val();
          var flying_data = $('#flying').val();
          ajax("/flying",{domestic: domestic_data, flying: flying_data},
            function(data){
              result(data);
            },10000);
        }
      }

      function jump(value){
        $('#jump').val(value);
        $('#jump_content').addClass('hidden');
        if(value == 'false'){
          $('#flying_content').removeClass('hidden');
        }else{
          var domestic_data = $('#domestic').val();
          var jump_data = $('#jump').val();
          if(domestic_data == 'true'){
            $('#stripes_content').removeClass('hidden');
          }else{
            ajax("/jump",{domestic: domestic_data, jump: jump_data},
              function(data){
                result(data);
              },10000);
          }
        }
      }

      function stripes(value){
        $('#stripes').val(value);
        $('#stripes_content').addClass('hidden');
        if(value == 'false'){
          $('#mount_content').removeClass('hidden');
        }else{
          var domestic_data = $('#domestic').val();
          var stripes_data = $('#stripes').val();
          ajax("/stripes",{domestic: domestic_data, stripes: stripes_data},
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
        $('#image_data').attr('src',image_animal);
        $('#image_data1').attr('src',image_animal);
      }




  </script>
@endsection
