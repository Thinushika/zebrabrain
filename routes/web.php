<?php
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Http\Middleware\AuthCustomer;

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
$router->aliasMiddleware('authCustomer', AuthCustomer::class);

Route::match(['get', 'post'],'/', [MainController::class, 'index']);
Route::match(['get', 'post'],'/questions/{question}', [QuestionsController::class, 'question']);
Route::match(['get', 'post'],'/save-answers', [QuestionsController::class, 'save_answers']);
Route::match(['get', 'post'],'/questions/game/game-1', [QuestionsController::class, 'game_1']);
Route::match(['get', 'post'],'/questions/game/game-2', [QuestionsController::class, 'game_2']);
Route::match(['get', 'post'],'/questions/game/game-3', [QuestionsController::class, 'game_3']);
Route::match(['get', 'post'],'/questions/game/game-4', [QuestionsController::class, 'game_4']);
Route::match(['get', 'post'],'/questions/game/game-5', [QuestionsController::class, 'game_5']);
Route::match(['get', 'post'],'/sign-in', [UserController::class, 'sign_in']);
Route::match(['get', 'post'],'/sign-up', [UserController::class, 'sign_up']);
Route::match(['get', 'post'],'/logout', [UserController::class, 'logout']);
Route::match(['get', 'post'],'/packages', [MainController::class, 'packages'])->middleware('authCustomer');
Route::match(['get', 'post'],'/buy-package/{package}', [UserController::class, 'buy_package'])->middleware('authCustomer');
Route::match(['get', 'post'],'/dashboard', [MainController::class, 'dashboard'])->middleware('authCustomer');
Route::match(['get', 'post'],'/tips', [MainController::class, 'tips'])->middleware('authCustomer');
Route::match(['get', 'post'],'/consultation-booking', [MainController::class, 'consultationBooking'])->middleware('authCustomer');
Route::match(['get', 'post'],'/internships', [MainController::class, 'internships'])->middleware('authCustomer');
Route::match(['get', 'post'],'/scholarships', [MainController::class, 'scholarships'])->middleware('authCustomer');
Route::match(['get', 'post'],'/university-programs', [MainController::class, 'universityPrograms'])->middleware('authCustomer');
Route::match(['get', 'post'],'/test-attempt', [MainController::class, 'testAttempt'])->middleware('authCustomer');
Route::match(['get', 'post'],'/supar-future-club', [MainController::class, 'suparFutureClub'])->middleware('authCustomer');
Route::match(['get', 'post'],'/profile', [MainController::class, 'profile'])->middleware('authCustomer');
Route::match(['get', 'post'],'/events', [MainController::class, 'events'])->middleware('authCustomer');
Route::match(['get', 'post'],'/parent-community', [MainController::class, 'parentCommunity'])->middleware('authCustomer');


