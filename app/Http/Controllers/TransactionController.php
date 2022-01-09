<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Transaction;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
class TransactionController extends Controller
{
    //
    public function makeTransaction($userid,$gameid){
        $check = Transaction::where([
            ['game_id','=',$gameid],
            ['member_id','=',$userid]
            ])->get();
        if($check->count()>0){
            //Do something if there's duplicate!
            return redirect()->back()->with('DuplicateMsg','You already have this game in your shopping cart or your library.');
        }else{
            Transaction::create([
                'game_id' => $gameid,
                'member_id' => $userid
            ]);
            return redirect()->back();
        }
    }

    public function ShoppingCart($userid){
        $transactions=Transaction::join('games','game_id','=','games.id')
        ->join('categories','game_category','=','categories.id')
        ->where('transactions.member_id','like',$userid)
        ->where('transactions.status','!=','1')
        ->select('transactions.*',
        'games.game_name',
        'games.game_price',
        'games.game_cover',
        'categories.CategoryName')
        ->get();
        $total=0;
        foreach($transactions as $transaction){
            $total+=$transaction->game_price;
        }
        // Transaction::where('member_id','=',$userid)->with('game')->get();
        return view('ShoppingCart',compact('transactions','total'));
    }
    public function PaymentInformation($total){
        return view('PaymentInformation',compact('total'));
    }
    public function deleteTransaction($transactionid){
        Transaction::destroy($transactionid);
        return redirect()->back();
    }
    public function verifyPayment(Request $request,$userid){
        $request->validate([
            'CardName' =>'required|min:6',
            'CardNumber' => 'required|regex:/^[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}$/',
            'CVV' => 'required|regex:/^[0-9]{3,4}$/',
            'Country' => 'required',
            'ZIP' => 'required|numeric'
        ]);
        $date = new DateTime();
        $dateString=$date->format('Y-m-d-H-i-s');
        // print($dateString);
        $transactions = Transaction::where('member_id','=',$userid)
        ->where('status','0')
        ->get();
        foreach($transactions as $transaction){
            // print($transaction);
            $transaction->status = '1';
            $transaction->completed_on = $dateString;
            $transaction->save();
        }
        $transactions=Transaction::join('games','game_id','=','games.id')
        ->join('categories','game_category','=','categories.id')
        ->where('transactions.member_id','like',$userid)
        ->where('transactions.status','=','1')
        ->where('transactions.completed_on','like',$date)
        ->select('transactions.*',
        'games.game_name',
        'games.game_price',
        'games.game_cover',
        'categories.CategoryName')
        ->get();
        $total=0;
        foreach($transactions as $transaction){
            $total+=$transaction->game_price;
        }
        return view('TransactionReceipt',compact('transactions','total'));
    }



}
