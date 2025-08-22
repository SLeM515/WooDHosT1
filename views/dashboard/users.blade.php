@extends('themes/WooDHosT::layouts.app')

@section('content')
<h2>Users</h2>
@foreach($users as $user)
<div class="card">
    <p>{{ $user->name }}</p>
    <p>{{ $user->email }}</p>
</div>
@endforeach
@endsection
