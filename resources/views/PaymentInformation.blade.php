@extends('layouts.layout')
@section('content')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
@endif
<form method="POST" action="{{ route('verifyPayment',Auth::id())}}">
    @csrf
    <div class="container-fluid p-3">
        <div class="row px-3 mb-3">
            <h3>Transaction Information</h3>
        </div>
        <div class="row px-3 mb-3">
            <label for="CardName" class="">{{ __('Card Name') }}</label>
            <input id="CardName" type="CardName" class="form-control @error('CardName') is-invalid @enderror"
            name="CardName" value="{{ old('CardName') }}" required autofocus placeholder="Card Name">
            @error('CardName')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="row px-3">
            <label for="CardNumber" class="">{{ __('Card Number') }}</label>
            <input id="CardNumber" type="CardNumber" class="form-control @error('CardNumber') is-invalid @enderror"
            name="CardNumber" value="{{ old('CardNumber') }}" required placeholder="0000 0000 0000 0000" >
            @error('CardNumber')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="row px-3">
            <label class="col-8">Expiry Date</label>
            <label class="col-4">CVV/CVC</label>
        </div>
        <div class="row px-3">

            <input id="Month" type="number" class="col-1 mr-5 form-control @error('Month') must be between 1-12 @enderror"
            name="Month" value="{{ old('Month') }}" required min="1" max="12" placeholder="MM" >
            <input id="Year" type="number" class="col-1 form-control @error('Year') must be between 2021-2050 @enderror"
            name="Year" value="{{ old('Year') }}" required min="2021" max="2050" placeholder="YYYY">

            <input id="CVV" type="text" class="col-4 px-3 ml-auto mr-0 form-control @error('CVV')Can only be filled with 3-4 digit numbers @enderror"
            name="CVV" value="{{ old('CVV') }}" required placeholder="3-4 Digit numbers">

            @error('CVV')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>
        <div class="row px-3">
            <label class="col-8">Country</label>
            <label class="col-4">ZIP</label>
        </div>
        <div class="row px-3">

            <select id="Country" class=" col-6 form-control" name="Country" required>
                <option value="Indonesia" selected>Indonesia</option>
                <option value="Singapore">Singapore</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Philippines">Philippines</option>
            </select>

            <input id="ZIP" type="text" class="col-4 px-3 ml-auto mr-0 form-control @error('ZIP') is-invalid @enderror" name="ZIP" value="{{ old('ZIP') }}" required autocomplete="ZIP" placeholder="ZIP">
            @error('ZIP')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        <div class="row mt-3">
            <p class="col-8">Total Price: {{$total}}</p>
            <a  href="{{ route('ShoppingCart',Auth::id()) }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary ml-2 px-3" >Confirm</button>
        </div>
    </div>
    @error('CVV')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</form>
@endsection
