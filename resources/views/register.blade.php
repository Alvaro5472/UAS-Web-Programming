@extends('layout.template')

@section('content')
<div class="mt-5" style="margin-left: 200px;">
    <h1 class="text-decoration-underline">Register</h1>
    <form action={{route('createAccount')}} method="POST" class="mt-4" enctype="multipart/form-data">
        @csrf
        <div class="row" style="width:100%;">
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input name="first_name" type="text" class="form-control" id="floatingInput" placeholder="First Name">
                    <label for="floatingInput">First Name</label>
                    @error('first_name')
                    <div class="text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 offset-md-2">
                <div class="form-floating mb-3">
                    <input name="last_name" type="text" class="form-control" id="floatingInput" placeholder="Last Name">
                    <label for="floatingInput">Last Name</label>
                    @error('last_name')
                    <div class="text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row" style="width:100%;">
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                    @error('email')
                    <div class="text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 offset-md-2">
                <div class="mb-3">
                    <div class="input-group mb-3" style="height: 60px;">
                        <label class="input-group-text" for="inputGroupSelect01">Role</label>
                        <select name="role_id" class="form-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            @foreach ($role as $r)
                                <option value={{$r->id}}>{{$r->role_name}}</option>
                            @endforeach
                        </select>
                        @error('role_id')
                        <div class="text-danger mt-2">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="width:100%;">
            <div class="col-md-4">
                <span style="padding-left: 10px; margin-right: 30px;">Gender</span>
                @foreach ($gender as $g)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender_id" id="inlineRadio1" value={{$g->id}}>
                    <label class="form-check-label" for="inlineRadio1">{{$g->gender_desc}}</label>
                </div>
                @endforeach
                @error('gender_id')
                    <div class="text-danger mt-2">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-md-4 offset-md-2">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile02">Display Picture</label>
                    <input name="display_picture_link" type="file" class="form-control" id="inputGroupFile02">
                    @error('display_picture_link')
                    <div class="text-danger mt-2">
                        {{$message}}
                    </div>
                @enderror
                </div>
            </div>
        </div>
        <div class="row" style="width:100%;">
            <div class="col-md-4">
                <div class="form-floating">
                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    @error('password')
                    <div class="text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 offset-md-2">
                <div class="form-floating">
                    <input name="password_confirmation" type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm Password">
                    <label for="floatingPasswordConfirm">Confirm Password</label>
                </div>
            </div>
        </div>
        <div class="mt-5 d-flex" style="width: 17.5%; margin-left: 490px;">
            <input class="btn btn-warning px-5" type="submit" value="Submit">
        </div>
        <div class="mt-1" style="margin-left: 400px;">
            <a href={{route('login')}}>Already have an account? Click here to log in</a>
        </div>
    </form>
</div>
@endsection
