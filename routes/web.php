<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoinController;
use App\Http\Controllers\ContactUs\ContactUsController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\settings\SiteController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\CopyTraderController;
use App\Http\Controllers\IpoController;

// use App\Http\Controllers\SupportController;
use App\Http\Controllers\TransactionLogController;
use App\Http\Controllers\WithdrawController;
use App\Notifications\NewDepositRequest;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

//Route::get('/', function () {
//  return view('auth.login');
//});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactUsController::class, 'store'])->name('contact.store');
Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials');
Route::get('terms', function () {
    return view('terms');
})->name('terms');
Route::get('policy', function () {
    return view('home.privacy-policy');
})->name('policy');
Route::get('whitepaper', function () {
    return view('home.whitepaper');
})->name('whitepaper');


Route::group(['middleware' => 'auth'], function () {
    // ADMIN
    Route::group(['middleware' => 'App\Http\Middleware\authCheck:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/', [HomeController::class, 'admin'])->name('dashboard');
        Route::get('packages', [PackageController::class, 'index'])->name('packages');
        Route::post('packages', [PackageController::class, 'store'])->name('packages.store');
        Route::get('packages/{id}', [PackageController::class, 'edit'])->name('packages.edit');
        Route::patch('packages/{id}', [PackageController::class, 'update'])->name('packages.update');
        Route::delete('packages/{id}', [PackageController::class, 'destroy'])->name('packages.delete');
        Route::get('coin', [CoinController::class, 'index'])->name('coin');
        Route::post('coin', [CoinController::class, 'store'])->name('coin.store');
        Route::get('coin/{id}', [CoinController::class, 'edit'])->name('coin.edit');
        Route::patch('coin/{id}', [CoinController::class, 'update'])->name('coin.update');
        Route::delete('coin/{id}', [CoinController::class, 'destroy'])->name('coin.delete');
        Route::get('depositlog', [TransactionLogController::class, 'depositlog'])->name('depositlog');
        Route::get('deposit/confirm/{id}', [TransactionLogController::class, 'confirm'])->name('confirmDeposit');
        Route::get('deposit/cancel/{id}', [TransactionLogController::class, 'cancelDeposit'])->name('cancelDeposit');
        Route::get('withdrawalog', [TransactionLogController::class, 'withdrawalog'])->name('withdrawalog');
        Route::get('withdrawalog/confirm/{id}', [TransactionLogController::class, 'confirmWithdrawal'])->name('confirmWithdrawal');
        Route::get('withdrawalog/cancel/{id}', [TransactionLogController::class, 'cancelWithdrawal'])->name('cancelWithdrawal');
        Route::get('user/{id}', [AdminController::class, 'viewUser'])->name('view.user');
        Route::patch('user/view/update/{id}', [AdminController::class, 'update'])->name('update');
        Route::patch('user/view/update/wb/{id}', [AdminController::class, 'walletBal'])->name('update.wallet');
        Route::patch('user/view/update/bonus/{id}', [AdminController::class, 'bonus'])->name('update.bonus');
        Route::patch('user/view/update/hr/{id}', [AdminController::class, 'hashRate'])->name('update.hash-rate');
        Route::patch('user/view/update/package/{id}', [AdminController::class, 'package'])->name('update.package');
        Route::patch('user/view/block/{id}', [AdminController::class, 'blockUser'])->name('block-user');
        Route::delete('user/view/delete/{id}', [AdminController::class, 'deleteUser'])->name('delete-user');
        Route::get('settings', [SiteController::class, 'index'])->name('site');
        Route::post('settings/update', [SiteController::class, 'updateSettings']);
        Route::get('settings/profile', [SiteController::class, 'profile'])->name('profile');
        Route::post('settings/update/profile/{id}', [SiteController::class, 'updateProfile'])->name('profile.update');
        Route::post('user/send/mail', [AdminController::class, 'sendMail']);
        Route::post('user/send/notification/{id}', [AdminController::class, 'sendNotification'])->name('send.notification');
        Route::get('/broadcast', [AdminController::class, 'broadcast'])->name('broadcast');
        Route::post('/send/broadcast', [AdminController::class, 'SendBroadcast']);
        // IPOs
        Route::get('/ipo', [IpoController::class, 'index'])->name('ipos.index');
        Route::post('/ipo', [IpoController::class, 'store'])->name('ipos.store');
        Route::get('/ipo/{id}', [IpoController::class, 'edit'])->name('ipos.edit');
        Route::patch('/ipo/{id}', [IpoController::class, 'update'])->name('ipos.update');
        Route::delete('/ipo/{id}', [IpoController::class, 'destroy'])->name('ipos.delete');

        Route::get('token-sale', [AdminController::class, 'tokenSale'])->name('token-sale');
        // Verify Account
        Route::post('activate/account', [HomeController::class, 'verifyAccount'])->name('verify');
        // Set withdrawal limit
        Route::post('/set/withdrawal-limit/{id}', [AdminController::class, 'set_withdrawal_limit'])->name('set.withdrawal_limit');
        // Delete transactions, deposits, and withdrawals
        Route::delete('transaction/delete/{id}', [AdminController::class, 'deleteTransaction'])->name('delete-transaction');
        Route::delete('deposit/delete/{id}', [AdminController::class, 'deleteDeposit'])->name('delete-deposit');
        Route::delete('withdrawal/delete/{id}', [AdminController::class, 'deleteWithdrawal'])->name('delete-withdrawal');
        // Update status routes
        Route::patch('transaction/status/{id}', [AdminController::class, 'updateTransactionStatus'])->name('update-transaction-status');
        Route::patch('deposit/status/{id}', [AdminController::class, 'updateDepositStatus'])->name('update-deposit-status');
        Route::patch('withdrawal/status/{id}', [AdminController::class, 'updateWithdrawalStatus'])->name('update-withdrawal-status');
        // CopyTrader
        Route::get('/manage-copy-traders', [CopyTraderController::class, 'manageCopyTraders'])->name('manage.copy-traders');
        Route::get('/copy-trader', [CopyTraderController::class, 'createCopytrader'])->name('create.copy-trader');
        Route::get('/copy-trader/{id}', [CopyTraderController::class, 'editCopyTrader'])->name('edit.copy-traders');
        Route::post('/copy-trader', [CopyTraderController::class, 'addCopyTrader'])->name('add.copy-traders');
        Route::patch('/copy-trader/{id}', [CopyTraderController::class, 'updateCopyTrader'])->name('update.copy-traders');
        // Login as user
        Route::get('/{id}', [AdminController::class, 'loginAs'])->name('adminLoginAsUser');
    });

    // USER
    Route::get('/activate', [HomeController::class, 'activated'])->name('activated');
    Route::group(['middleware' => ['App\Http\Middleware\authCheck:user', 'isActivated'], 'prefix' => 'account', 'as' => 'user.'], function () {
        Route::get('/', [HomeController::class, 'user'])->name('dashboard');
        Route::get('/notifications', [HomeController::class, 'notifications'])->name('notifications');
        Route::get('/notifications/read/{id}', [HomeController::class, 'readNotification'])->name('notifications.read');
        Route::get('/notifications/read-all', [HomeController::class, 'readAllNotifications'])->name('notifications.readAll');
        Route::delete('/notifications/delete/{id}', [HomeController::class, 'deleteNotification'])->name('notifications.delete');
        Route::get('/deposit', [DepositController::class, 'index'])->name('deposit');
        Route::post('/deposit', [DepositController::class, 'store'])->name('deposit.store');
        Route::post('/reinvest', [DepositController::class, 'reinvest'])->name('reinvest');
        Route::get('/deposit/info/{id}', [DepositController::class, 'showDepositInfo'])->name('deposit.info');
        Route::get('/withdraw', [WithdrawController::class, 'index'])->name('withdraw');
        Route::post('/withdraw', [WithdrawController::class, 'store'])->name('withdraw.store');
        Route::get('/mining', [PackageController::class, 'packageView'])->name('mining');
        Route::get('/referrals', [ReferralController::class, 'index'])->name('referrals');
        Route::get('/transactions', [TransactionLogController::class, 'index'])->name('transactions');
        Route::get('/my-plans', [PackageController::class, 'myPlans'])->name('my-plans');
        Route::get('/my-plans/{id}', [PackageController::class, 'planDetails'])->name('my-plans.details');
        Route::post('/buytoken', [TokenController::class, 'buyToken'])->name('buy-token');
        Route::get('/live-trade', function () {
            return view('user.live-trade');
        })->name('live-trade');
        // Copy trader
        Route::get('/copy-traders', [CopyTraderController::class, 'index'])->name('copy-traders');
        Route::post('/follow', [CopyTraderController::class, 'follow'])->name('copy-traders.follow');
        // IPOs
        Route::get('/ipo', [IpoController::class, 'userIndex'])->name('ipos.index');
        Route::get('/my-ipo', [IpoController::class, 'userPurchased'])->name('ipos.purchased');
        Route::post('/ipo/purchase', [IpoController::class, 'purchase'])->name('ipos.purchase');
        // Login as admin
        Route::get('/{id}', [AdminController::class, 'loginAs'])->name('loginAsAdmin');
    });
});

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
});

Route::get('/test', function () {
    $email = ['test@mail.com', 'badgang@mail.com'];
    $deposit = \App\Models\Deposit::find(11);
    foreach ($email as $e) {
        Notification::route('mail', $e)->notify(new NewDepositRequest($deposit));
    }
    //    Notification::send($email, new NewDepositRequest());
});

Route::get('/run-migrations-copytrader', function () {
    \Artisan::call('migrate');
    return 'Migrations output: ' . \Artisan::output();
});
