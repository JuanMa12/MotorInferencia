<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Red Neuronal - netttt</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      body {
        font-size: large;
        font-family: sans-serif;
      }
      #play-area {
        margin: 2em;
      }
      #settings, #controls {
        margin: 1em;
      }
      #x-settings, #o-settings {
        margin: 1ex;
      }
      #status {
        width: 300px;
        text-align: center;
      }
      #copyright {
        margin: 1em;
        font-size: small;
        text-align: center;
        font-style: italic;
      }
    </style>
  </head>
  <body>
    <div class="row">
      <!-- start  -->

      <div class="col-md-12 text-center">
        <h1>Red Neuronal</h1>
        <hr>
      </div>

      <div class="col-md-4 col-md-offset-2">
        <div id="play-area">
          <canvas id="board" width="300" height="300"></canvas>
          <div id="status"
              data-empty="&nbsp;"
              data-winner-x="X gano!"
              data-winner-o="O gano!"
              data-tie="Empate!"
              data-paused="AI pausada"
              data-thinking="Espere..."
          >&nbsp;</div>
        </div>
      </div>


    <div class="col-md-4">
    <div id="settings">
      <div id="x-settings">
        X:
        <select id="x-control" class="form-control">
          <option value="human" selected>Humano</option>
          <option value="ai-random">Aleatorio</option>
          <option class="hidden" value="ai-easy">AI: Facil</option>
          <option value="ai-smart">Inteligente</option>
          <option class="hidden" value="ai-neural">AI: Red Neuronal</option>
        </select>
        <br>
        <textarea class="hidden" id="x-ai-neural-import" class="form-control"
            placeholder="Seleccione &quot;AI: red neuronal&quot; &amp; pegar en una red"
            disabled
        ></textarea>
      </div>
      <div id="o-settings">
        O:
        <select id="o-control" class="form-control">
          <option value="human" selected>Humano</option>
          <option value="ai-random">Aleatorio</option>
          <option class="hidden" value="ai-easy">AI: Facil</option>
          <option value="ai-smart">Inteligente</option>
          <option class="hidden" value="ai-neural">AI: Red Neuronal</option>
        </select>
        <br>
        <textarea class="hidden" id="o-ai-neural-import" class="form-control"
            placeholder="Seleccione &quot;AI: red neuronal&quot; &amp; pegar en una red"
            disabled
        ></textarea>
      </div>
    </div>
    <div id="controls">
      <input id="pause" type="button" value="Pause AI"
          data-paused="Seguir" data-unpaused="Pausar" class="btn btn-primary">
      <input id="step" type="button" value="Adelantar" class="btn btn-success">
      <input id="undo" type="button" value="Deshacer" class="btn btn-warning">
      <input id="restart" type="button" value="Reiniciar" class="btn btn-danger">
    </div>
    </div>

    <div class="col-md-12 text-center">
      <hr>
      <h2>Juan Manuel Ruiz</h2>
      <h5>Universidad ECCI</h5>
    </div>

      <!-- end  -->
  </div>



<script src="https://code.jquery.com/jquery-1.12.4.min.js"
    integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
    crossorigin="anonymous"></script>
<script src="{{asset('js/ttt.js') }}"></script>
<script src="{{asset('js/neural.js') }}"></script>
<script src="{{asset('js/ai.js') }}"></script>
<script src="{{asset('js/genetic.js') }}"></script>
<script src="{{asset('js/play.js') }}"></script>
</body>
</html>
