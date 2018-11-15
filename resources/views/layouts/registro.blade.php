
<?php
use App\Localidad;
?>

<html>
<head>
    <link rel="shortcut icon" href="../img/ico.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script  src="https://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../css/component.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script  src="https://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Wou!</title>
</head>

<body style="background: #dce8e6;">

<div class="row" style="margin:0;width: 100%;background: white; min-height: 80px;margin:0px;box-shadow: 4px 7px 14px #888888;position:fixed; z-index: 100;">
    <div class="col-md-6">
        <a href="../index.php"><img src="img/logo.png" style="margin-top: 20px" height="52" width="150" /></a>
    </div>
    <div class="col-md-3" style="margin-top: 40px;font-family: 'Roboto', sans-serif ">

    </div>


  <div class="col-md-3" style="margin-top: 20px;font-family: 'Roboto', sans-serif;">
      <div class="container" style="width: 100%;">
          <div class="row vdivide" style="float:right;" >
                  <a href="/logins" style="color:white;"><img height=45 src="../img/ingreso.png" /> </a>
          </div>
      </div>
  </div>
</div>
</div><br><br><br><br><br><br><br>

<div class="container-fluid">
     <div class="row">
       <div class="col-md-3"></div>
       <div class="col-md-3">
            <div class="card text-center" style="width: 100%;">
            <img class="card-img-top" src="../img/prof.jpg" alt="Card image cap">
                <div class="card-body">
                 <h5 class="card-title text-center">Soy <strong>profesional ! </strong></h5>
                <a class="btn btn-warning text-center" data-toggle="modal" data-target="#registroProfesional">Registrarme</a>
        </div>
    </div>
</div>
<div class="col-md-3">
            <div class="card text-center" style="width: 100%;">
                <img class="card-img-top" src="../img/userl.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title text-center">Soy un <strong>usuario !</strong> </h5>
                <a class="btn btn-primary text-center" style="color:white" data-toggle="modal" data-target="#registroUsuario">Registrarme</a>
            </div>
        </div>
</div>
</div>
</div>



     <br><br>

<!-- ###################################    MODAL ########################### -->

<div class="modal fade" id="registroUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title text-center" id="exampleModalLabel">Registro para <span style="color:red">usuarios</span> en Wouu ! </h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="container">
<form id="uploadForm" action="/registrar" method="POST" enctype="multipart/form-data" >
  <input type="hidden" name="type" value="usuario">
    <div class="container">
        <div class="text-center">
            <img id="imgperfil" height="85" width="120" src="../img/perfil.jpg" />
            <input id="file" style="margin-top: 10px;" name="file" type="file" class="inputfile" />
            <label for="file"><img height="50" src="../img/addimg.png"></label></div><br>
            <input type="hidden" value="{{csrf_token()}}" name="_token" >
             <input type="text" class="form-control" name="name"  placeholder="Nombre" required /><br>
              <input type="text" class="form-control input-lg form-control" name="lastName" placeholder="apellido"  required /><br>
            <div class="input-group mb-4">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">E-mail</span>
            </div>
              <input type="email" class="form-control input-lg form-control" id="emailUser" name="email" placeholder="email" required /><div id="resultEmail"></div>
            </div>
            <div class="input-group mb-4">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Contraseña</span>
            </div>
            <input type="password" name="password" class="form-control" placeholder="Contraseña con la que ingresará" aria-label="Contraseña" aria-describedby="basic-addon1" required />
            </div>
           <input class="form-control" type="date" id="end" name="date"
               value="Ingrese fecha de nacimiento" placeholder="Fecha de nacimiento"
               min="1960-01-01" max="2018-12-31" required /><br>

           <select name="sex" class="form-control" required>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
        </select><br>
        <input type="number" class="form-control input-lg form-control" name="dni" placeholder="dni" required />    <br>
        <input type="number" class="form-control input-lg form-control" name="phone" placeholder="telefono" required />  <br>
       <!-- Prepended text-->
       <select name="province" id="job_posting_search_location" name="job_posting_search[location]" class="form-control input-lg form-control" onchange="myFunction()" required >
       <option value="Buenos Aires">Buenos Aires</option>
       </select><br>
        <select id="job_posting_search_location" class="form-control input-lg form-control" name="city"><option value="Mar del Plata">Mar del Plata</option></select><br>
       <select id="job_posting_search_location" class="form-control input-lg form-control" name="zone"><option value="9 de julio">9 de julio</option><option value="Aeroparque">Aeroparque</option><option value="Alfar">Alfar</option><option value="Bernardino Rivadavia">Bernardino Rivadavia</option><option value="Belgrano">Belgrano</option><option value="Bosque Alegre">Bosque Alegre</option><option value="Bosque Peralta Ramos">Bosque Peralta Ramos</option><option value="Centenario">Centenario</option><option value="Centro">Centro</option><option value="Cerrito">Cerrito</option><option value="Cerrito Sur">Cerrito Sur</option><option value="Colina Alegre">Colina Alegre</option><option value="Constitución">Constitución</option><option value="Don Bosco">Don Bosco</option><option value="El Martillo">El Martillo</option><option value="Lomas del Golf">Lomas del Golf</option><option value="Las Americas">Las Americas</option><option value="Las Avenidas">Las Avenidas</option><option value="Colinas de Peralta Ramos">Colinas de Peralta Ramos</option><option value="La Perla">La Perla</option><option value="Santa Cruz">Santa Cruz</option><option value="Libertad">Libertad</option><option value="Jardín Stella Maris">Jardín Stella Maris</option></select><br>
       <input type="hidden" value="usuario" name="type" />
        <input id="btn-submit" type="submit" name="register" class="btn btn-info text-center" value="Suscribirse"/>

    </div>
    </form>
</div>

</div>
</div>
</div>
</div>


<!-- ###################################    MODAL ########################### -->

<div class="modal fade" id="registroProfesional" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title text-center" id="exampleModalLabel">Registro para <span style="color:red">profesionales</span> en Wouu ! </h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="container">
<form id="uploadForm2" action="/registrar" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="type" value="profesional">
    <div class="container">
        <div class="text-center">
            <img id="imgperfil2" height="85" width="120" src="../img/perfil.jpg" /> <br>
            <input id="file2" style="margin-top: 10px;" name="file2" type="file" class="inputfile" />
            <label for="file2"><img height="60" src="../img/addimg.png"></label>
            <input type="hidden" value="{{csrf_token()}}" name="_token" >
        </div>
        <br>
             <input type="text" class="form-control" name="name" placeholder="Nombre" required /><br>
              <input type="text" class="form-control input-lg form-control" name="lastName" placeholder="apellido"  required /><br>
            <div class="input-group mb-4">
            <div class="input-group-prepend">
            <img height="35"  data-toggle="popover" title="Éste nombre de usuario se va a utilizar para ingresar al sitio y para ubicarlo en caso de que necesite algún servicio."  src="../img/pregunta.png"/><span class="input-group-text" id="basic-addon1">Email</span>
            </div>
             <input type="text" class="form-control" id="prof" name="email" placeholder="Ingresá tu Email" aria-label="Username" aria-describedby="basic-addon1" required />
             <div id="result"></div>
            </div>
            <div class="input-group mb-4">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Contraseña</span>
            </div>
            <input type="password" name="password" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" required />
            </div>
           <input class="form-control" type="date" id="end" name="date" value="Ingrese fecha de nacimiento" placeholder="Fecha de nacimiento" min="1960-01-01" max="2018-12-31" required /><br>
        <input type="number" class="form-control input-lg form-control" name="phone" placeholder="telefono" required />  <br>
       <!-- Prepended text-->

