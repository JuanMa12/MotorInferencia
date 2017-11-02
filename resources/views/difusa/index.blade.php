@extends('template')
@section('content')

<div class="col-md-12 text-center">
  <h3>Probabilidad de fractura por la caida de una bicicleta </h3>
  <hr>
</div>

<div class="col-md-5 col-md-offset-1 text-center">
  <img src="https://media.giphy.com/media/3o6ZtekN7LuGnulfAQ/giphy.gif"
  class="img-responsive center-block img-gif" alt="">
</div>

<div class="col-md-5">
    <div class="row top20">
      <form class="" action="" method="post">
          <div class="col-md-4">
            <label for="">Velocidad:</label>
            <select id="speed" class="form-control" required>
              <option value="" selected disabled >Velocidad</option>
              <option value="Baja">Baja</option>
              <option value="Medio-Baja">Medio-Baja</option>
              <option value="Media">Media</option>
              <option value="Medio-Alta">Medio-Alta</option>
              <option value="Alta">Alta</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="">Estado de la via:</label>
            <select id="status" class="form-control" required>
              <option value="" selected disabled >Estado de la via</option>
              <option value="Malo">Malo</option>
              <option value="Regular">Regular</option>
              <option value="Bueno">Bueno</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="">Imprudencia:</label>
            <select id="imprudence" class="form-control" requiredc>
              <option value="" selected disabled >Imprudencia </option>
              <option value="Baja">Baja</option>
              <option value="Medio-Baja">Medio-Baja</option>
              <option value="Media">Media</option>
              <option value="Medio-Alta">Medio-Alta</option>
              <option value="Alta">Alta</option>
            </select>
          </div>
      </form>
      <div class="col-md-12 top20 text-center">
        <button class="btn btn-primary" id="button">Calcular</button>
        <button class="btn btn-default" id="trash"><i class="fa fa-trash"> </i></button>
      </div>
    </div>
</div>

<div class="col-md-12 top20">
  <h4>Base de reglas</h4>
</div>
<div class="col-md-12 top20">
        <ul>
          <li>Si la velocidad es <strong>alta</strong>, la probabilidad de fractura es
            <strong>ALTA</strong>.</li>
          <li>Si la velocidad es <strong>media</strong>, la probabilidad de fractura es
            <strong>MEDIA</strong>.</li>
          <li>Si la velocidad es <strong>baja</strong>, la probabilidad de fractura es
            <strong>BAJA</strong>.</li>
          <li>Si la velocidad es <strong>medio baja</strong>, la probabilidad de fractura es
            <strong>BAJA</strong>.</li>
          <li>Si la velocidad es <strong>medio alta</strong>, la probabilidad de fractura es
            <strong>ALTA</strong>.</li>

          <li>Si el estado de la via es <strong>malo</strong>, la probabilidad de fractura es
            <strong>MEDIA</strong>.</li>
          <li>Si el estado de la via es <strong>regular</strong>, la probabilidad de fractura es
            <strong>BAJA</strong>.</li>
          <li>Si el estado de la via es <strong>bueno</strong>, la probabilidad de fractura es
            <strong>BAJA</strong>.</li>

          <li>Si la imprudencia es <strong>alta</strong>, la probabilidad de fractura es
            <strong>MEDIA</strong>.</li>
          <li>Si la imprudencia es <strong>media</strong>, la probabilidad de fractura es
            <strong>BAJA</strong>.</li>
          <li>Si la imprudencia es <strong>baja</strong>, la probabilidad de fractura es
            <strong>BAJA</strong>.</li>

          <li>Si la velocidad es <strong>baja</strong> y la via esta en <strong>mal</strong>
            estado, la probabilidad de fractura es <strong>BAJA</strong>.</li>
          <li>Si la velocidad es <strong>media</strong> y la via esta en <strong>mal</strong>
            estado, la probabilidad de fractura es <strong>MEDIA</strong>.</li>
          <li>Si la velocidad es <strong>alta</strong> y la via esta en <strong>mal</strong>
            estado, la probabilidad de fractura es <strong>ALTA</strong>.</li>

          <li>Si la velocidad es <strong>baja</strong>, la via esta en <strong>mal</strong>
            estado y la imprudencia es <strong>baja</strong> la probabilidad de fractura es
            <strong>BAJA</strong>.</li>
          <li>Si la velocidad es <strong>media</strong>, la via esta en <strong>mal</strong>
            estado y la imprudencia es <strong>media</strong> la probabilidad de fractura es
            <strong>MEDIA</strong>.</li>
          <li>Si la velocidad es <strong>alta</strong>, la via esta en <strong>buen</strong>
            estado y la imprudencia es <strong>baja</strong> la probabilidad de fractura es
            <strong>BAJA</strong>.</li>
        </ul>
</div>
<div class="col-md-12">
  <a href="/graph" class="btn btn-info pull-right"><i class="fa fa-line-chart"> </i> Grafica</a>
</div>
<div class="col-md-12">
  <hr>
</div>

<div class="container">
    <input type="hidden" id="value_speed" value="">
    <input type="hidden" id="value_status" value="">
    <input type="hidden" id="value_imprudence" value="">
</div>

