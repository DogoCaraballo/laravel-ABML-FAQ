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


class FAQController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function obtenerTabla()
    {
        $datos = DB::table('preguntas')
            ->orderBy('id')
            ->get();
        $cantidad = DB::table('preguntas')->count();

        return view('abm-preguntasfrecuentes', ['datos' => $datos],['cantidad' => $cantidad]);
    }


}