<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PatronTypeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StaffController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix'=>'admin','middleware'=>['admin:admin']],function() {
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'Store'])->name('admin.login');
});



// check auth all page for admin
Route::middleware(['auth:admin'])->group(function(){

    Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
        return view('admin.index');
    })->name('dashboard')->middleware('auth:admin');

    // Admin Faculty All Routes
    Route::prefix('faculty')->group(function(){
        Route::get('/view', [FacultyController::class, 'FacultyView'])->name('all.faculty');
        Route::post('/store', [FacultyController::class, 'FacultyStore'])->name('faculty.store');
        Route::get('/edit/{id}', [FacultyController::class, 'FacultyEdit'])->name('faculty.edit');
        Route::post('/update', [FacultyController::class, 'FacultyUpdate'])->name('faculty.update');
        Route::get('/delete/{id}', [FacultyController::class, 'FacultyDelete'])->name('faculty.delete');

        // Admin Patron Type Route
        Route::get('/patrontype/view', [PatronTypeController::class, 'PatronTypeView'])->name('all.patrontype');
        Route::post('/patrontype/store', [PatronTypeController::class, 'PatronTypeStore'])->name('patrontype.store');
        Route::get('/patrontype/edit/{id}', [PatronTypeController::class, 'PatronTypeEdit'])->name('patrontype.edit');

        // Admin Report Route
        Route::prefix('reports')->group(function(){
            Route::get('/view', [ReportController::class, 'ReportView'])->name('all.report');
            Route::post('/search/by/filter', [ReportController::class, 'ReportByFilter'])->name('report.by.filter');
            Route::post('/download/pdf', [ReportController::class, 'DownloadReportPDF'])->name('report.download.pdf');
            Route::post('/download/excel', [ReportController::class, 'DownloadReportExcel'])->name('report.download.excel');
        });

    });

    Route::prefix('staff')->group(function(){
        Route::get('/view', [StaffController::class, 'StaffView'])->name('all.staff');
        Route::post('/store', [StaffController::class, 'StaffStore'])->name('staff.store');
        Route::get('/edit/{id}', [StaffController::class, 'StaffEdit'])->name('staff.edit');
        Route::post('/update', [StaffController::class, 'StaffUpdate'])->name('staff.update');
        Route::get('/delete/{id}', [StaffController::class, 'StaffDelete'])->name('staff.delete');
    });

    // Route::prefix('notifications')->group(function() {
    //     Route::get('/', [NotificationController::class, 'index'])->name('notifications.index');
    //     Route::get('/unread', [NotificationController::class, 'getUnreadNotifications'])->name('notifications.unread');
    //     Route::get('/{id}/detail', [NotificationController::class, 'viewNotificationDetail'])->name('notifications.detail');
    //     Route::post('/{id}/confirm', [NotificationController::class, 'confirmNotification'])->name('notifications.confirm');
    //     Route::get('/mark-all-read', [NotificationController::class, 'markAllAsRead'])->name('notifications.mark-all-read');
    // });

});

Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');



// login only web
Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



// All user frontend
Route::prefix('home')->group(function(){
    Route::get('/', [IndexController::class, 'index'])->name('home.index');
    Route::get('/orders', [OrderController::class, 'ListOrder'])->name('order.view');
    Route::get('/orders/list/{id}', [OrderController::class, 'OrderListView'])->name('order-list-view');
    Route::post('/order/store', [OrderController::class, 'OrderStore'])->name('order.store');
    Route::post('/orders/{id}/update-delivery', [OrderController::class, 'updateDeliveryStatus'])
    ->name('order.update-delivery');
});

// routes/web.php

// Route::prefix('notifications')->group(function() {
//     Route::get('/', [NotificationController::class, 'index'])
//          ->name('notifications.index');
//     Route::get('/unread', [NotificationController::class, 'getUnreadNotifications'])
//          ->name('notifications.unread');
//     Route::post('/{id}/mark-as-read', [NotificationController::class, 'markAsRead'])
//          ->name('notifications.mark-as-read');
//     Route::get('/mark-all-read', [NotificationController::class, 'markAllAsRead'])
//          ->name('notifications.mark-all-read');
// });

Route::prefix('notifications')->group(function() {
    Route::get('/', [NotificationController::class, 'index'])->name('notifications.index');
    Route::get('/unread', [NotificationController::class, 'getUnreadNotifications'])->name('notifications.unread');
    Route::get('/{id}/detail', [NotificationController::class, 'viewNotificationDetail'])->name('notifications.detail');
    Route::post('/{id}/confirm', [NotificationController::class, 'confirmNotification'])->name('notifications.confirm');
    Route::get('/mark-all-read', [NotificationController::class, 'markAllAsRead'])->name('notifications.mark-all-read');
});


// Loader
// Route::post('/loading/success', [IndexController::class, 'LoadingSuccess']);




