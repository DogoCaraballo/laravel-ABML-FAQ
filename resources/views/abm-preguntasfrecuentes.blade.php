
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
                <form action="{{route('modificarRegistro')}}" method="POST">
                    @csrf
                    <tr>
                    <td> <input type="text" name="txtId" value="{{$dato->id}}" readonly></td>
                    <td> <input type="text" name="txtPregunta" value="{{$dato->pregunta}}"></td>
                    <td> <input type="text" name="txtRespuesta" value="{{$dato->respuesta}}"></td>
                    <td> <input type="text" name="txtAutor" value="{{$dato->autor}}"></td>
                    <td> <input type="text" name="txtEstado" value="{{$dato->estado}}"></td>
                    <td>
                    <button type="submit" name="btnEditar" value="btnEditar">Editar</button>    
                    </td>
                    <td><form action="{{route('eliminarRegistro')}}" method="POST">
                    <button type="submit">Eliminar</button>    
                    </form></td>
                    </tr>
                </form>
                @endforeach

            </table>

            
        </div>


    </body>
</html>