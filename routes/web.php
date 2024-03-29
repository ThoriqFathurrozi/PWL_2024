<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Praktikum 1

// Route::get('/hello', function () {
//     return 'Hello World';
// });

Route::get('/world', function () {
    return 'World';
});

// Route::get('/', function () {
//     return 'Selamat Datang';
// });

Route::get('/about', function () {
    return 'NIM : 2241720052 <br> Nama : Thoriq Fathurrozi';
});

//Praktikum 2
Route::get('/user/{name}', function ($name) {
    return 'Nama Saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});


//Praktikum 3
Route::get('/user/{name?}', function ($name = null) {
    return 'Nama Saya ' . $name;
});

Route::get('/user/{name?}', function ($name = 'Thoriq Fathurrozi') {
    return 'Nama saya ' . $name;
});


//Praktikum 4
Route::get('/hello', [WelcomeController::class, 'hello']);


// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);


//Praktikum 5

// Route::resource('photos', PhotoController::class);

// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
// ]);

// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
// ]);

//Praktikum 6
// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Thoriq Fathurrozi']);
// });

//Praktikum 7
Route::get('/greeting', [WelcomeController::class, 'greeting']);










//MY Explore 

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('mahasiswa', function ($id) {
// });

// Route::post('mahasiswa', function ($id) {
// });

// Route::put('mahasiswa', function ($id) {
// });

// Route::delete('mahasiswa', function ($id) {
// });

// Route::get('mahasiswa/{id}', function ($id) {
// });

// Route::put('mahasiswa/{id}', function ($id) {
// });

// Route::delete('mahasiswa/{id}', function ($id) {
// });

// Route::get('hello', function () {
//     return view('hello');
// });

// Route::match(['get'], '/world', function () {
//     return view('world');
// });

// Route::any('about', function () {
//     return view('about');
// });



// Route::get('/user/{name}', function ($name) {
//     return view('user', ['name' => $name]);
// });

// Route::get('/user/{name?}', function ($name = 'John Doe') {
//     return view('user', ['name' => $name]);
// });

// Route::match(['GET'], 'posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return view('comment', ['postId' => $postId, 'commentId' => $commentId]);
// });


// Route::get('/user/profile', function () {
//     //
// })->name('profile');
// Route::get(
//     '/user/profile',
//     [UserProfileController::class, 'show']
// )->name('profile');
// // Generating URLs...
// $url = route('profile');
// // Generating Redirects...
// return redirect()->route('profile');


// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//     // Uses first & second middleware...
//     });
//     Route::get('/user/profile', function () {
//     // Uses first & second middleware...
//     });
//     });
//     Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//     //
//     });
//     });
//     Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
//     });


// Route::prefix('admin')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
//     });

// Route::redirect('/here', '/there');


// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);