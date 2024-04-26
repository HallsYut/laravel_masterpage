<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master');
});

Route::get('/child', function () {
    return view('child');
});

// check point

Route::get('/', function(){
    return view('master');
});

Route::get('/about/{id}', function($id){
    return view('about', compact('id'));
});

Route::get('/about/{id?}', function($id = 0){
    return view('about', compact('id'));
});

Route::get('/about/{id?}', function($id = 0){
    return view('about', compact('id'));
})->name('about');

Route::prefix('/about')->group(function($id = 0){
    Route::get('/', function(){
        return view('about');
    });
    Route::get('/{id}', function($id){
        return view('about', compact('id'));
    });
});

Route::get('/', function(){
    echo "Nuttawut";
});

Route::get('/about/{id}/{name}/{age}', function($id,$name,$age){
    return view('about', array('id' => $id, 'name' => $name, 'age' => $age));
});

Route::get('/about/{id}/{name}/{age}', function($id,$name,$age){
    return view('about', ['id' => $id, 'name' => $name, 'age' => $age]);
});

Route::get('/about/{id}/{name}/{age}', function($id,$name,$age){
    return view('about', array('about' => [$id,$name,$age]));
});

Route::get('/about/{id}/{name}/{age}', function($id,$name,$age){
    $address = 'กรุงเทพ';
    $user = [$id,$name,$age];
    return view('about', compact('address', 'user'));
});