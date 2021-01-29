@extends('layouts.main')



@section('content')
<div class="main-text">
    <ul>
        <li>ID: {{ $users->id }}, Nome: {{ $users->first_name }}, Cognome: {{ $users->last_name}}, Sesso: {{$users->gender}}, ProfilePic: <img src="{{$users->image}}" alt=""> 
    </ul>
</div>
@endsection