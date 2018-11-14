@extends('menu')
@section('cuerpo')


<?php

use App\Problem;
use App\Status;
use App\Person;
use App\Specialist;
use App\activeProblem;

?>
<html>
<head>
    <link rel="shortcut icon" href="img/ico.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
            <title>Wouu! - Profesionales</title>
</head>

<style>
@media (min-width: 34em) {
    .card-columns {  -webkit-column-count: 2;  -moz-column-count: 2; column-count: 2;  text-align:center;  }
    #form-busqueda{width:140%;}
    #select-categoria{height: 47px; font-size: 15px; font-weight: bold;background: #e4e4e4;width: 200px;}
    #contenedor-busqueda{margin-top:210;}
    #titulo-busqueda{font-size: 59px;color: #699d46;font-weight: bold;}
    #subtitulo-busqueda{font-size: 47px;color: #5383a2;}
    #input-buscar{width: 100%;height:75px; font-size: 42px;}
    #btn-filtros{border-style:solid; border-color:#ced4da;height:75px;}
    #contenedor-cartas{max-width: 1200px;margin-left:-130px;width:950px;}
    #img-prof{height:400px;}
    #card-body-prof{height: 300px;}
    #name{font-size: 40px;}
    #city{font-size: 30px;}
    #specialtyCard{ white-space: nowrap;color: #fd7c68;font-size:27px;}
}

@media (min-width: 48em) {
    .card-columns {-webkit-column-count: 2; -moz-column-count: 2;  column-count: 2; text-align:center;  }

    #form-busqueda{width:140%;}
    #select-categoria{height: 47px; font-size: 15px; font-weight: bold;background: #e4e4e4;width: 200px;}
     #contenedor-busqueda{margin-top:60px;}
     #titulo-busqueda{font-size: 59px;color: #699d46;font-weight: bold;}
     #subtitulo-busqueda{font-size: 47px;color: #5383a2;}
     #input-buscar{width: 100%;height:75px; font-size: 42px;}
     #btn-filtros{border-style:solid; border-color:#ced4da;height:75px}
     #contenedor-cartas{max-width: 1200px;margin-left:-130px;width:950px;}
     #img-prof{height:330px;}
    #card-body-prof{height: 300px}
    #name{font-size: 40px;}
    #city{font-size: 30px;}
    #specialtyCard{ white-space: nowrap;color: #fd7c68;font-size:27px;}
}

@media (min-width: 62em) {
    .card-columns {  -webkit-column-count: 2;  -moz-column-count: 2;   column-count: 2;   text-align:center; }
    #form-busqueda{width:100%;}
    #select-categoria{height: 47px; font-size: 15px; font-weight: bold;background: #e4e4e4;width: 200px;}
     #contenedor-busqueda{margin-top:0;}
     #titulo-busqueda{font-size: 30px;color: #699d46;font-weight: bold;}
     #subtitulo-busqueda{font-size: 20px;color: #5383a2;}
     #input-buscar{width: 100%;height:38px; font-size: 15px;}
     #btn-filtros{border-style:solid; border-color:#ced4da;height:37px}
     #contenedor-cartas{max-width: 1200px;margin-left:0px;width:950px;}
      #card-body-prof{height: 100%;}
      #img-prof{height:215px;}
      #name{font-size: 20px;}
    #city{font-size: 15px;}
    #specialtyCard{ white-space: nowrap;color: #fd7c68;font-size:14px;}
}

@media (min-width: 75em) {
    .card-columns {   -webkit-column-count: 4;  -moz-column-count: 4; column-count: 4;  text-align:center;  }
    #form-busqueda{width:100%;}
    #select-categoria{height: 47px; font-size: 15px; font-weight: bold;background: #e4e4e4;width: 200px;}
     #contenedor-busqueda{margin-top:0;}
     #titulo-busqueda{font-size: 30px;color: #699d46;font-weight: bold;}
     #subtitulo-busqueda{font-size: 20px;color: #5383a2;}
     #input-buscar{width: 100%;height:38px; font-size: 15px;}
     #btn-filtros{border-style:solid; border-color:#ced4da;height:37px}
     #contenedor-cartas{max-width: 1200px;margin-left:0px;width:950px;}
      #card-body-prof{height: 100%;}
      #img-prof{height:215px;}
      #name{font-size: 20px;}
    #city{font-size: 15px;}
    #specialtyCard{ white-space: nowrap;color: #fd7c68;font-size:14px;}
}
</style>

<style>
    #card:hover{
        box-shadow: 4px 7px 14px 3px #888888;position:fixed;
    -webkit-transition: all 500ms ease;
-moz-transition: all 500ms ease;
-ms-transition: all 500ms ease;
-o-transition: all 500ms ease;
transition: all 500ms ease;
    }
</style>
<body style="background-image: url('../img/fondo.jpg');">

<br><br><br><br><br><br><br>
<style>
    #card:hover{
        box-shadow: 4px 7px 14px 3px #888888;position:fixed;
    -webkit-transition: all 500ms ease;
-moz-transition: all 500ms ease;
-ms-transition: all 500ms ease;
-o-transition: all 500ms ease;
transition: all 500ms ease;
    }
</style>

