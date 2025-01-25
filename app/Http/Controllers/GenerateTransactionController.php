<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenerateTransactionController extends Controller
{
    public function get(Request $request) {
        return view('generate_transaction');
    }

    public function post(Request $request) {
        try {
            DB::beginTransaction();
    
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function destroy(Request $request) {
        try {
            DB::beginTransaction();
    
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }
}
