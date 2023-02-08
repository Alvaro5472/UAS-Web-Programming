@extends('layout.template')

@section('content')
<div class="row d-flex justify-content-center mt-5" style="width: 100%;">
    @foreach ($items as $products)
    <div class="mx-5 mb-3" style="width: 11rem;">
        <img src="{{asset($products->image)}}" class="card-img-top" alt="...">
        <div class="card-body text-center">
            <h5>{{$products->item_name}}</h5>
            <a class="fs-5" href={{route('details', [$products->id])}}>Detail</a>
        </div>
    </div>
    @endforeach
</div>
<div style="margin-left: 46%;">
    {{$items->links()}}
</div>
@endsection
