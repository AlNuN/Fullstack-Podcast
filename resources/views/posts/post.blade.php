@extends('layout')

@section('title')
- #{{ $postData->id }} {!! $postData->title !!}
@endsection

@section('content')

<article class="card mb-3">
    <section class="card-body">
    <img class="card-img-top mb-2" src=' {{ URL::asset("img/$postData->name.jpg") }} ' alt="">
    <h4 class="card-title">
    #{{ $postData->id }} {{ $postData->title }}
    </h4>
    <podcast-player id="player" src='{{ URL::asset("mp3/$postData->name.mp3") }}'></podcast-player>

    <a style="margin-bottom=1.5em;" href='{{ URL::asset("zip/$postData->name.zip") }}'>Download.zip</a>

    <p class="card-text">
    {{ $postData->content }}
    </p>
    </section>
</article>

@endsection
