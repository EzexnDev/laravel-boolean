@extends('layouts.main')

@section('content')
<div class="main-text">
    <ul>
        @foreach ($users as $user)
        <li>ID: {{ $user->id }}, Nome: {{ $user->first_name }}, Cognome: {{ $user->last_name}}
        <a href="/user/{{$user->id}}">Vedi Dettagli</a></li>
        @endforeach 
    </ul>
</div>

@endsection
