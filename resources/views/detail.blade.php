@extends('layout.template')

@section('content')
<div class=" container d-flex justify-content-center" style="margin-top: 100px; padding-left: 200px; padding-right: 200px;">
    <div class="mx-5">
        <h3 class="fw-bold text-decoration-underline text-center">{{$details->item_name}}</h3>
        <img src="{{asset($details->image)}}" alt="">
    </div>
    <div class="mx-5 mt-5">
        <p class="fw-bold">Price Rp. {{number_format($details->price)}}</p>
        <p>LIMITED VEGETABLE!</p>
        <p>{{$details->item_desc}}</p>
        <p>Notes: This vegetable won 1st place at Canada UK National Giant Vegetables Championship.</p>
    </div>
</div>
<div class="d-flex justify-content-end mt-5" style="margin-right: 25%;">
    <form action={{route('addToCart')}} method="POST">
        @csrf
        <input type="hidden" name="item_id" value="{{$details->id}}">
        <input type="hidden" name="price" value="{{$details->price}}">
        <input class="btn btn-warning px-5 fw-semibold" type="submit" value="Buy">
    </form>
</div>
@endsection
