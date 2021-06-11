<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <b>Titulo</b>
    </head>
    <body>
        <br>
        <b>Cuerpo de la pagina</b>

        <div class ='container'>
            <table border ='1'>

                @foreach ($datos as $dato)
                    <tr>
                    <td>{{$dato->datoPrueba}}</td>
                    <td>{{$dato->datoPruebaDescripcion}}</td>
                    </tr>
                @endforeach

            </table>
        </div>
    </body>
</html>




<?php
#Proyecto PRUEBA

#Vista (Este archivo) -> Prueba/resources/views/abm-preguntasfrecuentes.blade.php
# http://localhost/" NOMBRE DE LA CARPETA DE PROYECTOS "/prueba/public/abm-preguntasfrecuentes 

#Configuracion Conexion DataBase -> Prueba/.env
#en mi caso uso la database 'postgres', y obtengo los datos de una tabla llamada 'tablaprueba'

#Controladores -> Prueba/app/http/controllers/Controller.php
#Rutas Web -> Prueba/routes/web.php 


?>