<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rango;

class usuariosControlador extends Controller
{
    //

  /*  public function guardar(Request $request){

      $reglas=[
        'nombre'=>'required',
        'email'=>'required',
        'password'=>'required'
      ];

    }
    */
    public function listaRango($nombre){

      $rango=Rango::where('nombre', $nombre)->first();

      $usuarios= User::where('tipo_usuario', $rango->id)->paginate(5);

        return view('usuarios/usuarios')->with('listado',$usuarios);
    }
    public function rangos(){
      $rangos= Rango::all();

        return view('usuarios/rangos')->with('rangos',$rangos);
    }

    public function perfil($id){
      $datos=User::where('id', $id)->first();
      $rango=Rango::where('id',$datos->tipo_usuario)->first();
      return view('usuarios/perfil')->with('datos',$datos)->with('rango',$rango);
    }

    public function listar(){
      $usuarios= User::paginate(5);
        return view('usuarios/usuarios')->with('listado',$usuarios);
    }

    public function agregar(){
      $rangos=Rango::orderBy('nombre','ASC')->get();

      return view('usuarios/agregar')->with('rangos',$rangos);
    }

    public function guardar(Request $request){
    if ($request->file('avatar')) {
      $rutaImg=$request->file('avatar')->store('usuarios', 'public');
    }else {
      $rutaImg='usuarios/no-pp.png';
    }

      $reglas=[
        'nombre'=>'required',
        'email'=>'required',
        'contraseña'=>'required',
        'rango'=>'required',
        'avatar'=>'image',
      ];
      $mensajes=[
        'required'=>'El campo es requerido'
      ];

      $this->validate($request, $reglas, $mensajes);

      $usuario=User::create(
          $request->except(['_token'])
        );
      $usuario->avatar=$rutaImg;
      $usuario->save();

        return redirect('/usuarios/listar');
    }

    public function editar($id){

      $usuario=User::find($id);

      $rangos=Rango::orderBy('nombre', 'ASC')->get();

      return view('usuarios/editar')
      ->with('usuario',$usuario)
      ->with('rangos',$rangos);

    }

    public function actualizar($id, Request $request){

      $usuario= User::find($id);

      $usuario->fill($request->except(['_token']));

      $usuario->save();

      echo "Se actualizo el producto";
    }

    public function borrar($id){
        $usuario= User::find($id);
        $producto->delete();
        return redirect('/productos/listar');
    }
}
