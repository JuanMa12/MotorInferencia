@extends('template')
@section('content')
      <div class="col-md-6 col-md-offset-3 text-center top20 jumbotron">
        <h3>Grafica y calculo de pendiente</h3>

      <!-- one -->
      <div class="col-md-12 text-center top20 one">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <label for="">Digita la cantidad de puntos</label>
            <input type="number" id="num_pounts" class="form-control">
          </div>
          <div class="col-md-12 top20">
            <button id="pounts" class="btn btn-primary">Siguiente
            <i class="fa fa-arrow-right"></i></button>
          </div>
          <div class="col-md-12 top20">
            <button id="calculate-pending" class="btn btn-success">Calcular pendiente
            <i class="fa fa-arrow-right"></i></button>
          </div>
        </div>
      </div>

      <!-- two -->
      <div class="col-md-12 text-center top20 two hidden">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <label for="">Digita las posiciones de los puntos</label>
              <div class="col-md-6">
                <label for="">x</label>
              </div>
              <div class="col-md-6">
                <label for="">y</label>
              </div>
              <div class="row">
                <div id="sections">
                  <div class="section">
                    <div class="col-md-6 top5">
                      <input type="number" id="position_x"  class="form-control">
                    </div>
                    <div class="col-md-6 top5">
                      <input type="number" id="position_y"  class="form-control">
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-12 top20">
            <button id="positions" class="btn btn-primary">Siguiente
            <i class="fa fa-arrow-right"></i></button>
          </div>
        </div>
      </div>

      <!-- three -->
      <div class="col-md-12 text-center top20 three hidden">
        <div class="row">
          <div class="col-md-12">
              <div id="graph-line"></div>
          </div>
          <div class="col-md-12 top20">
            <button id="view_calculate" class="btn btn-primary">Calcular pendiente
            <i class="fa fa-arrow-right"></i></button>
          </div>
        </div>
      </div>

      <!-- four -->
      <div class="col-md-12 text-center top20 four hidden">
        <div class="row">
          <div class="col-md-12">
            <label for="">Digite los valores</label>
          </div>
          <div class="col-md-3">
            <label for="">x1</label>
          </div>
          <div class="col-md-3">
            <label for="">y1</label>
          </div>
          <div class="col-md-3">
            <label for="">x2</label>
          </div>
          <div class="col-md-3">
            <label for="">y2</label>
          </div>
          <div class="col-md-3 top5">
            <input type="number" id="x1"  class="form-control">
          </div>
          <div class="col-md-3 top5">
            <input type="number" id="y1"  class="form-control">
          </div>
          <div class="col-md-3 top5">
            <input type="number" id="x2"  class="form-control">
          </div>
          <div class="col-md-3 top5">
            <input type="number" id="y2"  class="form-control">
          </div>
          </div>
          <div class="col-md-12 top20">
            <button id="calculate" class="btn btn-primary">Calcular
            <i class="fa fa-arrow-right"></i></button>
          </div>
        </div>

      <!-- four -->
      <div class="col-md-12 text-center top20 five hidden">
        <div class="row">
          <div class="col-md-12">
            <div id="graph-line-pending"></div> <br>
            <h2 id="value_pending"></h2>
            <p id="type_pending"></p>
            <p id="values"></p>
          </div>
        </div>
      </div>

      </div>
      </div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script type="text/javascript">
    // ################### four ###################
    $('#calculate').click(function(){
      var x1 = parseInt($('#x1').val());
      var x2 = parseInt($('#x2').val());
      var y1 = parseInt($('#y1').val());
      var y2 = parseInt($('#y2').val());

      // all fields vacios
      if($('#x1').val() == '' && $('#x2').val() == '' && $('#y1').val() == '' && $('#y2').val() == ''){
        alert('Campos vacios');
      }else{

            var pend1 = ((y2-y1)/(x2-x1));
            var pend2 = pend1*x1;

            // (pend1 x - pend2) + y1
            var pend3 = '';
            if(pend2 > 0){
              pend3 = pend2-y1;
            }else{
              pend3 = pend2+y1;
            }
            console.log(pend1);
            console.log(pend2);
            console.log(pend3);

            if(y1 == y2){
              $('#value_pending').text('No existe una pendiente');
            }else{
              var text = '';
              if(y1 < y2){
                if(pend3 == 0){ text = ''; }else{
                  if(pend3 > 0){ text = ' - '+pend3;   }
                  else{ text = ' + '+(pend3*-1); }
                }
                  $('#value_pending').text('y= '+pend1+' x'+text);
                  $('#type_pending').text('Pendiente Positiva');
                  $('#type_pending').css('color','green');
              }else{
                $('#value_pending').text('y= '+pend1+' x'+text);
                $('#type_pending').text('Pendiente Negativa');
                $('#type_pending').css('color','red');
              }

              //show data
              $('#values').text('x1='+x1+' x2='+x2+' || y1='+y1+' y2='+y2);
            }
          }

          //  graph_one
          graph_one(x1,x2,y1,y2);

          $('.four').addClass('hidden');
          $('.five').removeClass('hidden');
    });

    // ################### three ###################
    $('#view_calculate').click(function(){
      $('.three').addClass('hidden');
      $('.four').removeClass('hidden');
    });

    // ################## two ##################
    $('#positions').click(function(){
       var array_x = [];
       array_x.push(parseInt($('#position_x').val()));
       var array_y = [];
       array_y.push(parseInt($('#position_y').val()));

       for(var i = 0; i < ($('#num_pounts').val()-1); i++){
         array_x.push(parseInt($('#position_x'+i).val()));
         array_y.push(parseInt($('#position_y'+i).val()));
       }

       console.log(array_x);
       console.log(array_y);

      //  graph
      graph(array_x,array_y);

      $('.two').addClass('hidden');
      $('.three').removeClass('hidden');

    })

    // ################### one ###################
      $('#pounts').click(function(){
        if($('#num_pounts').val() == ''){
          alert('Digite el numero de puntos');
        }
        if($('#num_pounts').val() <= 0){
          alert('El numero debe ser mayor de 0');
        }
        if($('#num_pounts').val() != '' && $('#num_pounts').val() >= 1){
          //loop through each input
          var template = $('#sections .section:first').clone();

          for(var i = 0; i < ($('#num_pounts').val()-1); i++){
            var section = template.clone().find(':input').each(function(){
                //set id to store the updated section number
                var newId = this.id + i;
                //update for label
                $(this).prev().attr('for', newId);
                //update id
                this.id = newId;
            }).end().appendTo('#sections');
          }


          $('.one').addClass('hidden');
          $('.two').removeClass('hidden');
        }
      });

      // ################### calculadora de pendientes ###################
        $('#calculate-pending').click(function(){
          $('.one').addClass('hidden');
          $('.four').removeClass('hidden');
        });

    function graph_one(x1,x2,y1,y2){
        Highcharts.chart('graph-line-pending', {
        title: {
            text: 'Pendiente entre dos puntos'
        },
        subtitle: {
            text: 'Autor: Juan Manuel Ruiz'
        },
        yAxis: {
            title: {
                text: 'Eje y'
            }
        },
        xAxis: {
          categories: [x1,x2]
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                },
                pointStart: 0
            }
        },

        series: [{
            name: 'Puntos',
            data: [y1,y2]
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

      });
      }



      function graph(array_x,array_y){
          Highcharts.chart('graph-line', {
          title: {
              text: 'Grafica'
          },
          subtitle: {
              text: 'Autor: Juan Manuel Ruiz'
          },
          yAxis: {
              title: {
                  text: 'Eje y'
              }
          },
          xAxis: {
            categories: array_x
          },
          legend: {
              layout: 'vertical',
              align: 'right',
              verticalAlign: 'middle'
          },
          plotOptions: {
              series: {
                  label: {
                      connectorAllowed: false
                  },
                  pointStart: 0
              }
          },

          series: [{
              name: 'Puntos',
              data: array_y
          }],

          responsive: {
              rules: [{
                  condition: {
                      maxWidth: 500
                  },
                  chartOptions: {
                      legend: {
                          layout: 'horizontal',
                          align: 'center',
                          verticalAlign: 'bottom'
                      }
                  }
              }]
          }

        });
      }
  </script>
@endsection
