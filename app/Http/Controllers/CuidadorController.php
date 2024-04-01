<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuidador;
class CuidadorController extends Controller
{
    //
    public function index(){
        $Cuidador=Cuidador::get();
        return $Cuidador;
    }

    public function show($id){
        $Cuidador = Cuidador::find($id);
        if (is_null($Cuidador)){
            return ' Cuidador buscado no existe';
        }
        return $Cuidador;
    }

    public function store(Request $request){
        
        $params = $request->all();
        $Cuidador = Cuidador::create([
            'nombre'=>$params['nombre']
        ]);
        return $Cuidador;
    }

    public function update($id, Request $request)
    {
        $params = $request->all();
        $Cuidador = Cuidador::find($id)->update([
            'nombre'=>$params['nombre']
        ]);

        return $Cuidador ? ' Cuidador fue actualizado.': 'Error al actualizar.';
    }


    public function destroy($id)
    {
        $Cuidador = Cuidador::find($id)->delete();

        if ($Cuidador) {
            return 'Cuidador eliminado.';
        } else {
            return 'No se pudo eliminar.';
        }
    }
}
