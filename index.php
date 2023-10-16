<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon.ico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/favicon.ico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicon.ico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon.ico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicon.ico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicon.ico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/favicon.ico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon.ico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon.ico/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon.ico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon.ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon.ico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.ico/favicon-16x16.png">
<link rel="manifest" href="images/favicon.ico/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/favicon.ico/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- CSS -->
    <link rel="stylesheet" href="css/index.css">
    <title>360 | CENTRO DE TENIS</title>
    <!-- SEO -->
    <meta name="Description" content="Academia de tenis. Clases particulares y grupales. Preparacion fisica y grupos de entrenamiento">
  </head>
  <body>
  <?php require "components/navbar.php"; ?>

 <?php require "components/carrousel.php"; ?>
 <!-- Cards -->
 <div class="card-group mt-4">
  <div class="card">
    <img class="card-img-top" src="images/individual1.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Clases Particulares</h5>
      <p class="card-text">Aprendé este hermoso deporte o mejorá tu juego en el menor tiempo posible.</p>
    </div>
    <div class="card-footer">
    <a class="btn btn-lg " id="ctaButton" href="particulares.php" role="button">Conocé más</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/grupal1.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Clases Grupales</h5>
      <p class="card-text">Sumate a un grupo de entrenamiento o vení a entrenar con amigos.</p>
    </div>
    <div class="card-footer">
    <a class="btn btn-lg " id="ctaButton" href="grupales.php" role="button">Conocé más</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/team.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Entrenamiento para Equipos</h5>
      <p class="card-text">Trae a tu equipo y preparalo para la jugar interclubes en el más alto nivel.</p>
    </div>
    <div class="card-footer">
    <a class="btn btn-lg " id="ctaButton" href="entrenamiento.php" role="button">Conocé más</a>
    </div>
  </div>
</div>
<div class="card-group mt-4">
  <div class="card">
    <img class="card-img-top" src="images/pf1.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Preparación Física</h5>
      <p class="card-text">Ponete en forma, jugá, competí y divertirte con nuestra entrenadora.</p>
    </div>
    <div class="card-footer">
    <a class="btn btn-lg " id="ctaButton" href="fisico.php" role="button">Conocé más</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/fisico.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Pretemporada</h5>
      <p class="card-text">Sentá las bases para jugar todo el año en gran nivel tanto técnico como físico.</p>
    </div>
    <div class="card-footer">
    <a class="btn btn-lg " id="ctaButton" href="pretemporada.php" role="button">Conocé más</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/torneos.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Torneos</h5>
      <p class="card-text">Competí sin importar el nivel que tengas. Tenemos torneos para todos.</p>
    </div>
    <!-- <a class="btn btn-lg " id="ctaButton" href="https://wa.me/+5491163009632" role="button">Contactanos</a> -->
    <div class="card-footer">
    <a class="btn btn-lg " id="ctaButton" href="https://wa.me/+5491163009632" role="button">Conocé más</a>

      <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
    </div>
  </div>
</div>
    <!-- /.card -->    
<!-- footer -->
 <?php require "components/footer.php"; ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->

  </body>
</html>