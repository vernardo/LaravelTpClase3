<link rel="stylesheet" href="/css/app.css" media="screen" title="no title">
<script type="text/javascript" src="/js/app.js"></script>

<div class="list-group">

  <h1 style="margin-left: 15px;background-color:red;">Actor:</h1>

  <p class="list-group-item">
    Nombre: {{ $actor->nombre }}
  </p>
  <p class="list-group-item">
    Apellido: {{ $actor->apellido }}
  </p>
  <p class="list-group-item">
    Rating: {{ $actor->rating }}
  </p>
  <p class="list-group-item">
    Id de la película preferida: {{ $actor->id_pelicula_preferida }}
  </p>

  <form class="" action="/actor/{{ $actor->id }}/delete" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="$actor->id">
    <button type="submit" name="button">Eliminar</button>
  </form>
</div>
