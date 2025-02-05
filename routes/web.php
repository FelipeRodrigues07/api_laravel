<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {    //fica dentro de resources dentro, welcome, blade 
//     return view('welcome');
// });


Route::any('/any', function(){
    return "Permite todo tipo de acesso http (put,delete, get, post)";
});

Route::match(['get', 'post'], '/match', function () {
    return "Permite apenas acessos definidos";
});


// Route::get('/produto/{id}/{cat?}', function ($id, $cat = '') {
//     return "O ID do produto é: {$id}  <br> A categoria é {$cat}";
// });

// Route::get('/sobre', function(){
//     return redirect('/empresa');
// });
Route::redirect('/sobre', '/empresa');

// Route::get('/empresa', function () {
//     return view('site/empresa');
// });
Route::view('/empresa', '/site/empresa');


Route::get('news', function(){
   return view('news');
})->name('noticias');

Route::get('/novidades', function(){
    return redirect()->route('noticias');
});

// Route::prefix('admin')->group(function(){
//     Route::get('dashboard', function(){
//         return "dashboard";
//     });
    
//     Route::get('users', function(){
//         return "users";
//     });
    
//     Route::get('clientes', function(){
//         return "clientes";
//     });
// });

// Route::name('admin.')->group(function(){
//     Route::get('admin/dashboard', function(){
//         return "dashboard";
//     })->name('dashboard');
    
//     Route::get('admin/users', function(){
//         return "users";
//     })->name('users');
    
//     Route::get('admin/clientes', function(){
//         return "clientes";
//     })->name('clientes');
// });

// Route::get('/teste', function(){
//     return redirect()->route('admin.clientes');
// });

// Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
//     Route::get('dashboard', function(){
//         return "dashboard";
//     })->name('dashboard');
    
//     Route::get('users', function(){
//         return "users";
//     })->name('users');
    
//     Route::get('clientes', function(){
//         return "clientes";
//     })->name('clientes');
// });



Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');


Route::get('/produto/{id?}', [ProdutoController::class, 'show'])->name('produto.show');

