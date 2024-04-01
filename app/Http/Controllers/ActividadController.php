<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;

class ActividadController extends Controller
{

     public function index(){
        $actividad=Actividad::get();
        return $actividad;
    }

    public function show($id){
        $actividad = Actividad::find($id);
        if (is_null($actividad)){
            return ' Actividad buscado no existe';
        }
        return $actividad;
    }

    public function store(Request $request){
        
        $params = $request->all();
        $actividad = Actividad::create([
            'nombre'=>$params['nombre'],
            'dia'=>$params['dia'],
            'horario'=>$params['horario'],
            'descripcion'=>$params['descripcion']
        ]);
        return $actividad;
    }

    public function update($id, Request $request)
    {
        $params = $request->all();
        $actividad = Actividad::find($id)->update([
            'nombre'=>$params['nombre'],
            'dia'=>$params['dia'],
            'horario'=>$params['horario'],
            'descripcion'=>$params['descripcion']
        ]);

        return $actividad ? ' Actividad fue actualizado.': 'Error al actualizar.';
    }


    public function destroy($id)
    {
        $actividad = Actividad::find($id)->delete();

        if ($actividad) {
            return 'Actividad eliminado.';
        } else {
            return 'No se pudo eliminar.';
        }
    }
}
