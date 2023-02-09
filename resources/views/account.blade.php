@extends('layout.template')

@section('content')
<table class="table mx-auto mt-5" style="width: 50%;">
    <thead>
        <tr class="text-center">
            <th scope="col">{{__('msg.Account')}}</th>
            <th scope="col">{{__('msg.Update')}}</th>
            <th scope="col">{{__('msg.Delete')}}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($accounts as $acc)
        <tr class="align-middle text-center">
            <td>{{$acc->first_name}} {{$acc->last_name}} - {{$acc->role->role_name}}</td>
            <td><a class="btn btn-warning fw-semibold" href={{ route('updateRolePage', [$acc->id]) }}>{{__('msg.Update Role')}}</a></td>
            <form action={{route('deleteAcc', [$acc->id])}} method="POST">
                @csrf
                @method('delete')
                <td><input class="btn btn-warning fw-semibold mx-5" style="height: 50px; width: 100px;" type="submit" value="Delete"></td>
            </form>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
