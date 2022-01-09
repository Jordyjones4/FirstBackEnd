@extends('layouts.layout')
@section('content')

@if($transactions->isnotEmpty())
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
                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target='#DeleteTransactionModal'>
                        Delete
                    </button>
                    <div id="DeleteTransactionModal" class="modal fade" tabindex="-1" role="dialog">
                        <form action="{{route('deleteTransaction',$transaction->id)}}" method="POST">
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <a class="px-3 text-dark text-decoration-none">
            Total Price: {{$total}}<br>
        </a>
        <a class="row btn btn-primary ml-3" href="{{route('PaymentInformation',$total)}}">
            Check-out
        </a>
    </div>
@else
    <p>There are no ongoing transactions...</p>
@endif
@endsection
