<form class="" action="/actores/agregar" method="post">
  {{ csrf_field() }}
  <input type="text" name="nombre" value="" placeholder="Nombre">
  <input type="text" name="apellido" value="" placeholder="Apellido">
  <button type="submit">Agregar actor</button>
</form>
