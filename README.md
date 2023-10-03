<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Aqui me quede
    https://www.youtube.com/watch?v=MUOKdpbgbNk&list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF&index=11

## EN CASO DE DESCARGAR COPIA DE LARAVEL 

Si descargamos una copia de laravel de github hacer lo siguiente:

- **[-El primer paso fue instalar composer dentro de la carpeta del proyecto]**

 composer install

- **[-Después cambiar el nombre del .env.example por .env]**

 mv .env.example .env

- **[-limpiar cache]**

 php artisan cache:clear

 composer dump-autoload

- **[-y por último generar el key]**

php artisan key:generate

- **[----------------------]**

THE CODE TO COPY AND PASTE

composer install 

mv .env.example .env 

php artisan cache:clear

composer dump-autoload 

php artisan key:generate

- **[----------------------]**

- **[Cargar a git]**

git init

git remote add origin  URL-DEL-REPOSITORIO

git add .

git commit -m "comentario"

git push origin


- **[EJEMPLO]**

git init

git remote add origin https://github.com/ingjaz/BLOG.git	

git add .

git commit -m "Primer Commit"

git push origin

- **[----------------------]**

- **[EXTRAER CAMBIOS DE UN REPOSITORIO REMOTO]**

    git pull REMOTE-NAME

- **[EJEMPLO]**

    git pull https://github.com/ingjaz/BLOG.git	

- **[CONTROLLER COMO CREARLOS]**

- **[-Sirve para crear controladores, generar modelos, para crear migraciones]**
 
    php artisan make

- **[--Para crear un controlado]**

    php artisan make:controller nombre_controladorController

- **[-ejemplo crear controlador]**

    php artisan make:controller HomeController

- **[----------------------]**

- **[-MIGRACIONES]**

Este comando ejecutada en terminal sirve para recorrrer uno a uno las migraciones
 que hemos creado entrando y ejecutando el metodo up para crear las respectivas tablas con sus
 columnas

    php artisan migrate

Este comando sirve para cerar el archivo para una migracion

    php artisan make:migration nombre-archivo

    php artisan make:migration cursos

Tambien podemos hacer las tablas mucho mas rapido con el comando

    php artisan make:migration create_nombre-archivo_table

    php artisan make:migration create_cursos_table

Para revertir los cambios de la ultima migracion ejecutada usa le comando

    php artisan migrate:rollback

Otro comando para eliminar y crear tablas de un solo movimiento sin ejecutar rollback
 a cada momento, este comando elimina todas la stablas y despues la va creando,
 este metodo es destructivo en productivo porque elimina tola la informacion guardada  pero eficiente cuando
 estamos construllendo las tablas

    php artisan migrate:fresh

Este comando ejecuta le metodo "down" primero y despues el metodo up, elimina todas la tablas, la diferencia con "fresh"
 es que "fresh" no toca el metodo "down" solo elimina y "refresh" si invoca el medoto down por lo que si te equivocaste
 en este metodo al crearlo lo brincara.

    php artisan migrate:refresh

- **[----------------------]**

- **[-MIGRACIONES SIN ELIMINAR DATOS EN BASE DE DATOS]**

    Vamos a crear una convencion para poder agregar nuevas columnas con el siguiente comando, este creara un nuevo archivo 
    en la carpeta de "migrations" para poder lograr al ADD de la nueva columna(s), dentro de este veremos una nueva funcion
    llaman "Schema::table", este funciona cuando queremos modificar una tabla que ya existe

        php artisan make:migration add_CAMPO-NUEVO_to_NOMBRE-TABLA_table

    Por ejemplo, agregaremos un campo llamado avatar en la tabla users
    php artisan make:migration add_avatar_to_users_table

- **[----------------------]**

- **[-MIGRACIONES MODIFICACION DE ATRIBUTOS DE COLUMNA]**

    Para poder modificar atributos de columnas desde comandos hay que agregar una dependencia al archivo composer.json
     esta dependiencia es doctrine/dbal, se agrega con el siguiente comando

        composer require doctrine/dbal

    Despues crearemos una nueva migracion para cambio, el nombre de inicio no e smuy importante si no lo sigues al pie de la letra
     pero el final si hay que respetarlo:

         php artisan make:migration cambiar_propiedades_to_NOMBRE-TABLA_table

    Ejemplo:

         php artisan make:migration cambiar_propiedades_to_user_table