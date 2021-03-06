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
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//
//Route::get('/prometheus', function () {
//
//    $yo = json_decode('{
//   "status" : "success",
//   "data" : {
//      "resultType" : "matrix",
//      "result" : [
//         {
//            "metric" : {
//               "__name__" : "up",
//               "job" : "prometheus",
//               "instance" : "localhost:9090"
//            },
//            "values" : [
//               [ 1435781430.781, "1" ],
//               [ 1435781445.781, "1" ],
//               [ 1435781460.781, "1" ]
//            ]
//         },
//         {
//            "metric" : {
//               "__name__" : "up",
//               "job" : "node",
//               "instance" : "localhost:9091"
//            },
//            "values" : [
//               [ 1435781430.781, "0" ],
//               [ 1435781445.781, "0" ],
//               [ 1435781460.781, "1" ]
//            ]
//         }
//      ]
//   }
//}');
//
//    return response()->json($yo);
//})->name("prometheus");

