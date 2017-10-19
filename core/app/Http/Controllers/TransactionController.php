<?php

namespace App\Http\Controllers;

use App\Account;
use App\Expense;
use App\Income;
use App\Transaction;
use App\TransExpense;
use App\TransIncome;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(){

        $in = Income::all();
        $out = Expense::all();
        return view('backend.ac-management.transaction', compact('in', 'out'));
    }

    public function incomeStore(Request $request){

        $this->validate($request, array(

            'date'       => 'required|max:191',
            'income_id' => 'required',
            'amount'     => 'required|max:191',
            'note'       => 'max:191'
        ));

        $in = new TransIncome;
        $in->date = $request->date;
        $in->income_id = $request->income_id;
        $in->amount = $request->amount;
        $in->note = $request->note;
        $in->save();
        return back()->withMsg("Transaction Complete Successfully");

    }


    public function expenseStore(Request $request){

        $this->validate($request, array(

            'date'       => 'required|max:191',
            'expense_id' => 'required',
            'amount'     => 'required|max:191',
            'note'       => 'max:191'
        ));

        $out = new TransExpense;
        $out->date = $request->date;
        $out->expense_id = $request->expense_id;
        $out->amount = $request->amount;
        $out->note = $request->note;
        $out->save();
        return back()->withMsg("Transaction Complete Successfully");
    }
}
