Pokemon-Aplicativo, es un proyecto que esta diseñado para consumir el api de pokemon, y guardar una lista de favoritos, donde el usuario puede elergir los que desea.
Versiones Necesarias:

  Vue: 3.2.36
  Axios: 1.4.0
  PHP: 8.1
  Laravel: 10.10
  Boostrap: 5

Pasos para crear el sistema:

1) Instalar composer, xampp

2) Ejecutar este comando: 

composer create-project laravel laravel Pokemon-Aplicativo

3) Crear base de datos en MySQL: pokemones
Agregarla  en el archivo .env, en:

DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pokemones
 

4)Crear este modelo con este comando:
php artisan make:model PokemonesFavoritos -m 

5) Crear estos Controladores:
php artisan make:controller AuthController --resource
php artisan make:controller PokemonController --resource

6) Instalar laravel/ui
composer require laravel/ui
php artisan ui vue --auth

7) Instalar Vue 3: 
npm install vue@next vue-loader@next

8)Instalar vitejs plugin:
npm i @vitejs/plugin-vue
9) Instalar dependencias:
npm install

10) Importar Bootstrap 5
resources/js/app.js -->  import './bootstrap';
11) Iniciar server
npm run dev
12) Instalar Sanctum, para autenticacion
composer require laravel/sanctum
13) Configurar config/cors.php:
'supports_credentials' => true,
14) Configurar la migracion para pokemonesfavoritos y poner los campos de la tabla:
 public function up(): void
    {
        Schema::create('pokemones_favoritos', function (Blueprint $table) {
            $table->id();
            $table->integer('pokemon_id');
            $table->string('name');
            $table->integer('user_id');
            $table->timestamps();
        });
    }
15) Migrar Base de Datos:
php artisan migrate
16) Instalar Vue Router
npm install vue-router




 

 
