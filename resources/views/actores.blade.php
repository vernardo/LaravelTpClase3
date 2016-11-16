<link rel="stylesheet" href="/css/app.css" media="screen" title="no title">
<script type="text/javascript" src="/js/app.js"></script>

<h1 style="margin-left:15px;">Actores</h1>

  @if (isset($actores))
    <ul class="list-group">
        @foreach ($actores as $actor)
          <li class="list-group-item">
            <a href="/actor/{{$actor->id}}"> {{ $actor->nombre }} {{ $actor->apellido }} </a>
          </li>
        @endforeach
    </ul>
  @endif

<form action="/actores/buscar" method="get" class="input-group">
  <label for="actor" class="label label-default"></label>
  <input type="text" class="form-control" name="nombre" value="" placeholder="Ingresar actor">
  <span class="input-group-btn">
    <button type="submit" name="button" class="btn btn-default">Buscar</button>
  </span>
</form>

<form class="" action="/actores" method="get">
  <button type="submit" name="button">Limpiar</button>
</form>
