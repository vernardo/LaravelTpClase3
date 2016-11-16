<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor; // lo pusimos nosotros para importar el modelo de actor

class ActorController extends Controller
{
    public function directory() {
      $actores = Actor::all();
      return view('actores')->with('actores', $actores);
    }

    public function show($id) {
      $actor = Actor::find($id); // devuelve el registro de actor correspondiente a ese id
      return view('actor')->with('actor', $actor);
    }

    public function search(Request $request) {
      $nombreActor = $request->nombre;
      $actores = Actor::where('nombre', 'like', "%$nombreActor%")->orWhere('apellido', 'like', "%$nombreActor%")->get();
      return view('actores')->with('actores', $actores);
    }

    public function add() {
      // $query = Actor::
      return view('agregarActor');
    }

    public function store(Request $request) {
      $actor = new Actor;
      $actor->nombre = $request->nombre;
      $actor->apellido = $request->apellido;
      $actor->save();
      // $query = Actor::
      // return view('actores')->withActores(Actor::all());;
      return redirect('/actores');
    }

    public function edit($id) {
      $actor = Actor::find($id);
      return view('editarActor')->with('actor', $actor);
    }

    public function update(Request $request, $id) {
      $actor = Actor::find($id);
      $actor->nombre = $request->nombre;
      $actor->apellido = $request->apellido;
      $actor->save();
      return redirect('/actores');
    }

    public function delete($id) {
      $actor = Actor::find($id);
      $actor->delete();
      return redirect('/actores');
    }
}
