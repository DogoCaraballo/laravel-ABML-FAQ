<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\pregunta;

class FAQController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function obtenerTabla()
    {
        $datos = DB::table('preguntas')
            //->where('estado',1)
            ->orderBy('id')
            ->get();
        $cantidad = DB::table('preguntas')->where('estado',1)->count();

        return view('abm-preguntasfrecuentes', ['datos' => $datos],['cantidad' => $cantidad]);
    }

    public function guardarRegistro(Request $request)
    {
        //dd($request->all());
        $preg = $request->input('Pregunta');
        $resp = $request->input('Respuesta');
        $autor = $request->input('Autor');
        if (strlen($preg)>0 and strlen($resp)>0 and strlen($autor)>0){
            DB::table('preguntas')->insert([
                'pregunta' => $preg,
                'respuesta' => $resp,
                'autor' => $autor
            ]);
        }

        return redirect()->route('cargarTabla');
    }

    public function modificarRegistro(Request $request){
        //$btnModificar =$request->input('btnEditar');
        //if($btnModificar!=null){
            $id = $request->input('id');
            $pregunta = $request->input('txtPregunta');
            $respuesta = $request->input('txtRespuesta');
            $autor = $request->input('txtAutor');
            if (strlen($pregunta)>0 and strlen($respuesta)>0){
                DB::table('preguntas')
                ->where('id','=', $id)
                ->update([
                    'pregunta' => $pregunta,
                    'respuesta'=> $respuesta,
                    'autor' => $autor
                ]);
            }
           
        //}
        return redirect()->route('cargarTabla');
    }
    
    
    public function toggleRegistro(Request $request){
        //$btnEliminar =$request->input('btnEliminar');
        //if($btnEliminar!=null){
            $id = $request->input('id');
            $estadoActual = $request->input('estado');
            if($estadoActual == 1)
                DB::table('preguntas')
                ->where ('id',"=",$id)
                ->update(['estado' => 0 ]);
            else
                DB::table('preguntas')
                ->where ('id',"=",$id)
                ->update(['estado' => 1 ]);

            
        //}
        return redirect()->route('cargarTabla');
    }
    
    public function eliminarRegistro(Request $request){
        //SE BORRA FISICAMENTE, CUIDADO

        $idABorrar = $request->input('id');
        DB::table('preguntas')
            ->where ('id',"=",$idABorrar)
            ->delete();

        return redirect()->route('cargarTabla');
    }
    
}