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

<ul class="pagination justify-content-center">
    <li class="page-item">
    <a class="page-link" href="">
        <span>&laquo;</span>
        <span class="sr-only">Voltar</span>
    </a>
    </li>
    <li class="page-item active">
    <a class="page-link" href="">
        <span>1</span>
    </a>
    </li>
    <li class="page-item">
    <a class="page-link" href="">
        <span>2</span>
    </a>
    </li>
    <li class="page-item">
    <a class="page-link" href="">
        <span>3</span>
    </a>
    </li>
    <li class="page-item">
    <a class="page-link" href="">
        <span>&raquo;</span>
        <span class="sr-only">Avançar</span>
    </a>
    </a>
    </li>
</ul>

@endsection