<?php

use Illuminate\Support\Facades\Route;


/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about',function() 
{
     echo ('welcome Nitish ');
});
Route:: get ('/mm',function()
{
    return view('dj');

});
Route::get ('/dj', function()
{
    echo "sound";
});*/
Route::get('/', function () {
    return view('Dj'');
})-> name ("pravesh");

Route::get ('/pp',function() {
    return view ("xyz");

})-> name('ram');



// Route::get('/sum/{a}/{b}',function($a,$b) 
// {
//     $sum=$a+$b;
//      echo $sum 
// });