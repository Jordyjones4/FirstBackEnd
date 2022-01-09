@extends('layouts.layout')

@section('content')

        <div class="container d-flex">
            <div class="row">
              <div class="col-8">
                  <video width="480" height="360" controls>
                      <source src="{{$game->game_trailer}}" type="video/webm">
                  </video>
              </div>

              <div class="col-4 mt-4">
                  <div>
                    <img  src="{{$game->game_cover}}" alt="">
                  </div>
                  <div>
                    <h5 class="mt-4">{{$game->game_name}}</h5>
                   {{$game->game_description}}
                  </div>
              </div>
            </div>
      </div>
    @if(Auth::check())
        <div class="container mt-2">
            <p class="shadow bg-light fs-5 p-4">Buy {{$game->game_name}}</p>
            <div class="d-flex justify-content-end">
                <form action="{{route('makeTransaction',[auth::id(),$game->id])}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Rp {{$game->game_price}} | ADD TO CART</button>
                </form>
            </div>
            @if(Session::has('DuplicateMsg'))
            <div class="alert alert-success"> {{ Session::get('DuplicateMsg') }}</div>
            @endif
    @endif

  </div>
  <div class="container">
      <h1>ABOUT THIS GAME</h1>
      <p>
        {{$game->game_description}}
      </p>
  </div>
  @endsection
