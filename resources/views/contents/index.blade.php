@extends('layout')

@section('title', '- Descubra')

@section('content')

<article class="card mb-3">
    <section class="card-body">
    <img class="card-img-top mb-2" src="./img/diamantina.jpg" alt="">
    <h4 class="card-title">
    Destinos de Minas #001 - Diamantina
    </h4>
    <p class="card-text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, perferendis
        repudiandae cum, eius repellat architecto et delectus suscipit sunt porro
        necessitatibus minus aspernatur impedit vero in debitis quisquam odio a.
    </p>
    <a href="#">
        Leia mais...
    </a>
    </section>
</article><!-- /card-->

<article class="card mb-3">
    <section class="card-body">
    <img class="card-img-top mb-2" src="img/Neon-Genesis-Evangelion.jpg" alt="">
    <h4 class="card-title">
    #002 Neon Genesis Evangelion - Ninguém me entende!
    </h4>
    <p class="card-text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, perferendis
        repudiandae cum, eius repellat architecto et delectus suscipit sunt porro
        necessitatibus minus aspernatur impedit vero in debitis quisquam odio a.
    </p>
    <a href="#">
        Leia mais...
    </a>
    </section>
</article><!-- /card-->

<article class="card mb-3">
    <section class="card-body">
    <img class="card-img-top mb-2" src="img/bandersnatch1.png" alt="">
    <h4 class="card-title">
    #001 Bandersnatch - Quem está no controle?
    </h4>
    <p class="card-text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, perferendis
        repudiandae cum, eius repellat architecto et delectus suscipit sunt porro
        necessitatibus minus aspernatur impedit vero in debitis quisquam odio a.
    </p>
    <a href="/posts/bandersnatch_001">
        Leia mais...
    </a>
    </section>
</article><!-- /card-->

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