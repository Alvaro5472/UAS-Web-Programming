@extends('layout.template')

@section('content')
<div class="text-center mx-auto mt-1" style="border:10px solid rgb(250,220,84); padding-top: 210px; border-radius: 50%; width: 550px; height: 550px;">
    <p style="font-size: 40px;">Saved!</p>
    <a class="fs-4" href={{route('home')}}>Click here to 'Home'</a>
</div>
@endsection
