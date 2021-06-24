
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Practica Supervisada</title>
       
    </head>
    <body>
        
        <h3>Crear Pregunta</h3>

        <form action="{{route('AltaPregunta')}}" method="POST">
          
            @csrf

            <label>
                Pregunta:
                <br>
                <input type="text" name="Pregunta">
            </label>
            
            <br>

            <label>
                Respuesta:
                <br>
                <input type="text" name="Respuesta">
            </label>

            <br>

            <label >
                Autor:
                <br>
                <input type="text" name="Autor">
            </label>
      
            <br>
            <br>
            <button type="submit">Guardar</button>


        </form>

        
        <hr>
        <h3>Preguntas registradas: {{$cantidad}}</h3>
        <?php // Tabla con preguntas y respuestas  ?>
        <div class ='container'>
            <table border ='1'>
                <tr>
                <th>ID</th>
                <th>Pregunta</th>
                <th>Respuesta</th>
                <th>Autor</th>
                <th>Estado</th>
                <th>Iditar</th>
                <th>Eliminar</th>
    
                </tr>

                @foreach ($datos as $dato)
                    <tr>
                    <td>{{$dato->id}}</td>
                    <td>{{$dato->pregunta}}</td>
                    <td>{{$dato->respuesta}}</td>
                    <td>{{$dato->autor}}</td>
                    <td></td>
                    <td><form action="">
                    <button type="submit">Editar</button>    
                    </form></td>
                    <td><form action="">
                    <button type="submit">Eliminar</button>    
                    </form></td>
                    </tr>
                @endforeach

            </table>

            
        </div>


    </body>
</html>