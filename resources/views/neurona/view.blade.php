@extends('template')

@section('content')
  <div class="col-md-12 top20">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">

        <div class="jumbotron">
        <h2>{{ $neuron->name }}</h2> <hr>

          <form class="" action="index.html" method="post">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                    <label for="">Peso 1</label>
                    <input type="number" name="" class="form-control" value="{{ $neuron->weight_one }}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Peso 1</label>
                  <input type="number" name="" class="form-control" value="{{ $neuron->weight_two }}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Umbral</label>
                  <input type="number" name="" class="form-control" value="{{ $neuron->threshold }}">
                </div>
              </div>
            </div>
          </form>

          <p>{{ $neuron->values }}</p>

          <div class="">
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>x</th>
                  <th>y1</th>
                  <th>RAN</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($values as $number)
                    <tr>
                      <td>{{ $number->value }}</td>
                      <td>{{ $y1 }}</td>
                      <td>{{ $min+($y1*($max-$min)) }}</td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <div id="graph-line"></div>

        </div>

      </div>
    </div>
  </div>

  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/series-label.js"></script>
  <script type="text/javascript">
    var array_x = [];
    var array_y = [];
    var id_neuron = <?php echo $neuron->id; ?>

    console.log(id_neuron);
    $.ajax({
        url: "/list",
        type: "GET",
        data: { id: id_neuron },
        context : document.body,
        dataType: "json",
      }).done(function(data) {
        //console.log(data.values);
        data.values.forEach(function(element) {
          array_y.push(parseInt(element.value));
        });

        data.ids.forEach(function(element) {
          array_x.push(parseInt(element.id));
        });

        console.log(array_x);
        console.log(array_y);

        graph(array_x,array_y);

    });



function graph(array_x,array_y){
      Highcharts.chart('graph-line', {
      title: {
          text: 'Grafica Valores Reales'
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
