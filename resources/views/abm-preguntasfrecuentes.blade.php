<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <b>Titulo</b>
    </head>
    <body>
        <br>
        <b>Preguntas registradas: {{$cantidad}}</b><br>
        

        <?php // Tabla con preguntas y respuestas  ?>
        <div class ='container'>
            <table border ='1'>
                <tr>
                <td><b>ID</td>
                <td><b>Pregunta</td>
                <td><b>Respuesta</td>
                <td><b>Autor</td>
                </tr>

                @foreach ($datos as $dato)
                    <tr>
                    <td>{{$dato->id}}</td>
                    <td>{{$dato->pregunta}}</td>
                    <td>{{$dato->respuesta}}</td>
                    <td>{{$dato->autor}}</td>
                    </tr>
                @endforeach

            </table>

            
        </div>


    </body>
</html>