<!-- PROVINCIASSSSSSSSSSS -->

<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("ciudades").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("ciudades").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","../province/provinces.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>


<select id="Province" name="users" class="form-control input-lg" onchange="showUser(this.value)" required>
<option value="">Provincia</option>
<option value="Buenos Aires">Buenos Aires</option>
<option value="Buenos Aires-GBA">Buenos Aires-GBA</option>
<option value="Capital Federal">Capital Federal</option>
<option value="Catamarca">Catamarca</option>
<option value="Chaco">Chaco</option>
<option value="Chubut">Chubut</option>
<option value="Corrientes">Corrientes</option>
<option value="Cordoba">Córdoba</option>
<option value="Entre Rios">Entre Ríos</option>
<option value="Formosa">Formosa</option>
<option value="Jujuy">Jujuy</option>
<option value="La Pampa">La Pampa</option>
<option value="La Rioja">La Rioja</option>
<option value="Mendoza">Mendoza</option>
<option value="Misiones">Misiones</option>
<option value="Neuquen">Neuquen</option>
<option value="Rio Negro">Río Negro</option>
<option value="Salta">Salta</option>
<option value="San Juan">San Juan</option>
<option value="San Luis">San Luis</option>
<option value="Santa Cruz">Santa Cruz</option>
<option value="Santa Fe">Santa Fe</option>
<option value="Santiago del Estero">Santiago del Estero</option>
<option value="Tierra del Fuego">Tierra del Fuego</option>
<option value="Tucuman">Tucumán</option>
</select>
<br>
<div id="ciudades">
<select name="ciudad" class="form-control input-lg form-control">
  <option value="">Seleccionar Provincia Primero..</option>
