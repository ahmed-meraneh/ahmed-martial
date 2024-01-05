<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/dashboard', function () {
    $amount = auth()->user()->account->amount;
    $transactions = auth()->user()->transactions->map(function (Transaction $transaction) {
        return [
            'receiver' => User::find($transaction->senderId)->name,
            'amount' => $transaction->amount,
            'created_at' => $transaction->created_at->format('d M Y H:i'),
        ];
    });

    return Inertia::render('Dashboard', [
        'amount' => $amount,
        'transactions' => $transactions
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('transaction', [TransactionController::class, 'index'])->name('transaction.index');

Route::post('transaction/create', [TransactionController::class, 'create'])->name('transaction.create');

require __DIR__.'/auth.php';
