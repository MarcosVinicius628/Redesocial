<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('home');
});

Route::get('/login', function(){
    return view('login');
});

Route::get ('/explore', function(){
    return view('explore');
});

Route::get('/messages', function(){
    return view('messages');
});

Route::get('/notification', function(){
    return view('notification');
});

Route::get('/profile', function(){
    return view('profile');
});
  route::get('/home', function(){
    return view('home');
});
 route::get('/reels', function(){
    return view('reels');
});
