@extends('layout.template')

@section('content')
<form action={{ route('updateRole') }} method="POST">
    @csrf
    @method('PUT')
    <div class="mt-5" style="margin-left: 25%;">
        <h4 class="text-decoration-underline">{{$account->first_name}} {{$account->last_name}}</h4>
        <div class="mb-3">
            <div class="input-group mb-3 mt-5" style="height: 60px; width:25%;">
                <label class="input-group-text" for="inputGroupSelect01">Role</label>
                <select name="role_id" class="form-select" id="inputGroupSelect01">
                    @foreach ($role as $r)
                        <option value={{$r->id}}>{{$r->role_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <input type="hidden" name="account_id" value="{{$account->id}}">
        <input class="btn btn-warning fw-semibold px-5 mt-5 ms-5" type="submit" value="Save">
    </div>
</form>
@endsection