<script>
$(document).ready(function(){
$("#myInput").on("keyup", function() {
  var value = $(this).val().toLowerCase();
  $("#table tr").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  });
});
});
</script>

<script>

$(document).ready(function(){
var value = $("#myInput").val().toLowerCase();
  $("#table tr").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  });
});
</script>

<script>
$(document).ready(function(){
    var value = $("#categoriaPrincipal").val().toLowerCase();
    $("#table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
</script>


<div class="container" id="contenedor-busqueda">
  <div class="row" style="margin:0">
    <div class="col-md-12 text-center">
<p id="titulo-busqueda">¡Encontrá al profesional que estás buscando!</p><p id="subtitulo-busqueda"> ¿Todavía no lo encontraste? Utilizá los filtros</p>
    </div>
  </div>
</div><br>
<?php $nada = ''; ?>
<div class="container">
  <div class="row">
        <div class="col-md-10">
        <input class="form-control input-lg" value="<?php if($categoria == null && $abuscar == null){?>{{$nada}}<?php }else if($categoria != null && $abuscar != null){?>{{$categoria}}<?php }else if($categoria != null){?>{{$categoria}}<?php }else if($abuscar!=null){?>{{$abuscar}}<?php }?>" type="text" id="myInput"  onkeyup="myFunction()" placeholder="¿Qué estás buscando?" >

        </div>
        <div class="col-md-1"style="margin-left: -65px;">
        <img src="../img/lupa.png" height="20" style="margin-top:8px;">
        </div>
        <div class="col-md-1" style="margin-left:-25px;">
        <button id="btn-filtros" class="btn btn-light">Filtros</button>
        </div>
</div>
<br>
<div class="container" id="filtros" <?php if($categoria != null){?>style="display:block;"<?php }else{?>style="display:none"<?php }?>>
<div class="row" style="margin:0">
  <div class="col-md-4">
<table ><td>
<select style="background: #5383a2;;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;"  id="categoriaPrincipal" name="categoriaPrincipal" class="form-control input-lg form-control" onchange="myFunction()">
  <option value=<?php if($categoria == null){?>"">Seleccionar Categoria<?php }else{?>"{{$categoria}}">{{$categoria}}<?php }?></option><option value="Asesoramiento Contable y Legal">Asesoramiento Contable y Legal</option><option value="Belleza y Cuidado Personal">Belleza y Cuidado Personal</option><option value="Comunicación y Diseño">Comunicación y Diseño</option><option value="Cursos y Clases">Cursos y Clases</option><option value="Fiestas y Eventos">Fiestas y Eventos</option><option value="Fotografía, Música y Cine">Fotografía, Música y Cine</option><option value="Hogar y Construcción">Hogar y Construcción</option><option value="Imprenta">Imprenta</option><option value="Mantenimiento de Vehículos">Mantenimiento de Vehículos</option><option value="Medicina y Salud">Medicina y Salud</option><option value="Ropa y Moda">Ropa y Moda</option><option value="Servicios para Mascotas">Servicios para Mascotas</option><option value="Servicios para Oficina">Servicios para Oficina</option><option value="Tecnología">Tecnología</option><option value="Transporte">Transporte</option><option value="Viajes y Turismo">Viajes y Turismo</option><option value="Otros Servicios">Otros Servicios</option></select></td>
</table>
</div>

<div class="col-md-4" id="Asesoramiento_Contable" style="display:none;">
<table><td>
<select style="background: #b01e59;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" id="Asesoramiento_Contable_y_Legal" name="Asesoramiento_Contable_y_Legal" class="form-control input-lg form-control">
  <option value="">Seleccionar...</option><option value="Abogados">Abogados y Estudios Jurídicos</option><option value="Contadores y Estudios">Contadores y Estudios</option><option value="Gestores">Gestores</option><option value="Martilleros Públicos">Martilleros Públicos</option><option value="Productores de Seguros">Productores de Seguros</option><option value="Despachantes de Aduana">Despachantes de Aduana</option><option value="Tasadores">Tasadores</option></select></td>
</table>
</div>

<div class="col-md-4" id="Belleza_y_Cuidado" style="display:none;">
<table><tr>
<select style="background: #b01e59;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" id="Belleza_y_Cuidado_Personal" name="Belleza_y_Cuidado_Personal" class="form-control input-lg form-control">
<option value="">Seleccionar...</option><option value="Maquilladoras y Peinadoras">Maquilladoras y Peinadoras</option><option value="Masajes y Tratamientos">Masajes y Tratamientos</option><option value="Cosmetología">Cosmetología</option><option value="Peluquería">Peluquería</option><option value="Tatuajes y Piercings">Tatuajes y Piercings</option><option value="Estética">Estética</option></select></tr>
</table>
</div>

<div class="col-md-4" id="Imprenta" style="display:none;">
<table><tr>
<select style="background: #b01e59;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" id="Imprenta_Profesional" name="Belleza_y_Cuidado_Personal" class="form-control input-lg form-control">
<option value="">Seleccionar...</option><option value="Imprenta de Talonarios de AFIP">Talonarios de AFIP</option><option value="Imprenta de Tarjetas Personales">Tarjetas Personales</option><option value="Imprenta de Tarjetas de 15 años">15 años </option><option value="Imprenta de Tarjetas de Casamientos ">Casamientos</option><option value="Imprenta de Divorcios">Divorcios</option><option value="Imprenta de Modulos Universitarios">Imprenta de Modulos Universitarios </option></tr>
</table>
</div>

<div class="col-md-4" id="Comunicacion" style="display:none;">
<table><td>
<select style="background:#b01e59;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" id="Comunicacion_y_Diseño" name="Comunicacion_y_Diseño" class="form-control input-lg form-control" >
  <option value="">Seleccionar...</option><option value="Diseñadores Gráficos">Diseñadores Gráficos</option><option value="Marketing y Publicidad">Marketing y Publicidad</option><option value="Traductores">Traductores</option><option value="Locutores">Locutores</option></select></td>
</table>
</div>

<div class="col-md-4" id="Cursos" style="display:none;">
<table><td>
<select style="background: #b01e59;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" id="Cursos_y_Clases" name="Cursos_y_Clases" class="form-control input-lg form-control" >
  <option value="">Seleccionar...</option><option value="Computación e Informática">Computación e Informática</option><option value="Apoyo Escolar y Universitario">Apoyo Escolar y Universitario</option><option value="Instrumentos Musicales">Instrumentos Musicales</option><option value="Manejo">Manejo</option><option value="Maquillaje">Maquillaje</option><option value="Fotografía">Fotografía</option></select></td>
</table>
</div>

<div class="col-md-4" id="Fiestas" style="display:none;">
<table><td>
<select style="background: #b01e59;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" id="Fiestas_y_Eventos" name="Fiestas_y_Eventos" class="form-control input-lg form-control" >
<option value="">Seleccionar...</option><option value="Servicios Audiovisuales">Servicios Audiovisuales</option><option value="Animación y Alquiler de Juegos">Animación y Alquiler de Juegos</option><option value="Bebidas">Bebidas</option><option value="Catering">Catering</option><option value="Alquiler de Equipos">Alquiler de Equipos</option></select></td>
</table>
</div>

<div class="col-md-4" id="Fotografia" style="display:none;">
<table><td>
<select style="background: #b01e59;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" id="Fotografia_Musica_y_Cine" name="Fotografia_Musica_y_Cine" class="form-control input-lg form-control" >
<option value="">Seleccionar...</option><option value="Fotografía">Fotografía</option><option value="Música">Música</option><option value="Shotting">Shotting</option><option value="Cine y Televisión">Cine y Televisión</option></select></td>
</table>
</div>

<div class="col-md-4" id="Hogar" style="display:none;">
<table><tr>
<select style="background: #b01e59;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" id="Hogar_y_Construccion" name="Hogar_y_Construccion" class="form-control input-lg form-control" >
<option value="">Seleccionar...</option> <option value="Cabañas">Cabañas / Construccion</option><option value="Cabañas">Cabañas / Mantenimiento</option> <option value="Mantenimiento del Hogar">Mantenimiento del Hogar</option><option value="Obras y Construcción">Obras y Construcción</option><option value="Instalación y Servicio Técnico">Instalación y Servicio Técnico</option></select></tr>
</table>
</div>

<div class="col-md-4" id="Vehiculos" style="display:none;">
<table><td>
<select style="background: #b01e59;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" id="Mantenimiento_de_Vehiculos" name="Mantenimiento_de_Vehiculos" class="form-control input-lg form-control" >
<option value="">Seleccionar...</option><option value="Electrónica de Vehiculos">Electrónica</option><option value="Electricidad de Vehiculos">Electricidad</option><option value="Performance de Vehículos">Permormance</option><option value="Gomería">Gomerías</option><option value="Mecánico de autos a domicilio">Mecánico de autos a domicilio</option><option value="Mecánico de motos a domicilio">Mecánico de motos a domicilio</option><option value="Talleres">Talleres</option><option value="Chapa y Pintura">Chapa y Pintura</option><option value="Remolque de Camiones">Remolque de Camiones</option><option value="Remolque de Motos">Remolque de Motos</option><option value="Remolque de Autos">Remolque de Autos</option></select></td>
</table>
</div>

<div class="col-md-4" id="Medicina" style="display:none;">
<table><td>
<select style="background: #b01e59;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" id="Medicina_y_Salud" name="Medicina_y_Salud" class="form-control input-lg form-control" >
<option value="">Seleccionar...</option>  <option value="Psicólogos y Psicopedagogas">Psicólogos y Psicopedagogas</option><option value="Odontología">Odontología</option><option value="Enfermeros">Enfermeros</option><option value="Acompañantes Terapéuticos">Acompañantes Terapéuticos</option><option value="Geriátricos">Geriátricos</option><option value="Podología">Podología</option><option value="Cirugía Plástica">Cirugía Plástica</option></select></td>
</table>
</div>


<div class="col-md-4" id="Ropa" style="display:none;">
<table><td>
<select style="background: #b01e59;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" id="Ropa_y_Moda" name="Ropa_y_Moda" class="form-control input-lg form-control" >
<option value="">Seleccionar...</option><option value="Diseñadora para Hospitales">Diseñadora para Gastronomía</option><option value="Diseñadora para Hospitales">Diseñadora para Hospitales</option><option value="Diseñadora para Clínicas">Diseñadora para Clínicas</option><option value="Diseñadora para Industrias">Diseñadora para Industrias</option><option value="Diseñadora de Moda">Diseñadora de Moda en Gral.</option><option value="Corte y Confección">Corte y Confección</option></select></td>
</table>
</div>


<div class="col-md-4" id="Mascotas" style="display:none;">
<table><td>
<select style="background: #b01e59;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" id="Servicio_para_Mascotas" name="Servicio_para_Mascotas" class="form-control input-lg form-control" >
<option value="">Seleccionar...</option><option value="Adriestramiento Canino">Adriestramiento Canino</option><option value="Clínica Veterinaria">Clínicas Veterinarias</option><option value="Hospedaje para Mascotas">Hospedajes</option><option value="Internación para Mascotas">Internación de Mascotas</option><option value="Paseador de Perros">Paseadores</option><option value="Peluquerías Caninas">Peluquerías Caninas</option></select></td>
</table>
</div>


<div class="col-md-4" id="Oficinas" style="display:none;">
<table><td>
<select style="background: #b01e59;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" id="Servicio_para_Oficinas" name="Servicio_para_Oficinas" class="form-control input-lg form-control" >
<option value="">Seleccionar...</option><option value="Limpieza Profesional">Limpieza Profesional</option><option value="Electricista de Oficina">Electricistas de Oficina</option><option value="Fumigación Oficina">Fumigadores de Oficina</option><option value="Decoración de oficinas">Decoración de Oficina</option><option value="Servicio de Aire Acondicionado">Instalación y reparación de Aire Acondicionado</option><option value="Pintor">Pintores de Oficina</option><option value="Servicio de telefónia">Telefónia</option><option value="Servicio de software">Instalación de Software</option><option value="Servicio de Cámaras de Seguridad">Instalación de Cámaras de Seguridad</option></select></td>
</table>
</div>


<div class="col-md-4" id="Tecno" style="display:none;">
<table><td>
<select style="background: #b01e59;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" id="Tecnologia" name="Tecnologia" class="form-control input-lg form-control" >
<option value="">Seleccionar...</option><option value="Programadores">Programadores</option><option value="Audio y Video">Audio y Video</option><option value="Reparador de Pc">Reparador de Pc</option><option value="Alarmas y Cámaras de Seguridad">Alarmas y Cámaras de Seguridad</option><option value="Celulares y Telefonía">Celulares y Telefonía</option><option value="Consolas">Consolas</option><option value="Relojes">Relojes</option><option value="Domótica Hogar">Domótica Hogar</option><option value="Domótica Oficina">Domótica Oficina</option><option value="Domótica Industrias">Domótica Industrias</option></select></td>
</table>
</div>


<div class="col-md-4" id="Trans" style="display:none;">
<table><td>
<select style="background: #b01e59;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" id="Transporte" name="Transporte" class="form-control input-lg form-control" >
<option value="">Seleccionar...</option><option value="Choferes Profesionales">Choferes Profesionales</option><option value="Fletero">Fletes</option><option value="Mini-fletes">Mini-Fletes</option><option value="Mudanzas">Mudanzas</option><option value="Transporte Escolar">Transporte Escolar</option></select></td>
</table>
</div>

<div class="col-md-4" id="Viajes" style="display:none;">
<table><td>
<select style="background: #b01e59;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" id="viajes_y_turismo" name="Transporte" class="form-control input-lg form-control" >
<option value="">Seleccionar...</option><option value="Apart Hotel">Apart Hoteles</option><option value="Alquiler de Autos/Motos">Alquiler de Autos/Motos</option><option value="Convenciones Empresas">Convenciones Empresas</option><option value="Cuatriciclos">Cuatriciclos</option><option value="Departamentos">Departamentos</option><option value="Viaje de Egresados">Viajes de Egresados</option><option value="Pasajes de Omnibus">Pasajes de Omnibus</option><option value="Pasajes de Aviones">Pasajes de Aviones</option><option value="Pasajes de Lanchas">Pasajes Lanchas</option><option value="Fletero">Fletes</option><option value="Jubilados">Jubilados</option><option value="Inmobiliaria">Inmobiliarias</option><option value="Mini-fletes">Mini-Fletes</option><option value="Mudanzas">Mudanzas</option><option value="Transporte Escolar">Transporte Escolar</option><option value="Traslado al Aeropuerto">Traslado al Aeropuerto</option><option value="Turismo Aventura">Turismo Aventura</option><option value="Turismo Nacional">Turismo Nacional</option><option value="Turismo Local">Turismo Local</option><option value="Turismo Internacional">Turismo Internacional</option></select></td>
</table>
</div>


<!-- TERCER FILTRO SELECCIONABLE OPCIONABLE -->



<div class="col-md-4" id="Tasador" style="display:none;">
<table><td>
<select style="background: #d19432;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" name="" class="form-control input-lg form-control" >
  <option value="">Seleccionar...</option><option value="Tasador de Inmobiliaria">Inmobiliaria</option><option value="Tasador Judicial">Judiciales</option><option value="Tasador de Joyas y Arte">Joyas y Arte(Cuadros, Esculturas, etc)</option></select></td>
</table>
</div>

<div class="col-md-4" id="Seguros" style="display:none;">
<table><td>
<select style="background: #d19432;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" name="" class="form-control input-lg form-control" >
  <option value="">Seleccionar...</option><option value="Productor de Seguros de Automotor">Automotor</option><option value="Productor de Seguros de Vivienda">Vivienda</option><option value="Productor de Seguros Comerciales">Comerciales</option><option value="Productor de Seguros de Campos">Campos</option><option value="Productor de Seguros de Caución">Seguros de Caución</option><option value="Productor de Seguros de Vida">Seguros de Vida</option></select></td>
</table>
</div>

<div class="col-md-4" id="Gestor" style="display:none;">
<table><td>
<select style="background: #d19432;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" name="" class="form-control input-lg form-control" >
  <option value="">Seleccionar...</option><option value="Gestor del Automotor">Automotor</option><option value="Gestor Judicial">Judicial</option><option value="Gestor Inmobiliario">Inmobiliario</option></select></td>
</table>
</div>

<div class="col-md-4" id="Martilleros" style="display:none;">
<table><td>
<select style="background: #d19432;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" class="form-control input-lg form-control" >
<option value="">Seleccionar...</option><option value="Martillero de Contrato de Alquiler">Contrato de Alquiler </option><option value="Martillero de Vivienda / Comercial">Vivienda / Comercial</option><option value="Martillero Boleto de Compra/Venta">Boleto de Compra-Venta</option></select></td>
</table>
</div>

<div class="col-md-4" id="Mantenimiento_Hogar" style="display:none;">
<table><tr>
<select id="Mantenimiento" style="background: #d19432;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" class="form-control input-lg form-control" >
  <option value="">Seleccionar...</option><option value="Albañil">Albañiles</option><option value="Calefacción con Losa Radiante">Calefacción / Losa Radiante</option><option value="Calefacción con Calderas">Calefacción / Calderas</option><option value="Instalación de Aire Acondicionado">Instalación de Aire Acondicionado</option><option value="Mantenimiento de Aire Acondicionado">Mantenimiento de Aire Acondicionado</option><option value="Aire Acondicionado Instalación">Aire Acondicionado Instalación</option><option value="Carpintero de Madera">Carpinteros de Madera</option><option value="Carpintero de Aluminio">Carpinteros de Alumunio</option><option value="Decorador">Decoración y Ambientación</option><option value="Cerrajero Judicial">Cerrajeros Judiciales</option><option value="Cerrajero Digital">Cerrajeros Digitales</option><option value="Cerrajero de Locales">Cerrajeros Locales</option><option value="Cerrajero de Viviendas">Cerrajeros Vivienda</option><option value="Electricista de Vivienda">Electricistas de Vivienda</option><option value="Electricista de Oficina">Electricistas de Oficina</option><option value="Electricista de Comercio">Electricistas de Comercio</option><option value="Electricista de Industria">Electricistas para Industria</option><option value="Fumigación Vivienda">Fumigadores de Vivienda</option><option value="Fumigación Consorcios">Fumigadores de Consorcios</option><option value="Fumigación Comercio">Fumigadores de Comercios</option><option value="Fumigación Oficina">Fumigadores de Oficina</option><option value="Fumigación Campo">Fumigadores de Campo</option><option value="Herrero">Herrería</option><option value="Jardinero">Jardinería y exteriores</option><option value="Limpieza">Servicio doméstico</option><option value="Pintor de Vivienda">Pintores de Vivienda</option><option value="Pintor de Comercio">Pintores de Comercio</option><option value="Pintor de Oficina">Pintores de Oficina</option><option value="Pintor de Industria">Pintores de Industria</option><option value="Pintor del automotor">Pintores de Automotor</option><option value="Pisos Flotantes">Pisos flotantes</option><option value="Cemento Alisado">Cemento Alisado</option><option value="Colocación de Cerámica y Porcelanato">Colocación de Cerámica y Porcelanato</option><option value="Plomero">Plomeros</option><option value="Gasista">Gasistas</option><option value="Revestimiento en Durlock">Revestimiento en Durlock</option><option value="Revestimiento en Madera">Revestimiento en Madera</option></select></tr>
</table>
</div>

<div class="col-md-4" id="Abogados" style="display:none;">
<table><tr>
<select style="background: #d19432;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" id="abogados_tipos" class="form-control input-lg form-control" >
  <option value="">Seleccionar...</option><option value="Abogado de Accidente de tránsito">Accidentes de tránsito</option><option value="Abogado de Derecho Familiar">Derecho Familiar</option><option value="Abogado de Derecho Penal">Derecho Penal</option><option value="Abogado de Derecho Civil">Derecho Civil</option></select></tr>
</table>
</div>

<div class="col-md-4" id="Instalación" style="display:none;">
<table><tr>
<select style="background: #d19432;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" id="abogados_tipos" class="form-control input-lg form-control" >
  <option value="">Seleccionar...</option><option value="Servicio de Aire Acondicionado">Instalación y reparación de Aire Acondicionado</option><option value="Servicio de software">Instalación de Software</option><option value="Servicio de Cámaras de Seguridad">Instalación de Cámaras de Seguridad</option><option value="Alarmas y Cámaras de Seguridad">Alarmas y Cámaras de Seguridad</option></select></tr>
</table>
</div>

<div class="col-md-4" id="Obras" style="display:none;">
<table><tr>
<select style="background: #d19432;width: 340px;font-size: 20px;height: 47px;color: white;margin-bottom: 30px;" id="Obras_Construcción" class="form-control input-lg form-control" >
  <option value="">Seleccionar...</option><option value="Albañil">Albañiles</option><option value="Domótica Hogar">Domótica Hogar</option><option value="Domótica Oficina">Domótica Oficina</option><option value="Domótica Industrias">Domótica Industrias</option><option value="Electricista de Vivienda">Electricistas de Vivienda</option><option value="Electricista de Oficina">Electricistas de Oficina</option><option value="Electricista de Comercio">Electricistas de Comercio</option><option value="Electricista de Industria">Electricistas para Industria</option><option value="Fumigación Vivienda">Fumigadores de Vivienda</option><option value="Fumigación Consorcios">Fumigadores de Consorcios</option><option value="Fumigación Comercio">Fumigadores de Comercios</option><option value="Fumigación Oficina">Fumigadores de Oficina</option><option value="Fumigación Campo">Fumigadores de Campo</option><option value="Bicho Taladro">Bicho Taladro</option><option value="Pisos de Cemento">Pisos de Cemeneto Alisado</option><option value="Plomero">Plomeros</option><option value="Gasista">Gasistas</option><option value="Revestimiento en Durlock">Revestimiento en Durlock</option><option value="Revestimiento en Madera">Revestimiento en Madera</option><option value="Pisos Flotantes">Pisos Flotantes</option><option value="Colocación de cerámica">Colocación de cerámica</option><option value="Colocación de Porcelanato">Colocación de Porcelanato</option><option value="Construcción de Cabañas">Construcción de Cabañas</option><option value="Revestimiento de Interiores">Revestimiento de Interiores</option><option value="Colocación Placas Anti-Humedad">Colocación Placas Anti-Humedad</option><option value="Techos">Techistas</option></select></tr>
</table>
</div>

</div>
</div>

<style>
    .a {
         background-image: url("../img/btn_1.png");
    }
    .b{
        background-image: url("../img/btn_2.png");
    }
    .c{
        background-image: url("../img/btn_3.png");
    }
     .d{
        background-image: url("../img/btn_4.png");
    }
</style>


<div id="contenedor-cartas" class="container">
<div class="row" style="margin:0">
<div class="card-columns">
    <table id="table">
      <?php
      $x = 1;
      $clase_btn = 'a';
        $arraySpecialist = Specialist::all();
        for ($i = 0 ; $i < count($arraySpecialist); $i++){

    switch ($clase_btn) {
            case 'a':
            $clase_btn = '../img/btn_1.png';
            break;
        case '../img/btn_1.png':
            $clase_btn = '../img/btn_2.png';
            break;
        case '../img/btn_2.png':
            $clase_btn = '../img/btn_3.png';
            break;
        case '../img/btn_3.png':
            $clase_btn = '../img/btn_4.png';
            break;
        case '../img/btn_4.png':
            $clase_btn = '../img/btn_1.png';
            break;
    }
            ?>

        <tr>
            <td>
        <div id="card" class="card" style="position: relative;">
        <img id="img-prof" class="card-img-top" height="171" width="251" alt="Card image cap" src="{{ $arraySpecialist[$i]['ruta'] }}" >
        <div class="card-body" id="card-body-prof">
            <h5 class="card-title text-center" id="name">  {{ $arraySpecialist[$i]['name'] . ' ' . $arraySpecialist[$i]['lastName']}}</h5>
            <p class="card-text text-center" id="city"> <img src="../img/zone.png"> {{ $arraySpecialist[$i]['city'] }}</p>
             <p style="display:none" class="card-text text-center">{{$arraySpecialist[$i]['category']}}</p>
             <p style="display:none" class="card-text text-center">{{$arraySpecialist[$i]['subCategory']}}</p>
             <p style="display:none" class="card-text text-center">{{$arraySpecialist[$i]['description']}}</p>
            <p class="card-text text-center" id="specialtyCard">{{ $arraySpecialist[$i]['specialty'] }}   </p>
            <?php $points = $arraySpecialist[$i]['points'];
            if(empty($points)){?>
                    <div style="background:#cc4a5e; height:30px;width:100%;color:white;text-align:center;font-weight:bold;border-style:solid;border-width:1px;border-color:#c1253d;border-radius:3px;">Sin puntuar aún</div>
            <?php }
            if($points >=9 && $points <=9.6){ ?>
            <div style="  display: flex;align-items: center;">
              <div style="margin: 0 auto">
                <img height="30" width="30" src="../img/Estrella.png" />
                <img height="30" width="30" src="../img/Estrella.png" />
                <img height="30" width="30" src="../img/Estrella.png" />
                <img height="30" width="30" src="../img/Estrella.png" />
                <img height="30" width="30" src="../img/Estrella-90.png" />
              </div></div>
                <?php }

            if($points >=8 && $points <=9){ ?>
            <div style="  display: flex;
                 align-items: center;"><div style="margin: 0 auto">
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella-80.png" />
            </div></div>
                <?php }
                 if($points >=7 && $points <8){ ?>
            <div style="  display: flex;
                 align-items: center;"><div style="margin: 0 auto">
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella-40.png" />
                </div></div>
                <?php }
                if($points >=6 && $points <7){ ?>
            <div style="  display: flex;
                 align-items: center;"><div style="margin: 0 auto">
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella-10.png" />
            </div></div>
            <?php }
                if($points >=5 && $points <6){ ?>
            <div style="  display: flex;
                 align-items: center;"><div style="margin: 0 auto">
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrellagris.png" />
            </div></div>
             <?php }
                if($points >=4 && $points <5){ ?>
            <div style="  display: flex;
                 align-items: center;"><div style="margin: 0 auto">
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella.png" />
             <img height="30" width="30" src="../img/Estrellagris.png" />
            <img height="30" width="30" src="../img/Estrellagris.png" />
            </div></div>
             <?php }
                if($points >=3 && $points <4){ ?>
            <div style="  display: flex;
                 align-items: center;"><div style="margin: 0 auto">
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella.png" />
             <img height="30" width="30" src="../img/Estrella-40.png" />
             <img height="30" width="30" src="../img/Estrellagris.png" />
            <img height="30" width="30" src="../img/Estrellagris.png" />
            </div></div>
              <?php }
                if($points >=2 && $points <3){ ?>
            <div style="  display: flex;
                 align-items: center;"><div style="margin: 0 auto">
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella.png" />
               <img height="30" width="30" src="../img/Estrellagris.png" />
             <img height="30" width="30" src="../img/Estrellagris.png" />
            <img height="30" width="30" src="../img/Estrellagris.png" />
            </div></div>
             <?php }
                if($points >=1 && $points <2){ ?>
            <div style="  display: flex;
                 align-items: center;"><div style="margin: 0 auto">
            <img height="30" width="30" src="../img/Estrella.png" />
               <img height="30" width="30" src="../img/Estrellagris.png" />
               <img height="30" width="30" src="../img/Estrellagris.png" />
             <img height="30" width="30" src="../img/Estrellagris.png" />
            <img height="30" width="30" src="../img/Estrellagris.png" />
            </div></div>
                <?php }
                if($points >=9.6){ ?>
            <div style="  display: flex;
                 align-items: center;"><div style="margin: 0 auto">
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella.png" />
            <img height="30" width="30" src="../img/Estrella.png" />
            </div></div>
                <?php }

                ?><br>
             <div style="display: flex;align-items: center;">
                <div style="margin: 0 auto">
                    <form action="/perfilSpecialist" method="get">
                        <input type="hidden" name="idSpecialist" value="{{ $arraySpecialist[$i]['id'] }}" />
                        <input type="image" style="height: 45" src="{{$clase_btn}}" alt="Submit Form" />
                    </form>
                </div>
             </div>
        </div>
        </td></tr>

    <?php } ?>
        </table>
</div></div></div></td></tr>

<script>
$("#btn-filtros").click (function(){
    $("#filtros").show("slow");
});
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
    $("#Obras").css("display", "none");
  }
  if(sel2 === 'Asesoramiento Contable y Legal'){
    $("#Asesoramiento_Contable").show("slow");
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
    $("#Obras").css("display", "none");
  }else{
    $("#Asesoramiento_Contable").css("display", "none");
  }

  if(sel2 === 'Viajes y Turismo'){
    $("#Viajes").show("slow");
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
    $("#Obras").css("display", "none");
  }else{
    $("#Viajes").css("display", "none");
  }
  if(sel2 === 'Imprenta'){
    $("#Imprenta").show("slow");
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
    $("#Obras").css("display", "none");
  }else{
    $("#Imprenta").css("display", "none");
  }
  if(sel2 === 'Belleza y Cuidado Personal'){
    $("#Belleza_y_Cuidado").show("slow");
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
    $("#Obras").css("display", "none");
  }else{
    $("#Belleza_y_Cuidado").css("display", "none");
  }
  if(sel2 === 'Comunicación y Diseño'){
    $("#Comunicacion").show("slow");
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
    $("#Obras").css("display", "none");
  }else{
    $("#Comunicacion").css("display", "none");
  }
  if(sel2 === 'Cursos y Clases'){
    $("#Cursos").show("slow");
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
    $("#Obras").css("display", "none");
  }else{
    $("#Cursos").css("display", "none");
  }
  if(sel2 === 'Fiestas y Eventos'){
    $("#Fiestas").show("slow");
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
    $("#Obras").css("display", "none");
  }else{
    $("#Fiestas").css("display", "none");
  }
  if(sel2 === 'Fotografía, Música y Cine'){
    $("#Fotografia").show("slow");
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
    $("#Obras").css("display", "none");
  }else{
    $("#Fotografia").css("display", "none");
  }
  if(sel2 === 'Hogar y Construcción'){
    $("#Hogar").show("slow");
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
    $("#Obras").css("display", "none");
  }else{
    $("#Hogar").css("display", "none");
  }
  if(sel2 === 'Mantenimiento de Vehículos'){
    $("#Vehiculos").show("slow");
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
    $("#Obras").css("display", "none");
  }else{
    $("#Vehiculos").css("display", "none");
  }
  if(sel2 === 'Medicina y Salud'){
    $("#Medicina").show("slow");
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
    $("#Obras").css("display", "none");
  }else{
    $("#Medicina").css("display", "none");
  }
  if(sel2 === 'Ropa y Moda'){
    $("#Ropa").show("slow");
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
    $("#Obras").css("display", "none");
  }else{
    $("#Ropa").css("display", "none");
  }
  if(sel2 === 'Servicios para Mascotas'){
    $("#Mascotas").show("slow");
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
    $("#Obras").css("display", "none");
  }else{
    $("#Mascotas").css("display", "none");
  }
  if(sel2 === 'Servicios para Oficina'){
    $("#Oficinas").show("slow");
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
    $("#Obras").css("display", "none");
  }else{
    $("#Oficinas").css("display", "none");
  }

  if(sel2 === 'Tecnología'){
    $("#Tecno").show("slow");
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
    $("#Obras").css("display", "none");
  }else{
    $("#Tecno").css("display", "none");
  }

  if(sel2 === 'Transporte'){
    $("#Trans").show("slow");
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
    $("#Obras").css("display", "none");
  }else{
    $("#Trans").css("display", "none");
  }

  });
