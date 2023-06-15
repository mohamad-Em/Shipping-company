<?php

use App\Http\Controllers\backEnd\CustomerController;
use App\Http\Controllers\backEnd\EmailSettingController;
use App\Http\Controllers\backEnd\OperationController;
use App\Http\Controllers\backEnd\PortController;
use App\Http\Controllers\backEnd\ProfileController;
use App\Http\Controllers\backEnd\Role\RoleController;
use App\Http\Controllers\backEnd\SaleController;
use App\Http\Controllers\backEnd\SettingController;
use App\Http\Controllers\backEnd\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'backEnd'], function () {
    Route::get('login', [UserController::class, 'login'])->name('user.login');
    Route::post('loginStore', [UserController::class, 'loginStore'])->name('user.loginStore');
    Route::get('logout', [UserController::class, 'logout'])->name('user.logout');
});
Route::group(['namespace' => 'backEnd', 'prefix' => 'user', 'middleware' => 'check_user'], function () {
    Route::get('home', [UserController::class, 'dashboard'])->name('user.home');
    Route::get('all', [UserController::class, 'all'])->name('user.all');
    Route::get('create', [UserController::class, 'create'])->name('user.create');
    Route::post('store', [UserController::class, 'store'])->name('user.store');
    Route::get('edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('delete/{id}', [UserController::class, 'delete'])->name('user.delete');

});
Route::group(['namespace' => 'backEnd', 'prefix' => 'user', 'middleware' => 'check_user'], function () {
    Route::get('sales', [SaleController::class, 'index'])->name('user.sales');
    Route::get('view/{id}', [SaleController::class, 'view'])->name('user.sales.view');
    Route::post('storeNote/{id}', [SaleController::class, 'storeNote'])->name('user.sales.storeNote');
    Route::post('updateStatus/{id}', [SaleController::class, 'updateStatus'])->name('user.sales.updateStatus');

});
Route::group(['namespace' => 'backEnd', 'prefix' => 'user', 'middleware' => 'check_user'], function () {
    Route::get('operation', [OperationController::class, 'index'])->name('user.operation');
    Route::get('viewOperation/{id}', [OperationController::class, 'view'])->name('user.operation.view');
    Route::get('updateStatusEVGM/{id}', [OperationController::class, 'updateStatus'])->name('user.operation.updateStatus');
    Route::get('pdf/{id}', [OperationController::class, 'PDF'])->name('user.operation.PDF');
    Route::get('generate-pdf/{id}', [OperationController::class, 'generatePDF'])->name('user.operation.generatePDF');
});
Route::group(['namespace' => 'backEnd', 'prefix' => 'user', 'middleware' => 'check_user'], function () {
    Route::get('checkPrice', [PortController::class, 'checkPrice'])->name('user.checkPrice');
    Route::post('search', [PortController::class, 'search'])->name('user.checkPrice.search');
});
Route::group(['namespace' => 'backEnd', 'prefix' => 'user/profile', 'middleware' => 'check_user'], function () {
    Route::get('/', [ProfileController::class, 'index'])->name('user.profile.ticket');
    Route::get('ticket/all', [ProfileController::class, 'ticketAll'])->name('user.profile.ticket.all');
    Route::get('email', [ProfileController::class, 'email'])->name('user.profile.email');
    Route::post('sendEmail', [ProfileController::class, 'sendEmail'])->name('user.profile.email.send');
    Route::get('view/{id}', [ProfileController::class, 'view'])->name('user.profile.ticket.view');

});

Route::group(['namespace' => 'backEnd', 'prefix' => 'customer', 'middleware' => 'check_user'], function () {
    Route::get('customers', [CustomerController::class, 'customers'])->name('customer.customers');
    Route::get('delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
    Route::get('excel_file', [CustomerController::class, 'excel'])->name('customer.excel_file');
    Route::get('export_excel', [CustomerController::class, 'export'])->name('customer.export_excel');
    Route::post('excel_import', [CustomerController::class, 'import'])->name('customer.excel_import');

});

Route::group(['namespace' => 'backEnd', 'prefix' => 'role', 'middleware' => 'check_user'], function () {
    Route::get('index', [RoleController::class, 'index'])->name('role.index');
    Route::get('create', [RoleController::class, 'create'])->name('role.create');
    Route::post('store', [RoleController::class, 'store'])->name('role.store');
    Route::get('show/{id}', [RoleController::class, 'show'])->name('role.show');
    Route::get('edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
    Route::post('update/{id}', [RoleController::class, 'update'])->name('role.update');
    Route::get('destroy/{id}', [RoleController::class, 'destroy'])->name('role.destroy');
});
Route::group(['namespace' => 'backEnd', 'prefix' => 'setting', 'middleware' => 'check_user'], function () {
    Route::get('index', [SettingController::class, 'index'])->name('setting.index');
    Route::post('store', [SettingController::class, 'store'])->name('setting.store');
});
Route::group(['namespace' => 'backEnd', 'prefix' => 'emailSetting', 'middleware' => 'check_user'], function () {
    Route::get('index', [EmailSettingController::class, 'index'])->name('email.setting.index');
    Route::post('store', [EmailSettingController::class, 'store'])->name('email.setting.store');
});
