<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;
use App\Producto;
use DB;
use Illuminate\Support\Facades\Redirect;

class ControllerProducto extends Controller
{
    public function index(){
        //echo "mi controllador";
        //exit();
       // die();

        $menu=1;
        return view('inicio.inicio_index',compact('menu'));
    }

    public function adminProductos(){

/*SELECT categorias.cat_nombre,productos.* FROM productos
INNER JOIN categorias on productos.categoria_id=categorias.id
WHERE productos.pro_estado<>'eliminar'
ORDER BY productos.id DESC */


        $listado=DB::table('productos')
        ->select('categorias.cat_nombre','productos.*')
        ->join('categorias','productos.categoria_id','=','categorias.id')
        ->where('productos.pro_estado','<>','eliminar')
        ->orderBy('productos.id','DESC')->get();

        print_r($listado);
        //die();
          

        $menu=2;
        return view('productos.producto_index',compact ('menu','listado'));


}
public function nuevoProducto(){

    $categorias=DB::table('categorias')->where('categorias.cat_estado','=','activo')->get(); 
        $menu=2;
        return view('productos.nuevoProducto',compact ('menu','categorias'));
}
}