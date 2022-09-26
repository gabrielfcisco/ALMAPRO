@extends('layouts.defaut')

@section('title', 'User title')

@section('content')
<h1>
    User
</h1>

{{$user->name}}

<br>
{{date('d/m/y')}}

<br>
@if($user->name === 'Drake Keebler')
    {{$user->name}}
 Verdadeiro
@endif

@endsection