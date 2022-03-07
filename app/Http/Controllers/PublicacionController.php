<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Http\Request;

class PublicacionController extends Controller
{
    /**
     * Metodo para obtener las publicaciones
     * @return View
     */
    public function mostrarPublicaciones(){
        $publicaciones = Publicacion::all();

        return view('publicaciones', ['publicaciones' => $publicaciones]);
    }

    /**
     * Metodo para obtener una publicacion
     * @param string $slug
     * @return View
     */
    public function mostrarPublicacion($slug){
        $publicacion = Publicacion::where('slug', $slug)->first();

        return view('publicacion', ['publicacion' => $publicacion]);
    }

    /**
     * Metodo para agregar publicaciones
     * @param Request $request
     * @return View
     */
    public function agregarPublicacion(Request $request){
        $publicacion = new Publicacion();

        $publicacion->titulo = $request->titulo;
        $publicacion->unidad = $request->unidad;
        $publicacion->slug = $request->slug;
        $publicacion->contenido = $request->contenido;
        $publicacion->resumen = $request->resumen;
        $publicacion->img_link = $request->imagen;
        $publicacion->save();

        return redirect()->route('ver.publicaciones');
    }

    /**
     * Metodo para obtener las publicaciones
     * @return View
     */
    public function vistaAgregarPublicacion(){

        return view('registrar');
    }
}
