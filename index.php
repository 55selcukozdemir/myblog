<?php 

require __DIR__ . '/database.php';
require __DIR__ . '/model.php';
require __DIR__ . '/controller.php';
require __DIR__ . '/router.php';


// Route::run('/uye/{url}', function ($name){
//     echo 'bla';
// });

Route::run('/', 'postscontroller@index');

Route::run('/write', 'postwritecontroller@index');
Route::run('/write/{id}', 'postwritecontroller@get', 'post');
Route::run('/delete/{id}', 'postwritecontroller@delete','post');
Route::run('/text', 'postwritecontroller@text','post');
Route::run('/update/{id}', 'postwritecontroller@update','post');


Route::run('/read/{id}', 'postmaincontroller@index');
Route::run('/read/{id}', 'postmaincontroller@delete', 'post');

?>