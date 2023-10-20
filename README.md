<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Notas
    Las vistas se crean mamuanlmente con extencion blade.php en la ruta resources/views 

- **[----------------------]**

- **[DESACTIVAR ERRORES LARAVEL]**
    Para desactivar errores en laravel solo debeos entra al rachivo .env buscar APP_DEBUG y cambiar el true por el false y guardar, adicional ir al archivo config>>app.php y buscar la entrada 'debug' => env('APP_DEBUG', false), si queremos que se active el debug cambiar a true, si no conservarlo como esta.


- **[----------------------]**

## Desvincular github de vs code

    Lo que esta pasando es que el nombre de los commits se configura localmente, que es diferente de los permisos que tiene una persona para un proyecto. Intenta cambiando tu email y nombre de esta manera:

    git config --global user.name "NOMBRE"
    git config --global user.email "CORREO@example.com"

## Vincular github de vs code

    Primero hay que crear un archivo .git con el siguiente comnado
        
        git init
        git remote add origin https://github.com/ingjaz/BLOG.git
        git add .
        git commit -m "first commit"

        git stash
        git push -uf origin master
    
    Elegimos la rama, si es la principal dejamos la palabra main

        git branch -M main
        
        git push -u origin main
	
## Crear Nuevo proyecto de laravel

	composer create-project laravel/laravel laraveljet
	
## Crear Nuevo proyecto de laravel con JETSTREAM con LIVEWIRE

	--abre una ventana
		composer create-project laravel/laravel laraveljet
		cd laraveljet
		composer require laravel/jetstream
		php artisan jetstream:install livewire
		npm install
		
	--Ejecutar el servidor de node.js para que funcione livewire
		npm run dev

	Crea base de datos
		conecta base a laravel en .env
		
	--abre otra ventana
		php artisan migrate
		php artisan serve

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
    Este se crea en la ruta app/Http/Controllers

    php artisan make:controller nombre_controladorController

- **[-ejemplo crear controlador]**

    php artisan make:controller HomeController

- **[----------------------]**

- **[-MIGRACIONES]**

    Este comando ejecutada en terminal sirve para recorrrer uno a uno las migraciones
    que hemos creado entrando y ejecutando el metodo up para crear las respectivas tablas con sus
    columnas

        php artisan migrate

    Este comando sirve para cerar el archivo para una migracion, el archivo se crea en la ruta database/migrations/

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

    Este comando ejecuta le metodo "down" primero y despues el metodo up, elimina todas la tablas, la diferencia con "fresh" es que "fresh" no toca el metodo "down" solo elimina y "refresh" si invoca el medoto down por lo que si te equivocaste en este metodo al crearlo lo brincara.

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

- **[----------------------]**

- **[ELOQUENT]**
    Este comando sirve para hacer modelos, esta funciona con una conversion hacia la tabla que va a atender de singualr a plural, por ejemplo si la tabla se llama "cursos" el modelo se debe llamar "Curso" (notese que se crea con mayuscula pero la tabla va en minuscula y en plural) esta conversion se lleva a cabo con la lengua inglesa, si lo ponemos en español el sistema solo pondra una "s" al final, por ejmplo si creamos un modelo llamada "Nivel" la tabla a la que apuntaria seria "Nivels" pero si usamos el inglés esta conversion se hace sin problemas, por ejemplo si creamos un modelo llamado "Category" la tabla se deberia de llamar "categories". El comando que utilizamos es:

        php artisan make:model NOMBRE-MODELO

    Por ejemplo, tenemos una tabala llamada cursos, el archivo se crea en la ruta app/Models/Curso.php

        php artisan make:model Curso

- **[----------------------]**

- **[Tinker]**

    Tinker te permite interactuar con toda tu aplicación Laravel en la línea de comando, incluidos tus modelos, trabajos, eventos y más de Eloquent. Para ingresar al entorno Tinker, ejecute el comando Tinker Artisan:

        php artisan tinker
    
    Despues una vez dentro (cuando ejecutamos el comando estamos dentro) hay que especificar el modelo con el siguiente comando:

        use RUTA-MODELO;

    Ejemplo

        use App\Models\Curso;

    Creamos una instancia:

        $variable = new ARCHIVO-DEL-OBJETO;

    Ejemplo

        $curso = new Curso;

    Despues agregamos propiedades (columnas) y les ingresamos valor

        $curso->COLUMNA = 'VALOR';

    Ejemplo

        $curso->name = 'Laravel';

    Para verl el contenido de la variable solamente ponemos la misma y presionamos enter

        $VARIABLE;


    Ejemplo

        $curso;
    
    Si queremos que guarde esto como un registro ejecutamos lo siguiente:

        $VARIABLE->save();

    Ejemplo

        $curso->save();

    Una vez ejecuta el save si vuelvo a llamar a la variable podremos ver todo lo que se guardo en mysql:

        $VARIABLE();

 **[Tinker Consultas]**

    Algunas consultas de tinker, todas se pueden combinar (cada propiedad)

        //La propieda ->first(); y ->get(); devuelven los valores de manera diferente, ->first(); los devuleve de uno en uno y ->get(); los devuleve en una coleccion de tipo arreglo

        //Devuelve todos los elemntos de la tabla  
        $cursos = Curso::all(); 

        //devuelve los elementos de la tabla seleccionados "where" con un diseno de todos los campos "get"
        $cursos = Curso::where('categoria', 'Diseno Web')->get(); 

        //devuelve los elementos de la tabla seleccionados "where" con un diseno de todos los campos "get" con un orden seleccionado
        $cursos = Curso::where('categoria', 'Diseno Web')orderBy('id','desc')->get();

        //devuelve el primer elemnto d ela consulta de la tabla seleccionado "where" con un diseno de todos los campos con un orden seleccionado
        $cursos = Curso::where('categoria', 'Diseno Web')orderBy('id','desc')->first();

        //Si quiero solo un campo de esa consulta anterior uso:
        $curso->name;

        //Esto es un select para seleccionar ciertos campos
        $cursos = Curso::select('name','description')->get();  

        //Esto es un select para seleccionar ciertos campos y devuelve el primer elemnto d ela consulta de la tabla seleccionado "where" con un diseno de todos los campos con un orden seleccionado
        $cursos = Curso::select('name', 'description')->where('categoria', 'Diseno Web')->orderBy('name','asc')->first();  

        //Cambiar cam,pos con seudonimo
        $cursos = Curso::select('name as titulo','description as algo')->get();

        //La propiedad take se usa para decidir cuantos registro me tiene que devolver
        $cursos = Curso::select('name as titulo','description as algo')->take(2)->get();  

        //Buscar por ide hay dos maneras:
        $cursos = Curso::where('id', 5)->first(); 
        $cursos = Curso::find(5); 

        //Ahora tambien con esto puedo acceder a un campo en especifico
        $curso->name;

        //La propiedad where con mas de dos parametros
        $cursos = Curso::where('id', '>', 45)->first(); 
        $cursos = Curso::where('name', 'like', '%casa')->first(); 