</select>
</div>
       <br>
       <select id="categoriaPrincipal" name="category" class="form-control input-lg" onchange="myFunction()" required>
         <option value="">A qué categoría de Profesionales perteneces?</option><option value="Asesoramiento Contable y Legal">Asesoramiento Contable y Legal</option><option value="Belleza y Cuidado Personal">Belleza y Cuidado Personal</option><option value="Comunicación y Diseño">Comunicación y Diseño</option><option value="Cursos y Clases">Cursos y Clases</option><option value="Fiestas y Eventos">Fiestas y Eventos</option><option value="Fotografía, Música y Cine">Fotografía, Música y Cine</option><option value="Hogar y Construcción">Hogar y Construcción</option><option value="Imprenta">Imprenta</option><option value="Mantenimiento de Vehículos">Mantenimiento de Vehículos</option><option value="Medicina y Salud">Medicina y Salud</option><option value="Ropa y Moda">Ropa y Moda</option><option value="Servicio para Mascotas">Servicio para Mascotas</option><option value="Servicio para Oficina">Servicio para Oficina</option><option value="Tecnología">Tecnología</option><option value="Transporte">Transporte</option><option value="Viajes y Turismo">Viajes y Turismo</option><option value="Otros Servicios">Otros Servicios</option></select>

       <!-- SEGUNDO FILTRO -->
       <br>
       <div id="Asesoramiento_Contable" style="display:none;">
       <select id="Asesoramiento_Contable_y_Legal" name="Asesoramiento" class="form-control input-lg form-control" >
         <option value="">¿A qué rama perteneces? </option><option value="Abogados y Estudios Jurídicos">Abogados y Estudios Jurídicos</option><option value="Contadores y Estudios">Contadores y Estudios</option><option value="Gestores">Gestores</option><option value="Martilleros Públicos">Martilleros Públicos</option><option value="Productores de Seguros">Productores de Seguros</option><option value="Despachantes de Aduana">Despachantes de Aduana</option><option value="Tasadores">Tasadores</option></select>
       </div>

       <div id="Belleza_y_Cuidado" style="display:none;">
       <select id="Belleza_y_Cuidado_Personal" name="Belleza" class="form-control input-lg form-control" >
       <option value="">Seleccionar...</option><option value="Maquilladora y Peinadora">Maquilladoras y Peinadoras</option><option value="Masajista">Masajes y Tratamientos</option><option value="Cosmetólogo">Cosmetología</option><option value="Peluquero">Peluquería</option><option value="Tatuajes y Piercings">Tatuajes y Piercings</option><option value="Estética">Estética</option></select>
       </div>

       <div id="Imprenta" style="display:none;">
       <select id="Imprenta_Profesional" name="Impreciones" class="form-control input-lg form-control">
       <option value="">Seleccionar...</option><option value="Imprenta de Talonarios de AFIP">Talonarios de AFIP</option><option value="Imprenta de Tarjetas Personales">Tarjetas Personales</option><option value="Imprenta de Tarjetas de 15 años">15 años </option><option value="Imprenta de Tarjetas de Casamientos ">Casamientos</option><option value="Imprenta de Divorcios">Divorcios</option><option value="Imprenta de Modulos Universitarios">Imprenta de Modulos Universitarios </option></select>
       </div>

       <div id="Comunicacion" style="display:none;">
       <select id="Comunicacion_y_Diseño" name="Comunicacion_diseño" class="form-control input-lg form-control" >
         <option value="">Seleccionar...</option><option value="Diseñador Gráfico">Diseñador Gráfico</option><option value="Marketing y Publicidad">Marketing y Publicidad</option><option value="Traductor de Inglés">Traductor de Inglés</option><option value="Traductor de Francés">Traductor de Francés</option><option value="Traductor de Portugués">Traductor de Portugués</option><option value="Locutor">Locutor</option></select>
       </div>

       <div id="Cursos" style="display:none;">
       <select id="Cursos_y_Clases" name="Cursos_Clases" class="form-control input-lg" >
         <option value="">Seleccionar...</option><option value="Computación e Informática">Computación e Informática</option><option value="Apoyo Escolar Primario">Apoyo Escolar Primario</option><option value="Apoyo Escolar Secundario">Apoyo Escolar Secundario</option><option value="Instrumentos Musicales">Instrumentos Musicales</option><option value="Clases de Manejo">Clases de Manejo</option><option value="Curso de Maquillaje">Curso de Maquillaje</option><option value="Fotografía">Fotografía</option></select>
       </div>

       <div id="Fiestas" style="display:none;">
       <select id="Fiestas_y_Eventos" name="Fiestas_Eventos" class="form-control input-lg form-control" >
       <option value="">Seleccionar...</option><option value="Servicio Audiovisual">Servicio Audiovisual</option><option value="Animador de Fiestas Infantiles">Animador de Fiestas Infantiles</option><option value="Animador de Fiestas de 15">Animador de Fiestas de 15</option><option value="Animador de Fiestas de Casamiento">Animador de Fiestas de Casamiento</option><option value="Bebidas">Bebidas</option><option value="Catering">Catering</option><option value="Alquiler de Equipos">Alquiler de Equipos</option></select>
       </div>

       <div id="Fotografia" style="display:none;">
       <select id="Fotografia_Musica_y_Cine" name="Fotografia_Musica" class="form-control input-lg form-control" >
       <option value="">Seleccionar...</option><option value="Fotografía">Fotografía</option><option value="Música">Música</option><option value="Shotting">Shotting</option><option value="Cine y Televisión">Cine y Televisión</option></select>
       </div>

       <div id="Hogar" style="display:none;">
       <select id="Hogar_y_Construccion" name="hogar_construccion" class="form-control input-lg form-control" >
         <option value="">Seleccionar...</option> <option value="Cabañas Construcción">Cabañas / Construccion</option><option value="Cabañas Mantenimiento">Cabañas / Mantenimiento</option> <option value="Mantenimiento del Hogar">Mantenimiento del Hogar</option><option value="Obras y Construcción">Obras y Construcción</option><option value="Instalación y Servicio Técnico">Instalación y Servicio Técnico</option></select>
       </div>

       <div id="Vehiculos" style="display:none;">
       <select id="Mantenimiento_de_Vehiculos" name="Mantenimiento_vehiculos" class="form-control input-lg form-control" >
       <option value="">Seleccionar...</option><option value="Electrónica de Vehículos">Electrónica de Vehículos</option><option value="Electricidad de Vehiculos">Electricidad de Vehículos</option><option value="Performance de Vehículos">Permormance de Vehículos</option><option value="Gomero">Gomero</option><option value="Mecánico de autos">Mecánico de autos</option><option value="Mecánico de motos">Mecánico de motos</option><option value="Taller de Autos">Tallere de Autos</option><option value="Taller de Chapa y Pintura">Taller de Chapa y Pintura</option></select>
       </div>

       <div id="Medicina" style="display:none;">
       <select id="Medicina_y_Salud" name="Medicina_salud" class="form-control input-lg form-control" >
       <option value="">Seleccionar...</option><option value="Psicólogo">Psicólogo</option><option value="Psicopedagoga">Psicopedagoga</option><option value="Odontólogo">Odontólogo</option><option value="Enfermero">Enfermero</option><option value="Acompañante Terapéutico">Acompañante Terapéutico</option><option value="Geriátrico">Geriátrico</option><option value="Podólogo">Podólogo</option><option value="Cirujana Plástica">Cirugía Plástica</option></select>
       </div>

       <div id="Ropa" style="display:none;">
       <select id="Ropa_y_Moda" name="Ropa_Moda" class="form-control input-lg form-control" >
       <option value="">Seleccionar...</option><option value="Fabricante de ropa para Hospitales">Fabricante de Ropa para Hospitales</option><option value"Fabricante de ropa para Gastronomía">Fabricante de Ropa para Gastronomía</option><option value="Fabricante de ropa para Hospitales">Fabricante de Ropa para Hospitales</option><option value="Fabricante de ropa para Clínicas">Fabricante de ropa para Clínicas</option><option value="Fabricante de ropa para Industrias">Fabricante de Ropa para Industrias</option><option value="Diseñadora de Moda">Diseñadora de Moda en Gral.</option><option value="Corte y Confección">Corte y Confección</option></select>
       </div>

       <div id="Mascotas" style="display:none;">
       <select id="Servicio_para_Mascotas" name="Servicio_mascotas" class="form-control input-lg form-control" >
       <option value="">Seleccionar...</option><option value="Adriestramiento Canino">Adriestramiento Canino</option><option value="Clínica Veterinaria">Clínicas Veterinarias</option><option value="Hospedaje para Mascotas">Hospedajes</option><option value="Internación para Mascotas">Internación de Mascotas</option><option value="Paseador de Perros">Paseador de Perros</option><option value="Peluquería Canina">Peluquería Canina</option></select>
       </div>

       <div id="Oficinas" style="display:none;">
       <select id="Servicio_para_Oficinas" name="Servicio_Oficina" class="form-control input-lg form-control" >
       <option value="">Seleccionar...</option><option value="Limpieza Profesional">Limpieza Profesional</option><option value="Electricista de Oficina">Electricista de Oficina</option><option value="Fumigación Oficina">Fumigador de Oficina</option><option value="Decoración de oficinas">Decorador de Oficina</option><option value="Servicio de Aire Acondicionado">Instalación y Reparación de Aire Acondicionado</option><option value="Pintor de Oficina">Pintores de Oficina</option><option value="Servicio de telefónia">Telefónia para Oficina</option><option value="Servicio de software">Instalación de Software</option><option value="Servicio de Cámaras de Seguridad">Instalación de Cámaras de Seguridad</option></select>
       </div>

       <div id="Tecno" style="display:none;">
       <select id="Tecnologia" name="Tecnología_Pro" class="form-control input-lg form-control" >
       <option value="">Seleccionar...</option><option value="Desarrollador de Software">Programador</option><option value="Audio y Video">Audio y Video</option><option value="Reparador de Pc">Reparador de Pc</option><option value="Alarmas y Cámaras de Seguridad">Alarmas y Cámaras de Seguridad</option><option value="Reparador de Celulares y Telefonía">Reparador de Celulares y Telefonía</option><option value="Service de Consolas">Servis de Consolas</option><option value="Reparación de Relojes">Reparador de Relojes</option><option value="Domótica Hogar">Domótica Hoga</option><option value="Domótica Oficina">Domótica Oficina</option><option value="Domótica Industrias">Domótica Industrias</option></select>
       </div>

       <div id="Trans" style="display:none;">
       <select id="Transporte" name="Transporte_com" class="form-control input-lg form-control" >
       <option value="">Seleccionar...</option><option value="Chofer Profesional">Chofer Profesional</option><option value="Fletero">Fletes</option><option value="Mini-fletes">Mini-Fletes</option><option value="Mudanzas">Mudanzas</option><option value="Transporte Escolar">Transporte Escolar</option></select>
       </div>

       <div id="Viajes" style="display:none;">
       <select id="viajes_y_turismo" name="Viajes_turismo" class="form-control input-lg form-control" >
       <option value="">Seleccionar...</option><option value="Apart Hotel">Apart Hoteles</option><option value="Alquiler de Autos/Motos">Alquiler de Autos/Motos</option><option value="Convenciones de Empresas">Convenciones de Empresas</option><option value="Cuatriciclos">Cuatriciclos</option><option value="Departamentos">Departamentos</option><option value="Viajes de Egresados">Viajes de Egresados</option><option value="Pasajes de Omnibus">Pasajes de Omnibus</option><option value="Pasajes de Aviones">Pasajes de Aviones</option><option value="Pasajes de Lanchas">Pasajes Lanchas</option><option value="Fletero">Fletes</option><option value="Jubilados">Jubilados</option><option value="Inmobiliaria">Inmobiliarias</option><option value="Mini-fletes">Mini-Fletes</option><option value="Mudanzas">Mudanzas</option><option value="Transporte Escolar">Transporte Escolar</option><option value="Traslado al Aeropuerto">Traslado al Aeropuerto</option><option value="Turismo Aventura">Turismo Aventura</option><option value="Turismo Nacional">Turismo Nacional</option><option value="Turismo Local">Turismo Local</option><option value="Turismo Internacional">Turismo Internacional</option></select>
     </div><br>


       <!-- TERCER FILTRO SELECCIONABLE OPCIONABLE -->

       <div id="Tasador" style="display:none;">
       <select id="Tasador_es" name="specialty" class="form-control input-lg form-control" >
         <option value="">Seleccionar...</option><option value="Tasador de Inmobiliaria">Inmobiliaria</option><option value="Tasador Judicial">Judiciales</option><option value="Tasador de Joyas y Arte">Joyas y Arte(Cuadros, Esculturas, etc)</option></select>
       </div>

       <div id="Seguros" style="display:none;">
       <select id="Productoras_Seguros" name="specialty" class="form-control input-lg form-control" >
         <option value="">Seleccionar...</option><option value="Productor de Seguros de Automotor">Seguros para Automotor</option><option value="Productor de Seguros de Vivienda">Seguros para Vivienda</option><option value="Productor de Seguros Comerciales">Seguros para Comercios</option><option value="Productor de Seguros de Campos">Seguros para Campos</option><option value="Productor de Seguros de Caución">Seguros de Caución</option><option value="Productor de Seguros de Vida">Seguros de Vida</option></select>
       </div>

       <div id="Gestor" style="display:none;">
       <select name="Gestores" id="Gestoress" class="form-control input-lg form-control" >
         <option value="">Seleccionar...</option><option value="Gestor Automotor">Gestor Automotor</option><option value="Gestor Judicial">Gestor Judicial</option><option value="Gestor Inmobiliario">Gestor Inmobiliario</option></select>
       </div>

       <div id="Martilleros" style="display:none;">
       <select name="Martilleros" id="MartillerosP" class="form-control input-lg form-control" >
       <option value="">Seleccionar...</option><option value="Martillero de Contrato de Alquiler">Contrato de Alquiler </option><option value="Martillero de Vivienda / Comercial">Vivienda / Comercial</option><option value="Martillero de Boleto de Compra/Venta">Boleto de Compra-Venta</option></select>
       </div>

       <div id="Mantenimiento_Hogar" style="display:none;">
       <select id="Mantenimiento" name="Mantenimiento_del_hogar" class="form-control input-lg form-control" >
         <option value="">Seleccionar...</option><option value="Albañil">Albañiles</option><option value="Calefacción con Losa Radiante">Calefacción / Losa Radiante</option><option value="Calefacción con Calderas">Calefacción / Calderas</option><option value="Instalación de Aire Acondicionado">Instalación de Aire Acondicionado</option><option value="Mantenimiento de Aire Acondicionado">Mantenimiento de Aire Acondicionado</option><option value="Aire Acondicionado Instalación">Aire Acondicionado Instalación</option><option value="Carpintero de Madera">Carpinteros de Madera</option><option value="Carpintero de Aluminio">Carpinteros de Alumunio</option><option value="Decorador">Decoración y Ambientación</option><option value="Cerrajero Judicial">Cerrajeros Judiciales</option><option value="Cerrajero Digital">Cerrajeros Digitales</option><option value="Cerrajero de Locales">Cerrajeros Locales</option><option value="Cerrajero de Viviendas">Cerrajeros Vivienda</option><option value="Electricista de Vivienda">Electricistas de Vivienda</option><option value="Electricista de Oficina">Electricistas de Oficina</option><option value="Electricista de Comercio">Electricistas de Comercio</option><option value="Electricista de Industria">Electricistas para Industria</option><option value="Fumigación Vivienda">Fumigadores de Vivienda</option><option value="Fumigación Consorcios">Fumigadores de Consorcios</option><option value="Fumigación Comercio">Fumigadores de Comercios</option><option value="Fumigación Oficina">Fumigadores de Oficina</option><option value="Fumigación Campo">Fumigadores de Campo</option><option value="Herrero">Herrería</option><option value="Jardinero">Jardinería y exteriores</option><option value="Limpieza">Servicio doméstico</option><option value="Pintor de Vivienda">Pintores de Vivienda</option><option value="Pintor de Comercio">Pintores de Comercio</option><option value="Pintor de Oficina">Pintores de Oficina</option><option value="Pintor de Industria">Pintores de Industria</option><option value="Pintor del automotor">Pintores de Automotor</option><option value="Pisos Flotantes">Pisos flotantes</option><option value="Cemento Alisado">Cemento Alisado</option><option value="Colocación de Cerámica y Porcelanato">Colocación de Cerámica y Porcelanato</option><option value="Plomero">Plomeros</option><option value="Gasista">Gasistas</option><option value="Revestimiento en Durlock">Revestimiento en Durlock</option><option value="Revestimiento en Madera">Revestimiento en Madera</option></select>
       </div>

       <div id="Abogados" style="display:none;">
       <select name="abogados_tipos" id="abogadoss" class="form-control input-lg form-control" >
         <option value="">Seleccionar...</option><option value="Abogado de Accidente de tránsito">Abogado de Accidentes de tránsito</option><option value="Abogado de Derecho Familiar">Abogado de Derecho Familiar</option><option value="Abogado de Derecho Penal">Abogado de Derecho Penal</option><option value="Abogado de Derecho Civil">Abogado de Derecho Civil</option></select>
       </div>

       <div id="Instalación" style="display:none;">
       <select name="Instalacion_tecnico" id="Instalacion_tecnica" class="form-control input-lg form-control" >
         <option value="">Seleccionar...</option><option value="Servicio de Aire Acondicionado">Instalación y reparación de Aire Acondicionado</option><option value="Servicio de software">Instalación de Software</option><option value="Servicio de Cámaras de Seguridad">Instalación de Cámaras de Seguridad</option><option value="Alarmas y Cámaras de Seguridad">Alarmas y Cámaras de Seguridad</option></select>
       </div>

       <div id="Obras" style="display:none;">
       <select name="Obras_Construccion" id="Obras_Construcción" class="form-control input-lg form-control" >
         <option value="">Seleccionar...</option><option value="Albañil">Albañiles</option><option value="Pisos de Cemento">Pisos de Cemeneto Alisado</option><option value="Pisos Flotantes">Pisos Flotantes</option><option value="Colocación de cerámica">Colocación de cerámica</option><option value="Colocación de Porcelanato">Colocación de Porcelanato</option><option value="Construcción de Cabañas">Construcción de Cabañas</option><option value="Revestimiento de Interiores">Revestimiento de Interiores</option><option value="Colocación Placas Anti-Humedad">Colocación Placas Anti-Humedad</option><option value="Techos">Techistas</option></select>
       </div>
       <br>
          Disponibilidad horaria: <br>  <input type="time" name="initSchedule"> A <input type="time" name="finalSchedule"> <img  data-toggle="popover" title="Acá debe ingresar el horario de inicio y finalización de su trabajo.."  src="../img/pregunta.png"/><br><br>
        <input id="btn-submit2" type="submit" name="register" class="btn btn-info text-center" value="Suscribirse"/>
    </div>
    </form>
