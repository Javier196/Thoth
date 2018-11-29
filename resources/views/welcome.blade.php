<!DOCTYPE html>
<html>
<title>Thoth</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2{font-family: "Raleway", sans-serif}
body, html {height: 100%}
p {line-height: 2}
.bgimg, .bgimg2 {
    min-height: 100%;
    background-position: center;
    background-size: cover;
    opacity:0.9;
}
.bgimg {background-image: url({{ asset('images/libros.jpg') }})}
.bgimg2 {background-image: url({{ asset('images/biblioteca.jpg') }})}
</style>
<body>

<!-- Header / Home-->
<header class="w3-display-container w3-wide bgimg w3-grayscale-min" id="home">
  <div class="w3-display-middle w3-text-white w3-center">
    <h1 class="w3-jumbo">Thoth</h1>
    <h2>El sistema para intercambiar libros</h2>
    <h2><b>UPIICSA IPN</b></h2>
  </div>
</header>

<!-- Navbar (sticky bottom) -->
<div class="w3-bottom w3-hide-small">
  <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min w3-hover-opacity-off">
    <a href="#home" style="width:25%" class="w3-bar-item w3-button">Inicio</a>
    <a href="#us" style="width:25%" class="w3-bar-item w3-button">¿Qué es?</a>
    <a href="#Inicio" style="width:25%" class="w3-bar-item w3-button">Costo</a>
    <a href="{{route('login.auth')}}" style="width:25%" class="w3-bar-item w3-button w3-hover-black">Iniciar Sesión</a>
  </div>
</div>

<!-- About / Jane And John -->
<div class="w3-container w3-padding-64 w3-pale w3-grayscale-min" id="us">
  <div class="w3-content">
    <h1 class="w3-center w3-text-grey"><b>¿De que se trata Thoth?</b></h1>
    <img class="w3-round w3-grayscale-min" src={{ asset('images/leer.jpg') }} style="width:100%;margin:32px 0">
    <p><i>
“Thot” ofrece el servicio de intercambio y préstamo de libros, ya que algunas personas no cuentan con el dinero suficiente para adquirir un libro original o un título que por alguna razón fue descontinuado. Por lo tanto, nuestra forma de satisfacer esa necesidad es por medio de un sitio web, en donde conozcan a más personas que quieran intercambiar, donar y prestar sus libros.
Por medio de este sitio web, se permitirá a los usuarios (alumnos y profesores de UPIICSA) crear una comunidad de intercambio de libros, con el fin de que logren obtenerlos de una manera más sencilla y utilizarlos para su desarrollo profesional o simplemente por el amor a la lectura.
</i>
    </p><br>
    <p class="w3-center"><a href="#Inicio" class="w3-button w3-black w3-round w3-padding-large w3-large">Mas Información</a></p>
  </div>
</div>

<!-- Background photo -->
<div class="w3-display-container bgimg2">
  <div class="w3-display-middle w3-text-white w3-center">

  </div>
</div>

<!-- Wedding information -->
<div class="w3-container w3-padding-64 w3-pale-red w3-grayscale-min w3-center" id="wedding">
  <div class="w3-content">
    <h1 class="w3-text-grey"><b>¿Tiene algún costo?</b></h1>
    <div class="w3-row">
      <div class="w3-half">
        <h2>Gratis</h2>
        <p>Busqueda de libros</p>
        <p>datos del propietario del libro</p>
      </div>
      <div class="w3-half">
        <h2>Premium ($40 Mxn. Mensual)</h2>
        <p>Atención Personalizada</p>
        <p>Te ayudamos en el proceso de intercambio</p>
      </div>
    </div>
  </div>
</div>

<!-- RSVP section -->
<div class="w3-container w3-padding-64 w3-pale-red w3-center w3-wide" id="rsvp">
  <h1>Inicia en un mundo de conocimiento</h1>
  <p class="w3-large">Registrate aqui abajo</p>
  <p class="w3-xlarge">
    <a href="{{route('login.auth')}}" class="w3-button w3-round w3-red w3-opacity w3-hover-opacity-off" style="padding:8px 60px" role="button">Registrarse</a>
  </p>
</div>



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>UPIICSA 2018</p>
</footer>
<div class="w3-hide-small" style="margin-bottom:32px"> </div>

</body>
</html>
