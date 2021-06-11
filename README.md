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
      ### 2) Clonar el proyecto
        - Clonarlo preferentemente dentro de tu carpeta de proyectos en /xampp/htdocs/
      ### 3) Profit
        - Felicidades, ya podés empezar a romper todo.


* ### Uso
    - Pull/Clonar (Copiar cambios desde esta pagina)
        *  Varía segun tu programa para clonar.
    - Utilizar cualquier editor para editar los archivos
        *  Recomiendo Visual Studio Code ya que tiene tiene bastantes funciones de ayuda :)
        *  Se puede editar hasta con NotePad, pero no tiene soporte para auto-completado, ver funciones, auto-llaves ni nada.
    - Push request (Realizar cambios en esta pagina)
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
* ### Unica vez
  * Activar las siguientes extensiones en el archivo ./xampp/php/php.ini
     * extension=pdo_pgsql
     * extension=pgsql
  * Luego de clonar el proyecto, cambiar el 'Acceso de la Base de Datos' en tu archivo /.env
    * Segun tu configuracion de postgresql, deberías poner nombre de la base, puerto, contrasenia, usuario..
