<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Constants\Transactions as TransactionStatus;

class DashboardController extends Controller
{
    public function index(Request $request) {
        try {
            $transactions = Transaction::where('user_id', auth()->user()->id)->get();
            $transactions->map(function($transaction) {
                $transaction->status = TransactionStatus::getStatus($transaction->status);
                return $transaction;
            });
            return view('dashboard', compact('transactions'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
