---
title: Clients
---
@extends("_layouts/master")

@section("body")
    <h1>Clients</h1>

    @foreach($clients as $client)
        <div class="post">
            <a href="{{ $client->getUrl() }}">{{ $client->name }}</a>
        </div>
    @endforeach

@endsection
