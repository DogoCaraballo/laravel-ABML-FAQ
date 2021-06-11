# Accesos


## Página de la vista
* Según donde hayas clonado tu proyecto y tu configuración de proyectos de Xampp.
* Mi caso: http://localhost/proyectos/prueba/public/abm-preguntasfrecuentes


# Instalación y uso
* ### Instalación
    - ### Pasos:
      ### 1) Requisitos previos
        - Xampp (En mi caso uso xampp para correr el proyecto, otras guías pueden usar php artisan)
        - PostgreSQL.
        - Composer y Laravel (Supuestamente este proyecto viene con laravel incluido)
      ### 2) Requisitos opcionales
        - Un programa para clonar proyectos (Para llevar este código a tu PC y viceversa)
        - Recomiendo: GitHubDesktop o Git.
      ### 3) Clonar el proyecto
        - Clonar el código preferentemente dentro de tu carpeta de proyectos en /xampp/htdocs/
      ### 4) Profit
        - Felicidades, ya podés empezar a romper todo.


* ### Uso y Edición
    - Pull/Clonar (Copiar cambios desde esta pagina)
        *  Varía segun tu programa para clonar.
    - Utilizar cualquier editor de texto para abrir los archivos
        *  Recomiendo Visual Studio Code ya que tiene tiene bastantes características como ver funciones existentes, auto-llaves, etc.
    - Editar el proyecto
        *  Realizar algun cambio en el codigo, guardar el archivo, y re-abrir la Vista para ver los cambios.
    - Push request (Realizar cambios a esta pagina)
        *  Varía segun tu programa para clonar.


# Archivos
* ### Ruta del proyecto
  * Idealmente sería donde clonás este proyecto.
  * Mi caso: C:/Archivos de Programa/xampp/htdocs/proyectos/prueba
* ### Archivos principales editables del proyecto
  * vista.php: /prueba/public/abm-preguntasfrecuentes.blade.php
  * web.php: /prueba/routes/web.php
  * Controller.php: /prueba/app/http/controllers/Controller.php
* ### Archivo Configuracion 'Acceso de la basde de Datos'
  * .env: /prueba/.env

# Configuracion
* ### Única vez
  * Activar las siguientes extensiones en el archivo ./Xampp/php/php.ini
     * extension=pdo_pgsql
     * extension=pgsql
  * Luego de clonar el proyecto, cambiar el 'Acceso de la Base de Datos' en tu archivo /.env
     * Segun tu configuracion de postgresql, deberías poner nombre de la base, puerto, contrasenia, usuario..
* ### Posiblemente varias veces
  * Actualizar las tablas de tu Base de Datos
      * Es necesario que modifiques tus tablas en tu [DataBase] usada en el proyecto ya que es muy probable que hayan cambios al momento de manejar datos.
