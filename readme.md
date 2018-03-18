Esto es laravel 
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


 