</script>


<script>
$("#Hogar_contruccion").change(function(){
    var sel5 = $("#Asesoramiento_Contable_y_Legal").val();
    var sel6 = sel5.toString();
      if(sel6 === 'Martilleros Públicos'){
        $("#Martilleros").show("slow");
      }else{
        $("#Martilleros").css("display", "none");
      }
  });
</script>


<script>
$("#Asesoramiento_Contable_y_Legal").change(function(){
    var sel5 = $("#Asesoramiento_Contable_y_Legal").val();
    var sel6 = sel5.toString();
      if(sel6 === 'Martilleros Públicos'){
        $("#Martilleros").show("slow");
      }else{
        $("#Martilleros").css("display", "none");
      }
  });
</script>

<script>
$("#Asesoramiento_Contable_y_Legal").change(function(){
    var sel5 = $("#Asesoramiento_Contable_y_Legal").val();
    var sel6 = sel5.toString();
      if(sel6 === 'Gestores'){
        $("#Gestor").show("slow");
      }else{
        $("#Gestor").css("display", "none");
      }
  });
</script>

<script>
$("#Asesoramiento_Contable_y_Legal").change(function(){
    var abogado = $("#Asesoramiento_Contable_y_Legal").val();
    var abogadoo = abogado.toString();
      if(abogadoo === 'Tasadores'){
        $("#Tasador").show("slow");
      }else{
        $("#Tasador").css("display", "none");
      }
  });