</div>

</div>
</div>
</div>
</div>
</div></div>

<!--########################################### FIN REGISTROS ############################################# -->

    <br>
    <br>
<style>

   @media (min-width: 576px) {

    #footer {
        background:white;
        position: fixed;
        bottom: 0;
        width: 100%;
        font-size: 25px;

    }

    #ingresobtn{
         margin-top: 22px;
    height: 95px;
    width: 290px;
    text-align: center;
    line-height: 70px;
    font-size: 40px;
    }
    #registrobtn{
    margin-bottom: 120px;
    height: 95px;
    width: 290px;
    text-align: center;
    line-height: 70px;
    font-size: 40px;
    }
    #text-description{
        font-size:35px;
    }
}
    @media (min-width: 1200px) {
        #footer {
            color:black;
            background: white;
            height: 100px;
            margin:0;
            font-size: 18px;
            position: relative;
        }
         #ingresobtn{
            margin-top: 0px;
    margin-bottom: 0px;
    height: 60;
    width: 200;
    text-align: center;
    line-height: 40px;
    font-size: 20px;
    }
    #registrobtn{
      margin-top: 0px;
    margin-bottom: 0px;
    height: 60;
    width: 200;
    text-align: center;
    line-height: 40px;
    font-size: 20px;
    }
    #text-description{
        font-size:18px;
    }
}

