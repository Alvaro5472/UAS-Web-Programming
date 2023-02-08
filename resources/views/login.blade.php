@extends('layout.template')

@section('content')
<div class="mt-5" style="margin-left: 200px; width: 35%;">
    <h1 class="text-decoration-underline">Login</h1>
    <form action={{route('logUser')}} method="POST" class="mt-5">
        @csrf
        <div class="form-floating mb-3">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
            @error('email')
            <div class="text-danger mt-2">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            @error('password')
            <div class="text-danger mt-2">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mt-5 d-flex mx-auto" style="width: 17.5%;">
            <input class="btn btn-warning px-5" type="submit" value="Submit">
        </div>
        <div class="mt-1 text-center ms-5">
            <a href={{route('register')}}>Don't have an account? Click here to sign up</a>
        </div>
    </form>
</div>
@endsection
