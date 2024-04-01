<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
class AnimalController extends Controller
{
    public function index(){
        $animal=Animal::get();
        return $animal;
    }

    public function show($id){
        $animal = Animal::find($id);
        if (is_null($animal)){
            return ' animal buscado no existe';
        }
        return $animal;
    }

    public function store(Request $request){
        
        $params = $request->all();
        $animal = Animal::create([
            'nombre'=>$params['nombre'],
            'cuidador'=>$params['cuidador'],
            'especie_id'=>$params['especie_id'],
            'recinto_id'=>$params['recinto_id']
        ]);
        return $animal;
    }

    public function update($id, Request $request)
    {
        $params = $request->all();
        $animal = Animal::find($id)->update([
            'nombre'=>$params['nombre'],
            'cuidador'=>$params['cuidador'],
            'especie_id'=>$params['especie_id'],
            'recinto_id'=>$params['recinto_id']
        ]);

        return $animal ? ' Animal fue actualizado.': 'Error al actualizar.';
    }


    public function destroy($id)
    {
        $animal = Animal::find($id)->delete();

        if ($animal) {
            return 'Animal eliminado.';
        } else {
            return 'No se pudo eliminar.';
        }
    }
}
