<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Las rutas más específicas al principio y las más generales al final
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/holamundo', function(){
    return 'Hola Compunerd';
});

Route::get('/numeroIn/{num}', function($num){ //Ojo se puede poner el parámetro seguido de la URL
    return "El número ingresado es: {$num}";
});

Route::get('/posts/{post_id}/comments/{comments_id}', function($postId,$commentId){ //No importan la desmilitud de los parámetros entre la URL y la función, pero sí el orden
    return "Este el comentario {$commentId} del post {$postId}";
});

Route::get('/saludo/{name}/{nickname?}', function($name, $nickname = null){
    if($nickname){
        return 'Hola '.$name.', tu apodo es '.$nickname;
    }
    else{
        return 'Hola '.$name.', tu no tienes apodo. '.$nickname;
    }
});

Route::get('user/{id}', function ($id) {
    return "Esto es un ID:".$id;
})->where(['id' => '[\d]+']);

Route::get('user/{slug}', function ($slug) {
    return "Esto es un Slug:".$slug;
})->where(['slug' => 'create|delete|update']);

Route::get('user/{name}', function ($name) {
    return "Esto es un Nombre:".$name;
})->where(['name' => '[-\w]+']);
