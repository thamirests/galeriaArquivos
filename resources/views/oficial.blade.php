<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Galeria de aplicativos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  </head>
  <body>
    <main>
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo center">Galeria</a>
      </div>
    </nav>
    @yield('conteudo')
    </main>
    @yield('footer')
    <footer class="page-footer">
      <div class="container">

      </div>
    </footer>


  </body>
</html>
