<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class TransactionController extends Controller
{
    public function index()
    {
        $users = User::where('isAdmin', false)
            ->whereNot('id', auth()->id())
            ->get();

        return Inertia::render('Transaction/Form', [
            'users' => $users
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'receiverId' => 'required',
            'amount' => 'required'
        ]);

        Transaction::query()
            ->create([
                'user_id' => auth()->id(),
                'amount' => $request->input('amount'),
                'type' => 'Virement',
                'senderId' => $request->input('receiverId')
            ]);

        User::find($request->input('receiverId'))
            ->account()->increment('amount', $request->input('amount'));

        auth()->user()->account()->decrement('amount', $request->input('amount'));

        return Redirect::route('dashboard');
    }
}
