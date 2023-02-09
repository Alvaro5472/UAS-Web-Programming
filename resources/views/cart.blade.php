@extends('layout.template')

@section('content')
<div class="ms-5 mt-4">
    <h3 class="text-decoration-underline" style="margin-left: 22.5%;">{{__('msg.Cart')}}</h3>
    @foreach ($carts as $cart)
    <form action={{ route('deleteCart', [$cart->id]) }} method="POST">
        @csrf
        @method('delete')
        <div class="container d-flex justify-content-center my-5 text-center">
            <img class="me-5" src="{{asset($cart->item->image)}}" style="width: 10%;">
            <span class="fs-3 mx-5" style="padding-top:50px;">{{$cart->item->item_name}}</span>
            <span class="fs-3 mx-5" style="padding-top:50px;">Rp. {{number_format($cart->price)}},-</span>
            <input class="btn btn-warning fw-semibold mt-5 mx-5" style="height: 50px; width: 100px;" type="submit" value="Delete">
        </div>
    </form>
    @endforeach
</div>
<div class="d-flex justify-content-end me-5">
    <h4 class="fw-bold">TOTAL: Rp. {{number_format($totalPrice)}},-</h4>
    <form action={{ route('checkout') }} method="POST">
        @csrf
        <input class="btn btn-warning fw-semibold ms-3" type="submit" value="Checkout">
    </form>
</div>
@endsection
