@extends('layouts.layout')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Auth::check())
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>You are logged in!</strong>
                </div>
            @endif
        </div>
    </div>


    <div class="homeBG">
        <div class="row p-3">
            @if($games->isNotEmpty())
                @foreach ($games as $game)
                    <div class="col-3 mb-3">
                        <a href="GameDetail/{{ $game->id }}">
                            <div class="card rounded">
                                <img src="{{$game->game_cover}}" alt="" />
                                <div class="card-body">
                                    <h6 class="card-text">{{ $game->game_name}}</h6>
                                    <p class="card-text">{{ $game->categories->CategoryName }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <p>There are no games that can be shown right now...</p>
            @endif
        </div>
    </div>
</div>

@endsection
