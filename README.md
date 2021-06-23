# Base de Datos
## Base de Datos Actual
* Script de la Base de Datos actual (Solamente la creación de las Tablas)
<pre>
    create table preguntas(
      id int generated always as IDENTITY,
      pregunta text not null,
      respuesta text not null,
      autor text 
    );
</pre>
* Formato estipulado de la Base:

![alt text](https://i.imgur.com/QpBVuLJ.png)


# Accesos

## Página de la vista
* Según donde hayas clonado tu proyecto y tu configuración de proyectos de Xampp.
* Mi caso: http://localhost/proyectos/prueba/public/abm-preguntasfrecuentes


# Instalación y uso
* Requisitos previos
    - Xampp (En mi caso uso xampp para correr el proyecto, otras guías pueden usar php artisan)
    - PostgreSQL.
    - Composer y Laravel (Supuestamente este proyecto viene con laravel incluido)


# Archivos
* ### Ruta del proyecto
  * Idealmente sería donde clonás este proyecto.
  * Mi caso: C:/Archivos de Programa/xampp/htdocs/proyectos/prueba
* ### Archivos principales editables del proyecto
  * Vista: /prueba/resources/views/abm-preguntasfrecuentes.blade.php
  * Rutas: /prueba/routes/web.php
  * Controller: /prueba/app/http/controllers/FAQController.php
* ### Archivo Configuracion 'Acceso de la base de Datos'
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
      * Es necesario que modifiques/actualices tus tablas en tu [DataBase] para ser compatible con este proyecto ya que es muy probable que hayan cambios futuros en la estructura de las tablas.
