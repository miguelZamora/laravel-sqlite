## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)


Este Ejemplo es para una version simplificada de una consulta simple con base de datos sqlite3 

descarga el repositorio del git

$ git clone https://github.com/miguelZamora/laravel-sqlite.git

Luego en la carpeta del proyecto descarga lo que falta instalar Composer y darle '
$ composer install

desde la consola dentro del directorio.


Luego ya esta bien puedes lanzar laaplicacion 

$ php artisan serve

http://localhost:8000 <- Podras ver el proyectos si no te falta nada en debes habilitar en php los driver de sqlite



Commandos de laravel artisan tinker 

son bastante buenos aunque si no estas familiarizado se puede poner tediosa la rutina

a modo de torpeda 


php artisan make:model Post 					<- creamos un modelo
php artisan make:controller PostController 		<- creamos un controlador


para ver si te puedes conectar a la base de datos desde la consola seria 

php artisan tinker
agregar datos

$ $post = new App\Post          <<< donde el "Post" seria tu modelo orm de la base datos
$ $post->titulo='titulo1'
$ $post->descripcion='descriciom1'
$ $post->url='http://localhost'
$ $post->save() 			<- guardar datos que se asignaron en la DB;

Otra manera de hacerlo es declarando en modelo un arreglo

protected $fillable = ['titulo','descripcion','url'];

y luego ya en la consola

php artisan tinker

 $ App\Post::create(['titulo'=>'titulo con metodo create','descripcion'=>'con create','url'=>'http://localhost2/con/create'])


 luego nos traemos los datos

 $ App\Post::all()
 $ App\Post::first()
 $ App\Post::find(2)

 $ App\Post::where('titulo', 'titulo1')->first()


 



