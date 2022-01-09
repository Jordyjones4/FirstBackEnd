@extends('layouts.layout')
@section('content')

<div class="container-fluid">
    @foreach ($transactions as $transaction)
        <div class="row homeBG border m-3 p-3 h-25">
            <div class="">
                <img src="{{$transaction->game_cover}}" alt="" />
            </div>
            <div class=" ml-3 ">
                <h6 class="">{{ $transaction->game_name}}</h6>
                <p class="">{{$transaction->CategoryName}}</p>
                <p class="">{{$transaction->game_price}}</p>
            </div>
        </div>
    @endforeach
    <a class="px-3 text-dark">
        Total Payment: {{$total}}<br>
    </a>
</div>
@endsection
