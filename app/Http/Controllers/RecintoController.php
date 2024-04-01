<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recinto;
class RecintoController extends Controller
{
    //
    public function index(){
        $Recinto=Recinto::get();
        return $Recinto;
    }

    public function show($id){
        $Recinto = Recinto::find($id);
        if (is_null($Recinto)){
            return ' Recinto buscado no existe';
        }
        return $Recinto;
    }

    public function store(Request $request){
        
        $params = $request->all();
        $Recinto = Recinto::create([
            'nombre'=>$params['nombre']
        ]);
        return $Recinto;
    }

    public function update($id, Request $request)
    {
        $params = $request->all();
        $Recinto = Recinto::find($id)->update([
            'nombre'=>$params['nombre']
        ]);

        return $Recinto ? ' Recinto fue actualizado.': 'Error al actualizar.';
    }


    public function destroy($id)
    {
        $Recinto = Recinto::find($id)->delete();

        if ($Recinto) {
            return 'Recinto eliminado.';
        } else {
            return 'No se pudo eliminar.';
        }
    }
}
