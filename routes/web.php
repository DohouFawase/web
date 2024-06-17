<?php

use App\Http\Controllers\admin\ArticleController;
use App\Http\Controllers\admin\CategorieController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ImageController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\TagsController;
use App\Http\Controllers\admin\TemoignageController;
use App\Http\Controllers\admin\TestiController;
use App\Http\Controllers\admin\VideTestiController;
use App\Http\Controllers\blog\FrontendController;
use App\Http\Controllers\blog\TemoignageController as BlogTemoignageController;
use App\Http\Controllers\blog\TestimonialController;
use App\Http\Controllers\ProfileController;
use App\Models\VideoTesmimoni;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/service', [FrontendController::class, 'service'])->name('service');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::post('/blog', [FrontendController::class, 'store']);

// Route::resource('testimonial', TestimonialController::class);

Route::get('/article-detail/{id}', [FrontendController::class, 'detail'])->name('detail');
// Route::get('/blogs/contact', [FrontendController::class, 'contact'])->name('contact');
// Route::get('testimonial', [FrontendController::class, 'create'])->name('temoignage');
Route::post('testimonial', [FrontendController::class, 'store'])->name('store');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'is_admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Auth::routes();
Route::prefix('admin')->middleware(['auth','is_admin'])->name('admin.')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('/articles', ArticleController::class)->except('show');
    Route::resource('/image', ImageController::class)->except('show');
    Route::resource('/tags', TagsController::class)->except('show');
    Route::resource('/services', ServiceController::class)->except('show');
    Route::resource('/temoignages', TemoignageController::class)->except('show');
    Route::resource('/testi', TestiController::class);
    Route::resource('/video', VideTestiController::class)->except('show');

});

require __DIR__.'/auth.php';
