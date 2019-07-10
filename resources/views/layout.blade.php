<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous">

  <!-- Estilo customizado -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">

  <!-- Podcast Player -->
  <!-- This version of webcomponents don't conflict with jquery -->
  <script src=https://cdnjs.cloudflare.com/ajax/libs/webcomponentsjs/0.7.24/webcomponents-lite.min.js></script>
  <link rel="import" href="{{ URL::asset('podcast-player.html') }}"/>

  <title>FelizCast @yield('title')</title>
  <link rel="icon" href="{{ URL::asset('img/logo-meu.png') }}">
</head>

<body>

  <div class="container">

    <header class="row bg-warning">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-md navbar-dark">

          <a href="/" class="navbar-brand d-flex align-items-center">
            <img class="d-none d-sm-block" src="{{ URL::asset('img/logo-meu.png') }}" width="80" alt="FelizCast">
            <span id="logo1">Feliz</span><span id="logo2">Cast</span>
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#navigation">
            <i class="fas fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navigation" data-toggle="collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="/">Início</a></li>
              <li class="nav-item"><a class="nav-link" href="/sobre">Sobre</a></li>
              <li class="nav-item"><a class="nav-link" href="/contato">Contato</a></li>
            </ul>
          </div>

        </nav>
      </div>
    </header>


    <section id="busca" class="row mb-2 mt-2">
      <div class="col-md-12">

        <div class="input-group">
          <input class="form-control" type="text" placeholder="Pesquisar">
          <div class="input-group-append">
            <button type="button" class="btn btn-warning">Pesquisar</button>
          </div>
        </div>

      </div>
    </section>

    <section class="row">
        <main class='col-md-8'>@yield('content')</main>

      <aside class="col-md-3 offset-md-1 d-none d-md-block" id="coluna">

        <article class="card mb-3">
          <header class="card-header">
            <h5>Assine:</h5>
          </header>
          <section class="card-body">
            <nav class="navbar">
              <ul class="navbar-nav">

                <li class="nav-item">
                  <a class="nav-link" href="">
                    <i class="fas fa-rss"></i>
                    <span>Feed RSS</span>
                  </a>

                <li class="nav-item">
                  <a class="nav-link" href="">
                    <i class="fab fa-spotify"></i>
                    <span>Spotify</span>
                  </a>

                </li>
              </ul>
            </nav>
          </section>
        </article><!-- /card -->

        <article class="card mb-3">
          <header class="card-header">
            <h5>Siga-nos:</h5>
          </header>
          <section class="card-body">
            <nav class="navbar">
              <ul class="navbar-nav">

                <li class="nav-item">
                  <a class="nav-link" href="">
                    <i class="fab fa-facebook-square"></i>
                    <span>Facebook</span>
                  </a>

                <li class="nav-item">
                  <a class="nav-link" href="">
                    <i class="fab fa-twitter"></i>
                    <span>Twitter</span>
                  </a>

                <li class="nav-item">
                  <a class="nav-link" href="">
                    <i class="fab fa-youtube"></i>
                    <span>YouTube</span>
                  </a>

                </li>
              </ul>
            </nav>
          </section>
        </article><!--/card-->

        <article class="card mb-3">
          <header class="card-header">
            <h5 class="card-title">Agenda:</h5>
          </header>
          <section class="card-body">
            <p class="card-text">
              <i class="fas fa-calendar"></i>
              Podcast: Toda segunda quarta-feira 
              do mês.
            </p>
            <p class="card-text">
              <i class="fas fa-calendar"></i>
              YouTube: Toda última quarta-feira 
              do mês.
            </p>
          </section>
        </article><!--/card-->

      </aside><!-- /col-->

    </section><!-- row -->
  </div><!-- /container -->


  <footer class="container-fluid">
      <div class="row align-items-center">

        <div class="col-md-3 offset-md-2 d-none d-md-block mt-4">
          <div class="navbar navbar-expand-md">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/">Início</a></li>
                <li class="nav-item"><a class="nav-link" href="/sobre">Sobre</a></li>
                <li class="nav-item"><a class="nav-link" href="/contato">Contato</a></li>
              </ul>
          </div>
        </div>

        <div class="col-md-5 offset-md-2 mt-4">
          <span>&copy; 2018 FelizCast - Todos os direitos reservados</span>
        </div>

      </div><!-- row -->
  </footer>

  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>

