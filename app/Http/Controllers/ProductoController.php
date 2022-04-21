<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    protected $producto;

    public function __construct()
    {
        $this->producto = new producto();
    }

    public function index()
    { 
        $datos = $this->producto->get();
        $dato= ['datos'=> $datos];

        echo view('header');
        echo view('producto/producto',$dato);
        echo view('fooder');
    }

    
    public function create()
    {
        echo view('header');
        echo view('producto/create');
        echo view('fooder');
    }

    
    public function store(Request $request)
    {
        $producto = $this->producto;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;

        $producto->save();

        return  redirect()->to(route('producto'));
    }

    public function show(producto $producto)
    {
        //
    }

    
    public function edit(producto $producto)
    {
        $datos = $producto ;
        $dato = ['datos'=>$datos];
        echo view('header');
        echo view('producto/edit',$dato);
        echo view('fooder');
    }

    
    public function update(Request $request, producto $producto)
    {
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;

        $producto->update();
        return  redirect()->to(route('producto'));
    }

    
    public function destroy(producto $producto)
    {
        $producto->delete();
        return  redirect()->to(route('producto'));
    }
}
