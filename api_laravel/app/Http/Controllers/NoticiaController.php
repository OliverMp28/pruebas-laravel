<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NoticiaController extends Controller
{
    //
    public function index()
    {
        //
        $noticia = Noticia::all();
        

        if($noticia->isEmpty()){
            $data = [
                'message' => "no se encontraron estudiantes",
                'status' => 404
            ];
            return response()->json($data, 404);
        }else{
            $data = [
                'noticia' => $noticia,
                'status' => 200
            ];
            return response()->json($noticia, 200);
        }
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'titulo' => 'required',
            'autor' => 'required',
            'descripcion' =>'required',
        ]);

        if($validator->fails()) {
            $data = [
                'message' => 'Error en la validacion de datois',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        $noticia = Noticia::create([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'descripcion' => $request->descripcion,
        ]);

        if(!$noticia){
            $data = [
                'message' => 'No se pudo crear la noticia',
                'status' => 500
            ];
            return response()->json($data, 500);
        }

        $data = [
            'noticia' => $noticia,
            'status' => 201
        ];
        return response()->json($data, 201);
    }

    public function show($id){
        $noticia = Noticia::find($id);

        if(!$noticia){
            $data = [
                'message' => 'No se encontro la noticia',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $data = [
            'noticia' => $noticia,
            'status' => 200
        ];
        return response()->json($noticia, 200);
    }

    public function destroy($id){
        $noticia = Noticia::find($id);

        if(!$noticia){
            $data = [
                'message' => 'No se encontro la noticia',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $noticia->delete();

        $data = [
           'message' => 'La noticia ha sido eliminada',
           'status' => 200
        ];
        return response()->json($data, 200);
    }
}
