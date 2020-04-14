<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La ruta del café</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <link rel="stylesheet" href="{{asset('css/css.css')}}">
</head>

<body>
    <header>
        <ul class="menu nav justify-content-around grey lighten-4 py-4">
            <li class="nav-item">
                <a class="nav-link active btn btn-success btn-lg" data-toggle="modal" data-target="#modalContacto"><i class="fas fa-id-card"></i> Contacto</a>
            </li>
            <li class="nav-item">
                <h2><i class="fas fa-coffee"></i> La Ruta del Café</h2>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-success btn-lg" data-toggle="modal" data-target="#modalAcerca"><i class="fas fa-info-circle"></i> Acerca de</a>
            </li>
        </ul>
        <ul class="menu1 nav justify-content-around grey lighten-4 py-4">
            <li class="nav-item">
                <a class="nav-link btn btn-dark btn-lg" href="{{route('dMatagalpa')}}"><i class="fas fa-map-marked-alt"></i> Matagalpa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-dark btn-lg" href="{{route('dEsteli')}}"><i class="fas fa-map-marked-alt"></i> Estelí</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-dark btn-lg" href="{{route('dJinotega')}}"><i class="fas fa-map-marked-alt"></i> Jinotega</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-dark btn-lg" href="{{route('dMadriz')}}"><i class="fas fa-map-marked-alt"></i> Madriz</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-dark btn-lg" href="{{route('dNueva')}}"><i class="fas fa-map-marked-alt"></i> Nueva Segovia</a>
            </li>
        </ul>
    </header>

    <div class="webrender">
        @yield('contenido')

        <!-- Modal -->
<div class="modal fade" id="modalContacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-id-card"></i> Contáctanos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>www.gruporgl.com</p>
        <p>celular: 88821090</p>
        <p>mail: gruporgl@support.com</p>
      </div>
      <div class="modal-footer text-center">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Entendido</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal2 -->
<div class="modal fade" id="modalAcerca" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-info-circle"></i> Acerca de</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>Grupo RLG 2020</p>
        <p>www.rlg.com</p>
        <p>Derechos reservados</p>
      </div>
      <div class="modal-footer text-center">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Entendido</button>
      </div>
    </div>
  </div>
</div>

    </div>

    <!-- FOOTER -->
    <footer>

    </footer>
    <script src="https://kit.fontawesome.com/f9b91e58ce.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