<!-- Modal -->
  <div id="modal-calculate" class="modal fade" tabindex="-1" role="dialog"
      aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title mt-0">Probabilidad de Fractura
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></h4>
          </div>
          <div class="modal-body text-center">
            <h2><span id="probability"></span> <i class="fa" id="fa"> </i></h2>
            <br>
            <p><span>Velocidad: </span> <strong id="text_speed" style="font-size: 16px;"></strong></p>
            <p><span>Estado de la via: </span> <strong id="text_status" style="font-size: 16px;"></strong></p>
            <p><span>Imprudencia: </span> <strong id="text_imprudence" style="font-size: 16px;"></strong></p>
          </div>
      </div>
    </div>
  </div>
  <!-- End Modal -->

<script type="text/javascript">

      $('#button').click(function(){

        var velocidad = $('#value_speed').val();
        var estado = $('#value_status').val();
        var imprudencia = $('#value_imprudence').val();

        console.log('s:'+velocidad+' e:'+estado+' i:'+imprudencia);

        if(velocidad == '' && estado == ''  && imprudencia == ''){
          $('#probability').text('NO HAS SELECCIONADO NINGUNA REGLA');
        }

        if(velocidad == 'Alta' && estado == '' && imprudencia == ''){ probability_high(); }
        if(velocidad == 'Medio-Alta' && estado == '' && imprudencia == ''){ probability_high(); }
        if(velocidad == 'Media' && estado == '' && imprudencia == ''){ probability_average(); }
        if(velocidad == 'Medio-Baja' && estado == '' && imprudencia == ''){ probability_low(); }
        if(velocidad == 'Baja' && estado == '' && imprudencia == ''){ probability_low(); }

        if(velocidad == '' && estado == 'Malo' && imprudencia == ''){ probability_average(); }
        if(velocidad == '' && estado == 'Regular' && imprudencia == ''){ probability_low(); }
        if(velocidad == '' && estado == 'Bueno' && imprudencia == ''){ probability_low(); }

        if(velocidad == '' && estado == '' && imprudencia == 'Alta'){ probability_average(); }
        if(velocidad == '' && estado == '' && imprudencia == 'Medio-Alta'){ probability_average(); }
        if(velocidad == '' && estado == '' && imprudencia == 'Media'){ probability_low(); }
        if(velocidad == '' && estado == '' && imprudencia == 'Medio-Baja'){ probability_low(); }
        if(velocidad == '' && estado == '' && imprudencia == 'Baja'){ probability_low(); }

        if(velocidad == 'Baja' && estado == 'Malo' && imprudencia == ''){ probability_low(); }
        if(velocidad == 'Media' && estado == 'Malo' && imprudencia == ''){ probability_average(); }
        if(velocidad == 'Alta' && estado == 'Malo' && imprudencia == ''){ probability_high(); }

        if(velocidad == 'Media' && estado == 'Regular' && imprudencia == ''){ probability_average(); }
        if(velocidad == 'Alta' && estado == 'Malo' && imprudencia == ''){ probability_high(); }

        if(velocidad == 'Baja' && estado == 'Malo' && imprudencia == 'Baja'){ probability_low(); }
        if(velocidad == 'Media' && estado == 'Malo' && imprudencia == 'Media'){ probability_average(); }
        if(velocidad == 'Alta' && estado == 'Bueno' && imprudencia == 'Baja'){ probability_low(); }

        $('#modal-calculate').modal('show');
      });


      //trash
      $('#trash').click(function(){
        $('#speed').val('');
        $('#value_speed').val('');
        $('#imprudence').val('');
        $('#value_imprudence').val('');
        $('#status').val('');
        $('#value_status').val('');
      });
      $('#trash').hover(
        function() {
          $( this ).append( $( "<span> Limpiar</span>" ) );
          $('text_trash').removeClass('hidden');
        }, function() {
          $( this ).find( "span:last" ).remove();
        }
      );


      //on change
      $('#speed').change(function(){
        $('#value_speed').val($(this).val());
        $('#text_speed').text($(this).val());
      });
      $('#imprudence').change(function(){
        $('#value_imprudence').val($(this).val());
        $('#text_imprudence').text($(this).val());
      })
      $('#status').change(function(){
        $('#value_status').val($(this).val());
        $('#text_status').text($(this).val());
      })

      function probability_high(){
        $('#probability').text('ALTA');
        $('#probability').css('color','red');
        $('#fa').removeClass('fa-circle');
        $('#fa').removeClass('fa-check-circle-o');
        $('#fa').addClass('fa-times-circle-o');
        $('#fa').css('color','red');
      }

      function probability_average(){
        $('#probability').text('MEDIA');
        $('#probability').css('color','orange');
        $('#fa').removeClass('fa-check-circle-o');
        $('#fa').removeClass('fa-times-circle-o');
        $('#fa').addClass('fa-circle');
        $('#fa').css('color','orange');
      }

      function probability_low(){
        $('#probability').text('BAJA');
        $('#probability').css('color','green');
        $('#fa').removeClass('fa-circle');
        $('#fa').removeClass('fa-times-circle-o');
        $('#fa').addClass('fa-check-circle-o');
        $('#fa').css('color','green');
      }
    </script>
@endsection