</script>

<script>
$("#Asesoramiento_Contable_y_Legal").change(function(){
    var abogado = $("#Asesoramiento_Contable_y_Legal").val();
    var abogadoo = abogado.toString();
      if(abogadoo === 'Abogados'){
        $("#Abogados").show("slow");
      }else{
        $("#Abogados").css("display", "none");
      }
  });
</script>

<script>
$("#Asesoramiento_Contable_y_Legal").change(function(){
    var abogado = $("#Asesoramiento_Contable_y_Legal").val();
    var abogadoo = abogado.toString();
      if(abogadoo === 'Productores de Seguros'){
        $("#Seguros").show("slow");
      }else{
        $("#Seguros").css("display", "none");
      }
  });
</script>

<script>
$("#Hogar_y_Construccion").change(function(){
    var Mantenimiento = $("#Hogar_y_Construccion").val();
    var Mantenimientoo = Mantenimiento.toString();
      if(Mantenimientoo === 'Instalación y Servicio Técnico'){
        $("#Instalación").show("slow");
      }else{
        $("#Instalación").css("display", "none");
      }
  });
</script>

<script>
$("#Hogar_y_Construccion").change(function(){
    var Mantenimiento = $("#Hogar_y_Construccion").val();
    var Mantenimientoo = Mantenimiento.toString();
      if(Mantenimientoo === 'Obras y Construcción'){
        $("#Obras").show("slow");
      }else{
        $("#Obras").css("display", "none");
      }
  });
</script>


<script>
$("#Hogar_y_Construccion").change(function(){
    var Mantenimiento = $("#Hogar_y_Construccion").val();
    var Mantenimientoo = Mantenimiento.toString();
      if(Mantenimientoo === 'Mantenimiento del Hogar'){
        $("#Mantenimiento_Hogar").show("slow");
      }else{
        $("#Mantenimiento_Hogar").css("display", "none");
      }
  });
</script>

<script>
$(document).ready(function(){
  $("#categoriaPrincipal").on("change", function() {
    var value = $(this).val().toLowerCase();
    $("#table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script>
$(document).ready(function(){
  $("#Asesoramiento_Contable_y_Legal").on("change", function() {
    var value = $(this).val().toLowerCase();
    $("#table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script>
$(document).ready(function(){
  $("#Mantenimiento").on("change", function() {
    var value = $(this).val().toLowerCase();
    $("#table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script>
$(document).ready(function(){
  $("#Hogar_y_Construccion").on("change", function() {
    var value = $(this).val().toLowerCase();
    $("#table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script>
$(document).ready(function(){
  $("#abogados_tipos").on("change", function() {
    var value = $(this).val().toLowerCase();
    $("#table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

@endsection
