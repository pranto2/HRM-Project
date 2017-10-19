<?php

namespace App\Http\Controllers;

use App\Account;
use App\Expense;
use App\Income;
use App\Transaction;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        return view('backend.ac-management.account');
    }

    public function incomeStore(Request $request){
        $this->validate($request, array(
            'name' => 'required|max:191'
        ));
        $acc = new Income;
        $acc->name = $request->name;
        $acc->save();

        return back()->withMsg("Item Added Successfully");
    }

    public function expenseStore(Request $request){
        $this->validate($request, array(
            'name' => 'required|max:191'
        ));
        $acc = new Expense;
        $acc->name = $request->name;
        $acc->save();
        return back()->withMsg("Item Added Successfully");
    }
    public function allAccount(){

        $cashIn= Transaction::where('account_id',1)->get();
        $cashOut = Transaction::where('account_id',1)->where('tr_type','Out')->get();
        $a = $cashIn->sum('amount');
        $b = $cashOut->sum('amount');
        $balance = $a-$b;
        return $cashIn;

        $acc = Account::All()->first();
        return $acc;

        foreach ($acc as $b){
            return $b->transactions;
        }
        $accca = $acc->transactions;
        $tran = Transaction::all();
        foreach ( $tran as $a ){

            return $a->account;

        }

        return $b;
    }
}
