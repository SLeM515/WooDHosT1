@extends('themes.WooDHosT::layouts.app')

@section('content')
<h2>Manage Server: {{ $server->name }}</h2>
<p>Owner: {{ $server->owner }}</p>
<p>Status: {{ $server->status }}</p>
<button class="btn" onclick="window.history.back()">Back</button>
@endsection
