<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;

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

Route::group(['prefix'=>'/members'], function () {
    Route::get('/all', [MembersController::class, 'showAllMembers'])->name('showAllMembers');
    Route::get('/member/{id}', [MembersController::class, 'showAllMembers'])->name('showAllMembers');
    Route::get('/addMemberForm', [MembersController::class, 'showAddMemberForm'])->name('showAddMemberForm');
    Route::post('/addMember', [MembersController::class, 'addMember'])->name('addMember');
});
//Route::get('/success', function () {
//    return view('success');
//})->name('success');
