@extends('layouts.app')

@section('content')

<h1> Podatki o uporabnikih </h1>
<br />

<table border="1">
    <tr>
        <td>Id</td>
        <td>Ime</td>
        <td>email</td>
        <td>Vloga</td>
        <td>Ustvarjen</td>
        <td>Aktiven</td>
    </tr>

@if($users)

@foreach($users as $user)

    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role->name}}</td>
        <td>{{$user->created_at->diffforHumans()}}</td>
        <td>
            @if(!empty($user->is_active))
                @if($user->is_active)
                Aktiven
                @else 
                Ni Aktiven
                @endif
            @else 
            Ni podatka
            @endif
        </td>
    </tr>

@endforeach

@endif

</table>


@endsection