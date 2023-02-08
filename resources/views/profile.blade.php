@extends('layout.template')

@section('content')
<form action={{route('updateProfile')}} method="POST" enctype="multipart/form-data">
    @csrf
    <div class="d-flex justify-content-center" style="margin-top: 125px;">
        <div class="mx-5">
            <img src="{{asset($accountData->display_picture_link)}}" style="height: 250px; width: 200px;">
        </div>
        <div class="mx-5">
            <div class="mb-4">
                <div class="mb-3">
                    <input name="first_name" type="text" class="form-control" placeholder={{$accountData->first_name}} style="height: 60px;">
                    @error('first_name')
                    <div class="text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <div class="mb-3">
                    <input name="email" type="email" class="form-control" placeholder={{$accountData->email}} style="height: 60px;">
                    @error('email')
                    <div class="text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
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
            <div class="mb-4">
                <div class="mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Password" style="height: 60px;">
                    @error('password')
                    <div class="text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="mx-5" style="width: 20%;">
            <div class="mb-4">
                <div class="mb-3">
                    <input name="last_name" type="text" class="form-control" placeholder={{$accountData->last_name}} style="height: 60px;">
                    @error('last_name')
                    <div class="text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <div class="mb-3">
                    <div class="input-group mb-3" style="height: 60px;">
                        <label class="input-group-text" for="inputGroupSelect01">Role</label>
                        <select name="role_id" class="form-select" id="inputGroupSelect01">
                            <option selected>{{$accountData->role->role_name}}</option>
                        </select>
                        @error('role_id')
                        <div class="text-danger mt-2">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mb-4">
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
            <div class="mb-4">
                <div>
                    <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" style="height: 60px;">
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <input class="btn btn-warning fw-semibold mt-4" style="margin-right: 37%; width: 10%;" type="submit" value="Save">
    </div>
</form>
@endsection
