
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
                <input type="text" name="Pregunta" required>
            </label>
            
            <br>

            <label>
                Respuesta:
                <br>
                <input type="text" name="Respuesta" required>
            </label>

            <br>

            <label >
                Autor:
                <br>
                <input type="text" name="Autor" required>
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
                <th>Editar</th>
                <th>Eliminar</th>
                <th>Estado</th>
    
                </tr>

                @foreach ($datos as $dato)
                <form action="{{route('modificarRegistro', ['id' => $dato->id])}}" method="POST">
                    @csrf
                    <tr>
                    <td style="text-align: center"> <div>{{$dato->id}}</div></td>
                    <td> <input type="text" name="txtPregunta" value="{{$dato->pregunta}}" required></td>
                    <td> <input type="text" name="txtRespuesta" value="{{$dato->respuesta}}" required></td>
                    <td> <input type="text" name="txtAutor" value="{{$dato->autor}}" required></td>
                    
                    <td>
                    <button type="submit" name="btnEditar" value="btnEditar">Editar</button>    
                    </td>
                    </form>
                    <td><form action="{{ route('eliminarRegistro', ['id' => $dato->id]) }}" method="POST" onclick="return confirm('Continuar? Esto no se puede revertir...')">
                        @csrf
                        <button type="submit">Eliminar</button>    
                        </form>
                    </td>
                    <td style="text-align: center"> 
                        <form action="{{ route('toggleRegistro', ['id' => $dato->id,'estado' => $dato->estado]) }}" method="POST">
                        @csrf
                        <button type="submit">{{$dato->estado}}</button>
                        </form>
                    </td>
                    </tr>
                
                @endforeach

            </table>

            
        </div>


    </body>
</html>