</style>
    <footer>
        <div id="footer" class="row" style="box-shadow: 4px 7px 14px 7px #888888">
          <div class="col-md-4">
          </div>
            <div class="col-md-5" style="padding: 15px;margin-left: 115px;">
                 <a href="https://instagram.com/wouuargentina"><img height="60" src="img/insta.png" /></a>
                <a href="https://www.facebook.com/Wouu-542421186207234/"><img height="60" src="img/fb.png" /></a>
                <a href="https://wa.me/+54 9 1126942226"><img height="60" src="img/wpp.png" /></a>
            </div>
        </div>
    </footer>

<script>

function myFunction() {
    document.getElementById("demo").style.color = "red";
}

</script>

<script>
	function show(select_item) {
	    if (select_item == "profesional") {
		    specialtyDiv.style.visibility='visible';
                    specialtyDiv.style.display='block';
                    Form.fileURL.focus();
		}
		else{
			specialtyDiv.style.visibility='hidden';
			specialtyDiv.style.display='none';
		}
	}
</script>

    <script>
    $(document).ready(function(){

      var consulta;

      //hacemos focus
      $("#usuario").focus();

      //comprobamos si se pulsa una tecla
      $("#usuario").change(function(e){
             //obtenemos el texto introducido en el campo
             consulta = $("#usuario").val();

             //hace la búsqueda
             $("#resultado").delay(200).queue(function(n) {

                  $("#resultado").html('<img src="../img/ajax-loader.gif" />');

                        $.ajax({
                              type: "POST",
                              url: "/comprobations/comprobar.php",
                              data: "b="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){
                                    $("#resultado").html(data);
                                    n();
                              }
                  });
             });
      });
});
    </script>

     <script>
    $(document).ready(function(){

      var consulta;

      //hacemos focus
      $("#prof").focus();

      //comprobamos si se pulsa una tecla
      $("#prof").change(function(e){
             //obtenemos el texto introducido en el campo
             consulta = $("#prof").val();

             //hace la búsqueda
             $("#result").delay(200).queue(function(n) {

                  $("#result").html('<img src="../img/ajax-loader.gif" />');

                        $.ajax({
                              type: "POST",
                              url: "/comprobations/comprobarProf.php",
                              data: "b="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){
                                    $("#result").html(data);
                                    n();
                              }
                  });
             });
      });
});
    </script>


     <script>
    $(document).ready(function(){

      var consulta;

      //hacemos focus
      $("#emailUser").focus();

      //comprobamos si se pulsa una tecla
      $("#emailUser").change(function(e){
             //obtenemos el texto introducido en el campo
             consulta = $("#emailUser").val();

             //hace la búsqueda
             $("#resultEmail").delay(200).queue(function(n) {

                  $("#resultEmail").html('<img src="../img/ajax-loader.gif" />');

                        $.ajax({
                              type: "POST",
                              url: "/comprobations/comprobarEmail.php",
                              data: "b="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){
                                    $("#resultEmail").html(data);
                                    n();
                              }
                  });
             });
      });
});
    </script>

      <script>
    $(document).ready(function(){

      var consulta;

      //hacemos focus
      $("#emailProf").focus();

      //comprobamos si se pulsa una tecla
      $("#emailProf").change(function(e){

             //obtenemos el texto introducido en el campo
             consulta = $("#emailProf").val();

             //hace la búsqueda
             $("#resultEmails").delay(200).queue(function(n) {

                  $("#resultEmails").html('<img src="../img/ajax-loader.gif" />');

                        $.ajax({
                              type: "POST",
                              url: "/comprobations/comprobarEmailProf.php",
                              data: "b="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){
                                    $("#resultEmails").html(data);
                                    n();
                              }
                  });
             });
      });
});
    </script>





    <style>
    .inputfile {
	width: 0.1px;
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;
	z-index: -1;
}
.inputfile + label {
    font-size: 1.25em;
    font-weight: 700;
    color: white;
    background-color: white;
    display: block;
    margin: 0 auto;
    text-align: center;
    margin-top: 15px;
    font-size: 15px;
    border-style: solid;
    border-width: 1px;
    width: 115px;
}

.inputfile:focus + label,
.inputfile + label:hover {
    background-color: #c1c1c1;
}
.inputfile + label {
	cursor: pointer; /* "hand" cursor */
}
.inputfile:focus + label {
	outline: 1px dotted #000;
	outline: -webkit-focus-ring-color auto 5px;
}
    </style>

<script>
function userFunction() {
    document.getElementById("registroUser").style.display = "block";
}
</script>

<script>
    function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#uploadForm + img').remove();
            $('#uploadForm').before('<div class="text-center"><img src="'+e.target.result+'" width="120" height="120"/></div>');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

</script>

<script>
    $("#file").change(function () {
    document.getElementById("imgperfil").style.display = "none";
    filePreview(this);
});
</script>

<script>
    function filePreview2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#uploadForm2 + img').remove();
            $('#uploadForm2').before('<div class="text-center"><img src="'+e.target.result+'" width="120" height="120"/></div>');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

</script>

<script>
    $("#file2").change(function () {
    document.getElementById("imgperfil2").style.display = "none";
    filePreview2(this);
});
</script>

<script>
    $('[data-toggle="popover"]').popover({
  placement: "auto",
  trigger: "hover"
})
</script>

<script>
/*jQuery('#btn-submit').click(function(event){
    event.preventDefault();
    swal({
        title: "Desea registrarse en Wouu como usuario?",
        text: "Para un mejor funcionamiento del sitio y un mejor trabajo debe completar todos los datos del formulario.",
        icon: "warning",
        buttons: {
            cancel: "Olvidé algo!",
            confirm: "Estoy seguro!",
        },
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            $('#uploadForm').submit();
            swal("Bienvenido a wouu", "Con tu nombre de usuario puedes ingresar!", "success");
        } else {
            return false;
        }
    });
});*/
</script>

<script>
/*jQuery('#btn-submit2').click(function(event){
    event.preventDefault();
    swal({
        title: "Desea registrarse en Wouu como profesional?",
        text: "Para un mejor funcionamiento del sitio y un mejor trabajo debe completar todos los datos del formulario.",
        icon: "warning",
        buttons: {
            cancel: "Olvidé algo!",
            confirm: "Estoy seguro!",
        },
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            $('#uploadForm2').submit();
        } else {
            return false;
        }
    });
});*/
</script>

