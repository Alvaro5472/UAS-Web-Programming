@extends('layout.template')

@section('content')
<div class="text-center mx-auto mt-1" style="border:10px solid rgb(250,220,84); padding-top: 165px; border-radius: 50%; width: 550px; height: 550px;">
    <p style="font-size: 40px;">{{__('msg.Success!')}}</p>
    <p class="fs-4">{{__('msg.We will contact you 1x24 hours.')}}</p>
    <a class="fs-4" href={{route('home')}}>{{__("msg.Click here to 'Home'")}}</a>
</div>
@endsection
