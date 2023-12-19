<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        // Show a form to create a new transaction
        return view('transaction.create');
    }

    public function store(Request $request)
    {
        // Logic to store a new transaction
        $transaction = new Transaction();
        $transaction->description = $request->input('description');
        $transaction->amount = $request->input('amount');
        $transaction->save();

        return redirect()->route('transaction.index')->with('success', 'Transaction created successfully');
    }

    public function show()
    {
        // Display transaction history
        $transactions = Transaction::orderBy('created_at', 'desc')->get();
        return view('transaction.history', ['transactions' => $transactions]);
    }
}