<script>
$("#categoriaPrincipal").change(function(){
  var sel = $("#categoriaPrincipal").val();
  var sel2 = sel.toString();

  if(sel2 === ''){
    $("#Belleza_y_Cuidado").css("display", "none");
    $('#Hogar_contruccion').css("display", "none");
    $('#Abogados').css("display", "none");
    $('#Gestor').css("display", "none");
    $('#Mantenimiento_Hogar').css("display", "none");
    $('#Instalación').css("display", "none");
    $('#Martilleros').css("display", "none");
    $('#Seguros').css("display", "none");
    $('#Tasador').css("display", "none");
    $("#Comunicacion").css("display", "none");
    $("#Fiestas").css("display", "none");
    $("#Fotografia").css("display", "none");
    $("#Mascotas").css("display", "none");
    $("#Oficinas").css("display", "none");
    $("#Tecno").css("display", "none");
  }
  if(sel2 === 'Asesoramiento Contable y Legal'){
    $("#Asesoramiento_Contable").css("display", "block");
    $("#Asesoramiento_Contable_y_Legal").prop('required',true);
    $("#Belleza_y_Cuidado").css("display", "none");
    $('#Hogar_contruccion').css("display", "none");
    $('#Gestor').css("display", "none");
    $('#Mantenimiento_Hogar').css("display", "none");
    $('#Instalación').css("display", "none");
    $('#Martilleros').css("display", "none");
    $('#Seguros').css("display", "none");
    $('#Tasador').css("display", "none");
    $("#Comunicacion").css("display", "none");
    $("#Fiestas").css("display", "none");
    $("#Fotografia").css("display", "none");
    $("#Mascotas").css("display", "none");
    $("#Oficinas").css("display", "none");
    $("#Tecno").css("display", "none");
  }else{
    $("#Asesoramiento_Contable").css("display", "none");
    $("#Asesoramiento_Contable_y_Legal").prop('required',false);
  }

  if(sel2 === 'Viajes y Turismo'){
    $("#Viajes").css("display", "block");
    $("#viajes_y_turismo").prop('required',true);
    $("#Asesoramiento_Contable").css("display", "none");
    $("#Belleza_y_Cuidado").css("display", "none");
    $('#Hogar_contruccion').css("display", "none");
    $('#Abogados').css("display", "none");
    $('#Gestor').css("display", "none");
    $('#Mantenimiento_Hogar').css("display", "none");
    $('#Instalación').css("display", "none");
    $('#Martilleros').css("display", "none");
    $('#Seguros').css("display", "none");
    $('#Tasador').css("display", "none");
    $("#Comunicacion").css("display", "none");
    $("#Fiestas").css("display", "none");
    $("#Fotografia").css("display", "none");
    $("#Mascotas").css("display", "none");
    $("#Oficinas").css("display", "none");
    $("#Tecno").css("display", "none");
  }else{
    $("#Viajes").css("display", "none");
    $("#viajes_y_turismo").prop('required',false);
  }
  if(sel2 === 'Imprenta'){
    $("#Imprenta").css("display", "block");
    $("#Imprenta_Profesional").prop('required',true);
    $("#Asesoramiento_Contable").css("display", "none");
    $("#Belleza_y_Cuidado").css("display", "none");
    $('#Hogar_contruccion').css("display", "none");
    $('#Abogados').css("display", "none");
    $('#Gestor').css("display", "none");
    $('#Mantenimiento_Hogar').css("display", "none");
    $('#Instalación').css("display", "none");
    $('#Martilleros').css("display", "none");
    $('#Seguros').css("display", "none");
    $('#Tasador').css("display", "none");
    $("#Viajes").css("display", "none");
    $("#Comunicacion").css("display", "none");
    $("#Fiestas").css("display", "none");
    $("#Fotografia").css("display", "none");
    $("#Mascotas").css("display", "none");
    $("#Oficinas").css("display", "none");
    $("#Tecno").css("display", "none");
  }else{
    $("#Imprenta").css("display", "none");
    $("#Imprenta_Profesional").prop('required',false);
  }
  if(sel2 === 'Belleza y Cuidado Personal'){
    $("#Belleza_y_Cuidado").css("display", "block");
    $("#Belleza_y_Cuidado_Personal").prop('required',true);
    $("#Asesoramiento_Contable").css("display", "none");
    $('#Hogar_contruccion').css("display", "none");
    $('#Abogados').css("display", "none");
    $('#Gestor').css("display", "none");
    $('#Mantenimiento_Hogar').css("display", "none");
    $('#Instalación').css("display", "none");
    $('#Martilleros').css("display", "none");
    $('#Seguros').css("display", "none");
    $('#Tasador').css("display", "none");
    $("#Viajes").css("display", "none");
    $("#Comunicacion").css("display", "none");
    $("#Fiestas").css("display", "none");
    $("#Fotografia").css("display", "none");
    $("#Mascotas").css("display", "none");
    $("#Oficinas").css("display", "none");
    $("#Tecno").css("display", "none");
  }else{
    $("#Belleza_y_Cuidado").css("display", "none");
    $("#Belleza_y_Cuidado_Personal").prop('required',false);
  }
  if(sel2 === 'Comunicación y Diseño'){
    $("#Comunicacion").css("display", "block");
    $("#Comunicacion_y_Diseño").prop('required',true);
    $("#Asesoramiento_Contable").css("display", "none");
    $("#Belleza_y_Cuidado").css("display", "none");
    $('#Hogar_contruccion').css("display", "none");
    $('#Abogados').css("display", "none");
    $('#Gestor').css("display", "none");
    $('#Mantenimiento_Hogar').css("display", "none");
    $('#Instalación').css("display", "none");
    $('#Martilleros').css("display", "none");
    $('#Seguros').css("display", "none");
    $('#Tasador').css("display", "none");
    $("#Viajes").css("display", "none");
    $("#Cursos").css("display", "none");
    $("#Fiestas").css("display", "none");
    $("#Fotografia").css("display", "none");
    $("#Mascotas").css("display", "none");
    $("#Oficinas").css("display", "none");
    $("#Tecno").css("display", "none");
  }else{
    $("#Comunicacion").css("display", "none");
    $("#Comunicacion_y_Diseño").prop('required',false);
  }
  if(sel2 === 'Cursos y Clases'){
    $("#Cursos").css("display", "block");
    $("#Cursos_y_Clases").prop('required',true);
    $("#Asesoramiento_Contable").css("display", "none");
    $("#Belleza_y_Cuidado").css("display", "none");
    $('#Hogar_contruccion').css("display", "none");
    $('#Abogados').css("display", "none");
    $('#Gestor').css("display", "none");
    $('#Mantenimiento_Hogar').css("display", "none");
    $('#Instalación').css("display", "none");
    $('#Martilleros').css("display", "none");
    $('#Seguros').css("display", "none");
    $('#Tasador').css("display", "none");
    $("#Viajes").css("display", "none");
    $("#Fiestas").css("display", "none");
    $("#Fotografia").css("display", "none");
    $("#Mascotas").css("display", "none");
    $("#Oficinas").css("display", "none");
    $("#Tecno").css("display", "none");
  }else{
    $("#Cursos").css("display", "none");
    $("#Cursos_y_Clases").prop('required',false);
  }
  if(sel2 === 'Fiestas y Eventos'){
    $("#Fiestas").css("display", "block");
    $("#Fiestas_y_Eventos").prop('required',true);
    $("#Asesoramiento_Contable").css("display", "none");
    $("#Belleza_y_Cuidado").css("display", "none");
    $('#Hogar_contruccion').css("display", "none");
    $('#Abogados').css("display", "none");
    $('#Gestor').css("display", "none");
    $('#Mantenimiento_Hogar').css("display", "none");
    $('#Instalación').css("display", "none");
    $('#Martilleros').css("display", "none");
    $('#Seguros').css("display", "none");
    $('#Tasador').css("display", "none");
    $("#Viajes").css("display", "none");
    $("#Cursos").css("display", "none");
    $("#Fotografia").css("display", "none");
    $("#Mascotas").css("display", "none");
    $("#Oficinas").css("display", "none");
    $("#Tecno").css("display", "none");
  }else{
    $("#Fiestas").css("display", "none");
    $("#Fiestas_y_Eventos").prop('required',false);
  }
  if(sel2 === 'Fotografía, Música y Cine'){
    $("#Fotografia").css("display", "block");
    $("#Fotografia_Musica_y_Cine").prop('required',true);
    $("#Asesoramiento_Contable").css("display", "none");
    $("#Belleza_y_Cuidado").css("display", "none");
    $('#Hogar_contruccion').css("display", "none");
    $('#Abogados').css("display", "none");
    $('#Gestor').css("display", "none");
    $('#Mantenimiento_Hogar').css("display", "none");
    $('#Instalación').css("display", "none");
    $('#Martilleros').css("display", "none");
    $('#Seguros').css("display", "none");
    $('#Tasador').css("display", "none");
    $("#Viajes").css("display", "none");
    $("#Cursos").css("display", "none");
    $("#Mascotas").css("display", "none");
    $("#Oficinas").css("display", "none");
    $("#Tecno").css("display", "none");
  }else{
    $("#Fotografia").css("display", "none");
    $("#Fotografia_Musica_y_Cine").prop('required',false);
  }
  if(sel2 === 'Hogar y Construcción'){
    $("#Hogar").css("display", "block");
    $("#Hogar_y_Construccion").prop('required',true);
    $("#Asesoramiento_Contable").css("display", "none");
    $("#Belleza_y_Cuidado").css("display", "none");
    $('#Hogar_contruccion').css("display", "none");
    $('#Abogados').css("display", "none");
    $('#Gestor').css("display", "none");
    $('#Instalación').css("display", "none");
    $('#Martilleros').css("display", "none");
    $('#Seguros').css("display", "none");
    $('#Tasador').css("display", "none");
    $("#Viajes").css("display", "none");
    $("#Cursos").css("display", "none");
    $("#Fotografia").css("display", "none");
    $("#Mascotas").css("display", "none");
    $("#Oficinas").css("display", "none");
    $("#Tecno").css("display", "none");
  }else{
    $("#Hogar").css("display", "none");
    $("#Hogar_y_Construccion").prop('required',false);
  }
  if(sel2 === 'Mantenimiento de Vehículos'){
    $("#Vehiculos").css("display", "block");
    $("#Mantenimiento_de_Vehiculos").prop('required',true);
    $("#Hogar").css("display", "none");
    $("#Asesoramiento_Contable").css("display", "none");
    $("#Belleza_y_Cuidado").css("display", "none");
    $('#Hogar_contruccion').css("display", "none");
    $('#Abogados').css("display", "none");
    $('#Gestor').css("display", "none");
    $('#Mantenimiento_Hogar').css("display", "none");
    $('#Instalación').css("display", "none");
    $('#Martilleros').css("display", "none");
    $('#Seguros').css("display", "none");
    $('#Tasador').css("display", "none");
    $("#Viajes").css("display", "none");
    $("#Cursos").css("display", "none");
    $("#Fotografia").css("display", "none");
    $("#Mascotas").css("display", "none");
    $("#Oficinas").css("display", "none");
    $("#Tecno").css("display", "none");
  }else{
    $("#Vehiculos").css("display", "none");
    $("#Mantenimiento_de_Vehiculos").prop('required',false);
  }
  if(sel2 === 'Medicina y Salud'){
    $("#Medicina").css("display", "block");
    $("#Medicina_y_Salud").prop('required',true);
    $("#Hogar").css("display", "none");
    $("#Asesoramiento_Contable").css("display", "none");
    $("#Belleza_y_Cuidado").css("display", "none");
    $('#Hogar_contruccion').css("display", "none");
    $('#Abogados').css("display", "none");
    $('#Gestor').css("display", "none");
    $('#Mantenimiento_Hogar').css("display", "none");
    $('#Instalación').css("display", "none");
    $('#Martilleros').css("display", "none");
    $('#Seguros').css("display", "none");
    $('#Tasador').css("display", "none");
    $("#Viajes").css("display", "none");
    $("#Cursos").css("display", "none");
    $("#Fotografia").css("display", "none");
    $("#Mascotas").css("display", "none");
    $("#Oficinas").css("display", "none");
    $("#Tecno").css("display", "none");
  }else{
    $("#Medicina").css("display", "none");
    $("#Medicina_y_Salud").prop('required',false);
  }
  if(sel2 === 'Ropa y Moda'){
    $("#Ropa").css("display", "block");
    $("#Ropa_y_Moda").prop('required',true);
    $("#Hogar").css("display", "none");
    $("#Asesoramiento_Contable").css("display", "none");
    $("#Belleza_y_Cuidado").css("display", "none");
    $('#Hogar_contruccion').css("display", "none");
    $('#Abogados').css("display", "none");
    $('#Gestor').css("display", "none");
    $('#Mantenimiento_Hogar').css("display", "none");
    $('#Instalación').css("display", "none");
    $('#Martilleros').css("display", "none");
    $('#Seguros').css("display", "none");
    $('#Tasador').css("display", "none");
    $("#Viajes").css("display", "none");
    $("#Cursos").css("display", "none");
    $("#Fotografia").css("display", "none");
    $("#Mascotas").css("display", "none");
    $("#Oficinas").css("display", "none");
    $("#Tecno").css("display", "none");
  }else{
    $("#Ropa").css("display", "none");
    $("#Ropa_y_Moda").prop('required', false);
  }
  if(sel2 === 'Servicios para Mascotas'){
    $("#Mascotas").css("display", "block");
    $("#Servicio_para_Mascotas").prop('required',true);
    $("#Hogar").css("display", "none");
    $("#Asesoramiento_Contable").css("display", "none");
    $("#Belleza_y_Cuidado").css("display", "none");
    $('#Hogar_contruccion').css("display", "none");
    $('#Abogados').css("display", "none");
    $('#Gestor').css("display", "none");
    $('#Mantenimiento_Hogar').css("display", "none");
    $('#Instalación').css("display", "none");
    $('#Martilleros').css("display", "none");
    $('#Seguros').css("display", "none");
    $('#Tasador').css("display", "none");
    $("#Viajes").css("display", "none");
    $("#Cursos").css("display", "none");
    $("#Fotografia").css("display", "none");
    $("#Oficinas").css("display", "none");
    $("#Tecno").css("display", "none");
  }else{
    $("#Mascotas").css("display", "none");
    $("#Servicio_para_Mascotas").prop('required',false);
  }
  if(sel2 === 'Servicios para Oficina'){
    $("#Oficinas").css("display", "block");
    $("#Servicio_para_Oficinas").prop('required',true);
    $("#Hogar").css("display", "none");
    $("#Asesoramiento_Contable").css("display", "none");
    $("#Belleza_y_Cuidado").css("display", "none");
    $('#Hogar_contruccion').css("display", "none");
    $('#Abogados').css("display", "none");
    $('#Gestor').css("display", "none");
    $('#Mantenimiento_Hogar').css("display", "none");
    $('#Instalación').css("display", "none");
    $('#Martilleros').css("display", "none");
    $('#Seguros').css("display", "none");
    $('#Tasador').css("display", "none");
    $("#Viajes").css("display", "none");
    $("#Cursos").css("display", "none");
    $("#Fotografia").css("display", "none");
    $("#Tecno").css("display", "none");
  }else{
    $("#Oficinas").css("display", "none");
    $("#Servicio_para_Oficinas").prop('required',false);
  }

  if(sel2 === 'Tecnología'){
    $("#Tecno").css("display", "block");
    $("#Tecnologia").prop('required',true);
    $("#Oficinas").css("display", "none");
    $("#Hogar").css("display", "none");
    $("#Asesoramiento_Contable").css("display", "none");
    $("#Belleza_y_Cuidado").css("display", "none");
    $('#Hogar_contruccion').css("display", "none");
    $('#Abogados').css("display", "none");
    $('#Gestor').css("display", "none");
    $('#Mantenimiento_Hogar').css("display", "none");
    $('#Instalación').css("display", "none");
    $('#Martilleros').css("display", "none");
    $('#Seguros').css("display", "none");
    $('#Tasador').css("display", "none");
    $("#Viajes").css("display", "none");
    $("#Cursos").css("display", "none");
    $("#Fotografia").css("display", "none");
  }else{
    $("#Tecno").css("display", "none");
    $("#Tecnologia").prop('required',false);
  }

  if(sel2 === 'Transporte'){
    $("#Trans").css("display", "block");
    $("#Transporte").prop('required',true);
    $("#Tecno").css("display", "none");
    $("#Oficinas").css("display", "none");
    $("#Hogar").css("display", "none");
    $("#Asesoramiento_Contable").css("display", "none");
    $("#Belleza_y_Cuidado").css("display", "none");
    $('#Hogar_contruccion').css("display", "none");
    $('#Abogados').css("display", "none");
    $('#Gestor').css("display", "none");
    $('#Mantenimiento_Hogar').css("display", "none");
    $('#Instalación').css("display", "none");
    $('#Martilleros').css("display", "none");
    $('#Seguros').css("display", "none");
    $('#Tasador').css("display", "none");
    $("#Viajes").css("display", "none");
    $("#Cursos").css("display", "none");
    $("#Fotografia").css("display", "none");
  }else{
    $("#Trans").css("display", "none");
    $("#Transporte").prop('required',false);
  }

  });
