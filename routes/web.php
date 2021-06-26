<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/explore-build-program-robots-in-nairobi-kenya', function () {
    return view('about');
});

Route::get('/robotics-and-coding-courses-in-nairobi-kenya', function () {
    return view('course');
});
Route::get('/enquire-about-robotics-coding-and-3D-printing-in-nairobi-kenya', function () {
    return view('contact');
});
Route::get('/learn-introduction-to-coding-and-Robotics-Age-(9-12)-in-nairobi-kenya', function () {
    return view('course.brc_course');
});
Route::get('/learn-introduction-to-programming-and-game-design-in-nairobi-kenya', function () {
    return view('course.C101_course');
});
Route::get('/learn-intermediate-Robotics-in-nairobi-kenya', function () {
    return view('course.R101_course');
});
Route::get('/learn-advanced-Robotics-in-nairobi-kenya', function () {
    return view('course.R102_course');
});
Route::get('/learn-3d-printing-in-nairobi-kenya', function () {
    return view('course.3D_course');
});

Route::get('/RoboticsAndProgrammingRegistration', function () {
    return view('AdBlogs.RoboticsAndProgrammingDemo');
});

Route::get('/learning-microwings-atmel', function () {
    return view('course.MicroWings-Atmel_course');
});

Route::get('/our_testmonials', function () {
    return view('testimonials');
});

Route::get('/gameoftheyoungsavvy', function () {
    return view('games.gameoftheyoungsavvy');
});
