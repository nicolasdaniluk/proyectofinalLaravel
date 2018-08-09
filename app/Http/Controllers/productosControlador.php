<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;
use App\Categorie;
use App\User;

class productosControlador extends Controller
{
    //

    public function listaCategoria($nombre){

      $categoria=Categorie::where('nombre', $nombre)->first();

      $productos= Producto::where('categoria', $categoria->id)->paginate(5);

        return view('productos/productos')->with('listado',$productos);
    }
    public function categorias(){
      $categorias= Categorie::all();

        return view('productos/categorias')->with('categorias',$categorias);
    }

    public function listar(){
      $productos= Producto::paginate(5);

        return view('productos/productos')->with('listado',$productos);
    }

    public function agregar(){
      $categorias=Categorie::orderBy('nombre','ASC')->get();

      return view('productos/publicar')->with('categorias',$categorias);
    }

    public function guardar(Request $request){
    if ($request->file('imagen')) {
      $rutaImg=$request->file('imagen')->store('productos', 'public');
    }else {
      $rutaImg='productos/sinFoto.jpg';
    }

      $reglas=[
        'nombre'=>'required',
        'descripcion'=>'required',
        'precio'=>'required',
        'categoria'=>'required',
        'imagen'=>'image',
      ];
      $mensajes=[
        'required'=>'El campo es requerido'
      ];

      $this->validate($request, $reglas, $mensajes);

      $producto=Producto::create(
          $request->except(['_token'])
        );
      $producto->imagen=$rutaImg;
      $user = Auth::user();
      $producto->vendedor=$user->id;
      $producto->save();

        return redirect('/productos/listar');
    }

    public function editar($id){

      $producto=Producto::find($id);

      $categories=Categorie::orderBy('nombre', 'ASC')->get();

      return view('productos/editar')
      ->with('producto',$producto)
      ->with('categorias',$categories);

    }

    public function actualizar($id, Request $request){

      $producto= Producto::find($id);

      $producto->fill($request->except(['_token']));

      $producto->save();

      echo "Se actualizo el producto";
    }

    public function borrar($id){
        $producto= Producto::find($id);
        $producto->delete();

        return redirect('/productos/listar');
    }

    public function visualizar($id){

        $producto= Producto::find($id);
        $vendedor=$producto->vendedor;
        $categoria=$producto->categoria;
        $categoria=Categorie::where('id', $categoria)->first();
        $usuario=User::where('id', $categoria)->first();
          return view('productos/ver')->with('producto',$producto)->with('categoria',$categoria)->with('usuario',$usuario);
    }
}
