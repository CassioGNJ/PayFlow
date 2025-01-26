<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;
use App\Constantas\Transactions;
 


class GenerateTransactionController extends Controller
{
    public function get(Request $request) {
        return view('generate_transaction');
    }

    public function generete_Transaction(Request $request) {
        try {
            DB::beginTransaction();
    
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function destroy_Transaction(Request $request) {
        try {
            DB::beginTransaction();
    
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }
}
