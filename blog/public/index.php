<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| First we need to get an application instance. This creates an instance
| of the application / container and bootstraps the application so it
| is ready to receive HTTP / Console requests from the environment.
|
*/

$app = require __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

//route et la vue

$app->get('/', function() {
    return view('main');
});

$app->get('/contact', function() {
    return view('contact');
});

$app->post('/send', function(\Illuminate\Http\Request $request) {

    dump($request->input("name"));
    dump($request->input("email"));
    dump($request->input("website"));
    dump($request->input("description"));
    exit();




});

$app->get('/post', function() {
    return 'Hello World';
});

$app->get('/movie/{id}',function($id) use($app){

    $result = app('db')->select('SELECT * FROM movies WHERE id= '.$id);

    dump($result);

});
//API
$app->get('/json',function(){

   return response()->json(['name'=>'Bla','state'=>'fdsfds']);

});


$app->get('/movies',function() use($app){

    $result = app('db')->select("SELECT * FROM movies");
    dump($result);

});

$app->run();