- **[----------------------]**

- **[Seeders]**

    Los Seeders sirve para poder agregar datos demo en las tablas de nuestra bases de datos, para esto hay que dirigirnos a database/seeders y abrir el archivo DatabaseSeeder.php, alli usaremos lo que aprendimos en tinker.
    Una vez aplicado tenemos la opcion de eliminra las tablas para volverlas a crear con el comando:

        php artisan migrate:refresh

    Y podemos ejecutar otro comando para poder crear las tablas, este comando es altamente recomendable siempre y cuando nos encontremos en el entorno de prueba y programacion

        php artisan migrate:fresh 

    Una vez echo esto podemos ejecutar lo que hicimos en seeder para generar los datos con el siguiente comando:

        php artisan db:seed

    Para evitar ejecutar los dos comandos por separado podemos uysar el siguiente

        php artisan migrate:fresh --seed
    
**[Crear nuevo Seeder]**

    Para crear una nuevo seeder ejecutamos el siguiente comando:

        php artisan make:seeder NOMBRE

    Ejemplo

        php artisan make:seeder CursoSeeder

    Si queremos leer el nuevo archivo seeder tenemos que hacer lo siguiente, mandar a llamar le archivo nuevo en DatabaseSeeder.php:

        $this->call(NOMBRE::class);

    Ejemplo

        $this->call(CursoSeeder::class);

- **[----------------------]**

- **[Factory's]**

    Este sirve para rellenar tablas con informacion de manera aleatoria, muy funcional para insertar infromacion rapida y en gran cantidad, para esto crearemos un nuevo archivo tipo factory, este archiv se almacena en la ruta database/factories:

        php artisan make:factory NOMBRE  --model=NOMBRE-MODELO

    Ejemplo

        php artisan make:factory CursoFactory --model=Curso

    Una vez terminado hay que agregar el factory en un Sedeer, para esto nos dirigimos al seeder donde queremos ejecutar el factory, por ejemplo yo me fui al seeder "CursoSeeder" y dentro agregue esta linea:

        NOMBRE-MODELO::factory(CANTIDAD-DE-REGISTROS)->create();
    
    Ejemplo

        Curso::factory(50)->create();

- **[----------------------]**

- **[Cambiar idioma]**
    Para cambiar el idioma hay que crear primero la carpeta que contiene esta informacion, esto se logra ejecutando el siguiente comando el cual creara un acarpeta llamada lang:

        php artisan lang:publish

    Ahora agregaremos el idioma con un paquete de laravel, usareml el lang de laravel, ejecutaremos el siguiente comando

        composer require laravel-lang/common --dev

    Una vez instalado ejecurtamo el sigueinte comando, la palabra final indica que idioma descargaremos, por ejemplo php artisan lang:add fr, fr indica frances, si quieremos ver ma sentrar a https://laravel-lang.com/

        php artisan lang:add es

    Con esto se creara una carpeta en Lang con el idioima descargado, ahora si queremos cambiar el idioma cargado tenenos que ir a config/app.php y buscar "locale" y cambiar el idioma de "en" al idioma que querramos, por ejemplo "es"

- **[----------------------]**

- **[Form Request]**
    Sirve para crear archivos de validacion por separado y evitar llenar los controller de validaciones lo cual puede a la larga verse muy saturado en el mismo, con esto podemos asegurar que nuestro codigo se vera mas limpio, al ejecutarlo creara un acarpeta con la ruta app\Http\Request, recuerda en el controlador incluir la libreria "use App\Http\Requests\NOMBRE; " para crear un archivo asi utilizaremos el siguiente comando:

        php artisan make:request NOMBRE

    Ejemplo:

        php artisan make:request StoreCurso     

- **[----------------------]**

- **[Rutas]**
    Para ver las rutas que tenemos en nuestro proyecto por consola s epuede utilizar:

        php artisan r:l

- **[----------------------]**

- **[-MAIL]**
    Para usart mails dentro de nuestro proyecto hay que configurarlo desde .env, buscamos el bloque que incie con "MAIL_MAILER=smtp" y alli agregamos los datso solicitados
    Despues crearemos el archivo en larabel con el comando:

        php artisan make:mail NOMBRE

    Por ejemplo

        php artisan make:mail ContactanosMailable
		
