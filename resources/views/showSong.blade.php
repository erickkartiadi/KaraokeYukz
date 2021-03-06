@extends('layouts.master')

@section('subtitle', $song->title)

@section("sidebar")
<div class="col-2 bg-dark pt-4 pb-4 pl-0 h-100">
    <div class=" h-100 d-flex flex-column justify-content-between">
        <div>
            <a href="/" class="h1 text-light font-title pl-3">KaraokeYukz</a>
            <nav class="nav flex-column pt-2">
                <div class="overflow-hidden">
                    <span class="bullet d-inline mr-3 {{Request::is("/") ? 'current' : ""}}"></span>
                    <a href="/" class="nav-link">Songs</a>
                </div>
            </nav>
        </div>
        <div class="pl-3">
          <h2 class="text-white">{{$song->title}}</h2>
          <h5 class="text-white-50 font-weight-light">{{$song->artist_name}}</h5>
          <h6 class="text-white font-weight-light">{{$song->album_name}} 
            (@php
              $timestamp = strtotime($song->release_date);
              echo date("Y", $timestamp);
            @endphp)
            </h6>
        </div>
    </div>
</div>
@endsection
@section("content")
<p class="h2 lyric">
@php
   echo html_entity_decode(nl2br($song->lyric))
@endphp
</p>
@endsection