</script>


<script>
$("#Hogar_y_Construccion").change(function(){
    var sel5 = $("#Hogar_y_Construccion").val();
    var sel6 = sel5.toString();
      if(sel6 === 'Obras y Construcción'){
        $("#Obras").css("display", "block");
        $("#Obras_Construcción").prop('required',true);
      }else{
        $("#Obras").css("display", "none");
        $("#Obras_Construcción").prop('required',false);
      }
  });
</script>


<script>
$("#Asesoramiento_Contable_y_Legal").change(function(){
    var sel5 = $("#Asesoramiento_Contable_y_Legal").val();
    var sel6 = sel5.toString();
      if(sel6 === 'Martilleros Públicos'){
        $("#Martilleros").css("display", "block");
        $("#MartillerosP").prop('required',true);
      }else{
        $("#Martilleros").css("display", "none");
        $("#MartillerosP").prop('required',false);
      }
  });
</script>

<script>
$("#Asesoramiento_Contable_y_Legal").change(function(){
    var sel5 = $("#Asesoramiento_Contable_y_Legal").val();
    var sel6 = sel5.toString();
      if(sel6 === 'Gestores'){
        $("#Gestor").css("display", "block");
        $("#Gestoress").prop('required',true);
      }else{
        $("#Gestor").css("display", "none");
        $("#Gestoress").prop('required',false);
      }
  });
