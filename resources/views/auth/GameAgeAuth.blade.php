@extends('layouts.layout')

@section('content')

<div>

    <div class="text-center" style="margin-top: 20rem">
        <p>CONTENT IN THIS PRODUCT MAY NOT BE APPORPIATE FOR ALL AGE, OR MAY NOT BE APPORPIATE FOR VIEWING AT WORK</p>
    </div>
<form action="/permission" method="post">
    @csrf
    <div class="justify-content-center d-flex allign-items-center">
        <input type="date" name="date">
    </div>
    
    <div class="justify-content-center d-flex">
        <button type="submit" class="btn btn-primary" style="margin-right: 1rem; margin-top: 1rem">View Page</button>
    </form>
        <a href="" class="btn btn-primary" style="margin-left: 1rem; margin-top: 1rem">Cancel</a>
    </div>
</div>

@endsection
