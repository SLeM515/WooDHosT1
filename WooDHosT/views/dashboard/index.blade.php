@extends('themes.WooDHosT::layouts.app')

@section('content')
<div class="server-grid">
    @foreach($servers as $server)
    <div class="card">
        <h3>{{ $server->name }}</h3>
        <p>Owner: {{ $server->owner }}</p>
        <p>Status: 
            @if($server->status == 'online')
                <img src="{{ asset('themes/WooDHosT/assets/images/online.png') }}" alt="Online">
            @elseif($server->status == 'offline')
                <img src="{{ asset('themes/WooDHosT/assets/images/offline.png') }}" alt="Offline">
            @else
                انتهاء الاشتراك
            @endif
        </p>
        <div class="progress-bar"><div class="progress-fill" data-percent="{{ $server->cpu }}"></div></div>
        <div class="progress-bar"><div class="progress-fill" data-percent="{{ $server->memory }}"></div></div>
        <div class="progress-bar"><div class="progress-fill" data-percent="{{ $server->disk }}"></div></div>
        <button class="btn">Manage</button>
    </div>
    @endforeach
</div>
@endsection