</script>

<script>
$("#Asesoramiento_Contable_y_Legal").change(function(){
    var abogado = $("#Asesoramiento_Contable_y_Legal").val();
    var abogadoo = abogado.toString();
      if(abogadoo === 'Tasadores'){
        $("#Tasador").css("display", "block");
        $("#Tasador_es").prop('required',true);
      }else{
        $("#Tasador").css("display", "none");
        $("#Tasador_es").prop('required',false);
      }
  });
</script>

<script>
$("#Asesoramiento_Contable_y_Legal").change(function(){
    var abogado = $("#Asesoramiento_Contable_y_Legal").val();
    var abogadoo = abogado.toString();
      if(abogadoo === 'Abogados y Estudios Jurídicos'){
        $("#Abogados").css("display", "block");
        $("#Abagadoss").prop('required',true);
      }else{
        $("#Abogados").css("display", "none");
        $("#Abogadoss").prop('required',false);
      }
  });
</script>

<script>
$("#Asesoramiento_Contable_y_Legal").change(function(){
    var abogado = $("#Asesoramiento_Contable_y_Legal").val();
    var abogadoo = abogado.toString();
      if(abogadoo === 'Productores de Seguros'){
        $("#Seguros").css("display", "block");
        $("#Productoras_Seguros").prop('required',true);
      }else{
        $("#Seguros").css("display", "none");
        $("#Productoras_Seguros").prop('required',false);
      }
  });
</script>

<script>
$("#Hogar_y_Construccion").change(function(){
    var Mantenimiento = $("#Hogar_y_Construccion").val();
    var Mantenimientoo = Mantenimiento.toString();
      if(Mantenimientoo === 'Instalación y Servicio Técnico'){
        $("#Instalación").css("display", "block");
        $("#Instalacion_tecnica").prop('required',true);
      }else{
        $("#Instalación").css("display", "none");
        $("#Instalacion_tecnica").prop('required',false);
      }
  });
</script>
<script>
$("#Hogar_y_Construccion").change(function(){
    var Mantenimiento = $("#Hogar_y_Construccion").val();
    var Mantenimientoo = Mantenimiento.toString();
      if(Mantenimientoo === 'Mantenimiento del Hogar'){
        $("#Mantenimiento_Hogar").css("display", "block");
        $("#Mantenimiento").prop('required',true);
      }else{
        $("#Mantenimiento_Hogar").css("display", "none");
        $("#Mantenimiento").prop('required',false);
      }
  });
</script>

    </body>
</html>
