<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    //
    public function index(){

        // $games=Game::join('categories','games.game_category','=','categories.id')->select('categories.CategoryName as GameCategory')->get();
        $games=Game::with('categories:id,CategoryName')->get();
        // foreach ($games as $item) {
        //     echo $item;<br>
        // }
        return view('home', compact('games'));
    }
    public function show (Game $game,Request $request){
        return view('GameDetail',compact('game'));
    }
public function permission(Request $request){
    dd($request->date);
}
    public function search(Request $request){
        // DB::enableQueryLog();
        $search='%'.$request->search.'%';
        $games=Game::join('categories','game_category','=','categories.id')
        ->where('game_name','like',$search)
        ->orWhere('CategoryName','like',$search)->get();
        return view('home', compact('games'));
    }
}
