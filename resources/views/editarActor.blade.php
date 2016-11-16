<form class="" action="/actor/{{ $actor->id }}/editar" method="post">
  {{ csrf_field() }}
  <input type="text" name="nombre" value="{{ $actor->nombre }}" placeholder="Nombre">
  <input type="text" name="apellido" value="{{ $actor->apellido }}" placeholder="Apellido">
  <button type="submit" name="button">Actualizar</button>
</form>
