<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especie;
class EspecieController extends Controller
{
    //
    public function index(){
        $Especie=Especie::get();
        return $Especie;
    }

    public function show($id){
        $Especie = Especie::find($id);
        if (is_null($Especie)){
            return ' Especie buscado no existe';
        }
        return $Especie;
    }

    public function store(Request $request){
        
        $params = $request->all();
        $Especie = Especie::create([
            'nombre'=>$params['nombre'],
            'recinto_id'=>$params['recinto_id']
        ]);
        return $Especie;
    }

    public function update($id, Request $request)
    {
        $params = $request->all();
        $Especie = Especie::find($id)->update([
            'nombre'=>$params['nombre'],
            'recinto_id'=>$params['recinto_id']
        ]);

        return $Especie ? ' Especie fue actualizado.': 'Error al actualizar.';
    }


    public function destroy($id)
    {
        $Especie = Especie::find($id)->delete();

        if ($Especie) {
            return 'Especie eliminado.';
        } else {
            return 'No se pudo eliminar.';
        }
    }
}
