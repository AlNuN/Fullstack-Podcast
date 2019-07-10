@extends('layout')

@section('title', '- Descubra')

@section('content')

@foreach($allPosts as $postData)  <!-- Load all posts from posts db -->

<article class="card mb-3">
    <section class="card-body">
    <img class="card-img-top mb-2" src=' {{ URL::asset("img/$postData->name.jpg") }} ' alt="">
    <h4 class="card-title">
    #{{ $postData->id }} {{ $postData->title }}
    </h4>
    <p class="card-text">
    {{ $postData->description }}
    </p>
    <a href='{{ URL::asset("/posts/$postData->name") }}'>
        Leia mais...
    </a>
    </section>
</article>

@endforeach

<div class="d-flex justify-content-center">
{{ $allPosts->links() }}
</div>

@endsection