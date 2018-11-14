@extends('menu')
@section('cuerpo')


<?php

use App\Person;
use App\Problem;
use App\Status;
use App\activeProblem;
use App\Contrato;
use App\Specialist;

if(Session::has('username')){
$user = Person::where('email','=',Session('username'))->get();
$mensajes = activeProblem::where('idUser','=',$user[0]['id'])->orderby('created_at', 'DESC')->get();
?>

<html>
<head>
    <title>Panel de {{ $user[0]['name'] }} - WOUU! </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body style="background: #dce8e6;">

     <script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>

    <div class="loader"></div>
    <style>
        .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('img/loader.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}
    </style>

  <!DOCTYPE html>
      <head>
      <link rel="shortcut icon" href="../img/ico.ico">
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
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
			<link type="text/css" rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' />
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>


      <title>Wou! - Panel de {{ $user[0]['name'] . $user[0]['lastName'] }} </title>
      </head>
  <body style="background-image: url('../img/fondo.jpg')";>

    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Publique su problema - Wou!</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           <div class="container" style="max-width:480px;">
             <p>Para que los profesionales del sitio puedan ofrecerle una solución, debe completar todos los campos del siguiente formulario. En la parte de la descripción debe ser lo más específico posible, de esta manera obtendrá una respuesta de manera más rápida. (En seleccionar archivo debe subir una imagen de su problema).
              <form id="formProblem2" class="form-group" action="/saveProblem" method="POST" enctype="multipart/form-data">
           <select id="categoriaPrincipal2" name="category" class="form-control input-lg" onchange="myFunction()" required>
           <option value="">¿Qué es lo que estás buscando?</option><option value="Asesoramiento Contable y Legal">Asesoramiento Contable y Legal</option><option value="Belleza y Cuidado Personal">Belleza y Cuidado Personal</option><option value="Comunicación y Diseño">Comunicación y Diseño</option><option value="Cursos y Clases">Cursos y Clases</option><option value="Fiestas y Eventos">Fiestas y Eventos</option><option value="Fotografía, Música y Cine">Fotografía, Música y Cine</option><option value="Hogar y Construcción">Hogar y Construcción</option><option value="Imprenta">Imprenta</option><option value="Mantenimiento de Vehículos">Mantenimiento de Vehículos</option><option value="Medicina y Salud">Medicina y Salud</option><option value="Ropa y Moda">Ropa y Moda</option><option value="Servicio para Mascotas">Servicio para Mascotas</option><option value="Servicio para Oficina">Servicio para Oficina</option><option value="Tecnología">Tecnología</option><option value="Transporte">Transporte</option><option value="Viajes y Turismo">Viajes y Turismo</option><option value="Otros Servicios">Otros Servicios</option></select>

          <!-- SEGUNDO FILTRO -->
          <br>
          <div id="Asesoramiento_Contable2" style="display:none;">
          <select id="Asesoramiento_Contable_y_Legal2" name="Asesoramiento" class="form-control input-lg form-control">
            <option value="">¿A qué rama perteneces? </option><option value="Abogados y Estudios Jurídicos">Abogados y Estudios Jurídicos</option><option value="Contadores y Estudios">Contadores y Estudios</option><option value="Gestores">Gestores</option><option value="Martilleros Públicos">Martilleros Públicos</option><option value="Productores de Seguros">Productores de Seguros</option><option value="Despachantes de Aduana">Despachantes de Aduana</option><option value="Tasadores">Tasadores</option></select>
          </div>

          <div id="Belleza_y_Cuidado2" style="display:none;">
          <select id="Belleza_y_Cuidado_Personal2" name="Belleza" class="form-control input-lg form-control">
          <option value="">Seleccionar...</option><option value="Maquilladora y Peinadora">Maquilladoras y Peinadoras</option><option value="Masajista">Masajes y Tratamientos</option><option value="Cosmetólogo">Cosmetología</option><option value="Peluquero">Peluquería</option><option value="Tatuajes y Piercings">Tatuajes y Piercings</option><option value="Estética">Estética</option></select>
          </div>

          <div id="Imprenta2" style="display:none;">
          <select id="Imprenta_Profesional2" name="Impreciones" class="form-control input-lg form-control">
          <option value="">Seleccionar...</option><option value="Imprenta de Talonarios de AFIP">Talonarios de AFIP</option><option value="Imprenta de Tarjetas Personales">Tarjetas Personales</option><option value="Imprenta de Tarjetas de 15 años">15 años </option><option value="Imprenta de Tarjetas de Casamientos ">Casamientos</option><option value="Imprenta de Divorcios">Divorcios</option><option value="Imprenta de Modulos Universitarios">Imprenta de Modulos Universitarios </option></select>
          </div>

          <div id="Comunicacion2" style="display:none;">
          <select id="Comunicacion_y_Diseño2" name="Comunicacion_diseño" class="form-control input-lg form-control" >
            <option value="">Seleccionar...</option><option value="Diseñador Gráfico">Diseñador Gráfico</option><option value="Marketing y Publicidad">Marketing y Publicidad</option><option value="Traductor de Inglés">Traductor de Inglés</option><option value="Traductor de Francés">Traductor de Francés</option><option value="Traductor de Portugués">Traductor de Portugués</option><option value="Locutor">Locutor</option></select>
          </div>

          <div id="Cursos2" style="display:none;">
          <select id="Cursos_y_Clases2" name="Cursos_Clases" class="form-control input-lg" >
            <option value="">Seleccionar...</option><option value="Computación e Informática">Computación e Informática</option><option value="Apoyo Escolar Primario">Apoyo Escolar Primario</option><option value="Apoyo Escolar Secundario">Apoyo Escolar Secundario</option><option value="Instrumentos Musicales">Instrumentos Musicales</option><option value="Clases de Manejo">Clases de Manejo</option><option value="Curso de Maquillaje">Curso de Maquillaje</option><option value="Fotografía">Fotografía</option></select>
          </div>

          <div id="Fiestas2" style="display:none;">
          <select id="Fiestas_y_Eventos2" name="Fiestas_Eventos" class="form-control input-lg form-control" >
          <option value="">Seleccionar...</option><option value="Servicio Audiovisual">Servicio Audiovisual</option><option value="Animador de Fiestas Infantiles">Animador de Fiestas Infantiles</option><option value="Animador de Fiestas de 15">Animador de Fiestas de 15</option><option value="Animador de Fiestas de Casamiento">Animador de Fiestas de Casamiento</option><option value="Bebidas">Bebidas</option><option value="Catering">Catering</option><option value="Alquiler de Equipos">Alquiler de Equipos</option></select>
          </div>

          <div id="Fotografia2" style="display:none;">
          <select id="Fotografia_Musica_y_Cine2" name="Fotografia_Musica" class="form-control input-lg form-control" >
          <option value="">Seleccionar...</option><option value="Fotografía">Fotografía</option><option value="Música">Música</option><option value="Shotting">Shotting</option><option value="Cine y Televisión">Cine y Televisión</option></select>
          </div>

          <div id="Hogar2" style="display:none;">
          <select id="Hogar_y_Construccion2" name="hogar_construccion" class="form-control input-lg form-control" >
            <option value="">Seleccionar...</option> <option value="Cabañas Construcción">Cabañas / Construccion</option><option value="Cabañas Mantenimiento">Cabañas / Mantenimiento</option> <option value="Mantenimiento del Hogar">Mantenimiento del Hogar</option><option value="Obras y Construcción">Obras y Construcción</option><option value="Instalación y Servicio Técnico">Instalación y Servicio Técnico</option></select>
          </div>

          <div id="Vehiculos2" style="display:none;">
          <select id="Mantenimiento_de_Vehiculos2" name="Mantenimiento_vehiculos" class="form-control input-lg form-control" >
          <option value="">Seleccionar...</option><option value="Electrónica de Vehículos">Electrónica de Vehículos</option><option value="Electricidad de Vehiculos">Electricidad de Vehículos</option><option value="Performance de Vehículos">Permormance de Vehículos</option><option value="Gomero">Gomero</option><option value="Mecánico de autos">Mecánico de autos</option><option value="Mecánico de motos">Mecánico de motos</option><option value="Taller de Autos">Tallere de Autos</option><option value="Taller de Chapa y Pintura">Taller de Chapa y Pintura</option></select>
          </div>

          <div id="Medicina2" style="display:none;">
          <select id="Medicina_y_Salud2" name="Medicina_salud" class="form-control input-lg form-control" >
          <option value="">Seleccionar...</option><option value="Psicólogo">Psicólogo</option><option value="Psicopedagoga">Psicopedagoga</option><option value="Odontólogo">Odontólogo</option><option value="Enfermero">Enfermero</option><option value="Acompañante Terapéutico">Acompañante Terapéutico</option><option value="Geriátrico">Geriátrico</option><option value="Podólogo">Podólogo</option><option value="Cirujana Plástica">Cirugía Plástica</option></select>
          </div>

          <div id="Ropa2" style="display:none;">
          <select id="Ropa_y_Moda2" name="Ropa_Moda" class="form-control input-lg form-control" >
          <option value="">Seleccionar...</option><option value="Fabricante de ropa para Hospitales">Fabricante de Ropa para Hospitales</option><option value"Fabricante de ropa para Gastronomía">Fabricante de Ropa para Gastronomía</option><option value="Fabricante de ropa para Hospitales">Fabricante de Ropa para Hospitales</option><option value="Fabricante de ropa para Clínicas">Fabricante de ropa para Clínicas</option><option value="Fabricante de ropa para Industrias">Fabricante de Ropa para Industrias</option><option value="Diseñadora de Moda">Diseñadora de Moda en Gral.</option><option value="Corte y Confección">Corte y Confección</option></select>
          </div>

          <div id="Mascotas2" style="display:none;">
          <select id="Servicio_para_Mascotas2" name="Servicio_mascotas" class="form-control input-lg form-control" >
          <option value="">Seleccionar...</option><option value="Adriestramiento Canino">Adriestramiento Canino</option><option value="Clínica Veterinaria">Clínicas Veterinarias</option><option value="Hospedaje para Mascotas">Hospedajes</option><option value="Internación para Mascotas">Internación de Mascotas</option><option value="Paseador de Perros">Paseador de Perros</option><option value="Peluquería Canina">Peluquería Canina</option></select>
          </div>

          <div id="Oficinas2" style="display:none;">
          <select id="Servicio_para_Oficinas2" name="Servicio_Oficina" class="form-control input-lg form-control" >
          <option value="">Seleccionar...</option><option value="Limpieza Profesional">Limpieza Profesional</option><option value="Electricista de Oficina">Electricista de Oficina</option><option value="Fumigación Oficina">Fumigador de Oficina</option><option value="Decoración de oficinas">Decorador de Oficina</option><option value="Servicio de Aire Acondicionado">Instalación y Reparación de Aire Acondicionado</option><option value="Pintor de Oficina">Pintores de Oficina</option><option value="Servicio de telefónia">Telefónia para Oficina</option><option value="Servicio de software">Instalación de Software</option><option value="Servicio de Cámaras de Seguridad">Instalación de Cámaras de Seguridad</option></select>
          </div>

          <div id="Tecno2" style="display:none;">
          <select id="Tecnologia2" name="Tecnología_Pro" class="form-control input-lg form-control" >
          <option value="">Seleccionar...</option><option value="Desarrollador de Software">Programador</option><option value="Audio y Video">Audio y Video</option><option value="Reparador de Pc">Reparador de Pc</option><option value="Alarmas y Cámaras de Seguridad">Alarmas y Cámaras de Seguridad</option><option value="Reparador de Celulares y Telefonía">Reparador de Celulares y Telefonía</option><option value="Service de Consolas">Servis de Consolas</option><option value="Reparación de Relojes">Reparador de Relojes</option><option value="Domótica Hogar">Domótica Hoga</option><option value="Domótica Oficina">Domótica Oficina</option><option value="Domótica Industrias">Domótica Industrias</option></select>
          </div>

          <div id="Trans2" style="display:none;">
          <select id="Transporte2" name="Transporte_com" class="form-control input-lg form-control" >
          <option value="">Seleccionar...</option><option value="Chofer Profesional">Chofer Profesional</option><option value="Fletero">Fletes</option><option value="Mini-fletes">Mini-Fletes</option><option value="Mudanzas">Mudanzas</option><option value="Transporte Escolar">Transporte Escolar</option></select>
          </div>

          <div id="Viajes2" style="display:none;">
          <select id="viajes_y_turismo2" name="Viajes_turismo" class="form-control input-lg form-control" >
          <option value="">Seleccionar...</option><option value="Apart Hotel">Apart Hoteles</option><option value="Alquiler de Autos/Motos">Alquiler de Autos/Motos</option><option value="Convenciones de Empresas">Convenciones de Empresas</option><option value="Cuatriciclos">Cuatriciclos</option><option value="Departamentos">Departamentos</option><option value="Viajes de Egresados">Viajes de Egresados</option><option value="Pasajes de Omnibus">Pasajes de Omnibus</option><option value="Pasajes de Aviones">Pasajes de Aviones</option><option value="Pasajes de Lanchas">Pasajes Lanchas</option><option value="Fletero">Fletes</option><option value="Jubilados">Jubilados</option><option value="Inmobiliaria">Inmobiliarias</option><option value="Mini-fletes">Mini-Fletes</option><option value="Mudanzas">Mudanzas</option><option value="Transporte Escolar">Transporte Escolar</option><option value="Traslado al Aeropuerto">Traslado al Aeropuerto</option><option value="Turismo Aventura">Turismo Aventura</option><option value="Turismo Nacional">Turismo Nacional</option><option value="Turismo Local">Turismo Local</option><option value="Turismo Internacional">Turismo Internacional</option></select>
        </div><br>


          <!-- TERCER FILTRO SELECCIONABLE OPCIONABLE -->

          <div id="Tasador2" style="display:none;">
          <select id="Tasador_es2" name="specialty" class="form-control input-lg form-control" >
            <option value="">Seleccionar...</option><option value="Tasador de Inmobiliaria">Inmobiliaria</option><option value="Tasador Judicial">Judiciales</option><option value="Tasador de Joyas y Arte">Joyas y Arte(Cuadros, Esculturas, etc)</option></select>
          </div>

          <div id="Seguros2" style="display:none;">
          <select id="Productoras_Seguros2" name="specialty" class="form-control input-lg form-control" >
            <option value="">Seleccionar...</option><option value="Productor de Seguros de Automotor">Seguros para Automotor</option><option value="Productor de Seguros de Vivienda">Seguros para Vivienda</option><option value="Productor de Seguros Comerciales">Seguros para Comercios</option><option value="Productor de Seguros de Campos">Seguros para Campos</option><option value="Productor de Seguros de Caución">Seguros de Caución</option><option value="Productor de Seguros de Vida">Seguros de Vida</option></select>
          </div>

          <div id="Gestor2" style="display:none;">
          <select name="Gestores" class="form-control input-lg form-control" >
            <option value="">Seleccionar...</option><option value="Gestor Automotor">Gestor Automotor</option><option value="Gestor Judicial">Gestor Judicial</option><option value="Gestor Inmobiliario">Gestor Inmobiliario</option></select>
          </div>

          <div id="Martilleros2" style="display:none;">
          <select name="Martilleros" id="MartillerosP2" class="form-control input-lg form-control" >
          <option value="">Seleccionar...</option><option value="Martillero de Contrato de Alquiler">Contrato de Alquiler </option><option value="Martillero de Vivienda / Comercial">Vivienda / Comercial</option><option value="Martillero de Boleto de Compra/Venta">Boleto de Compra-Venta</option></select>
          </div>

          <div id="Mantenimiento_Hogar2" style="display:none;">
          <select id="Mantenimiento2" name="Mantenimiento_del_hogar" class="form-control input-lg form-control" >
            <option value="">Seleccionar...</option><option value="Albañil">Albañiles</option><option value="Calefacción con Losa Radiante">Calefacción / Losa Radiante</option><option value="Calefacción con Calderas">Calefacción / Calderas</option><option value="Instalación de Aire Acondicionado">Instalación de Aire Acondicionado</option><option value="Mantenimiento de Aire Acondicionado">Mantenimiento de Aire Acondicionado</option><option value="Aire Acondicionado Instalación">Aire Acondicionado Instalación</option><option value="Carpintero de Madera">Carpinteros de Madera</option><option value="Carpintero de Aluminio">Carpinteros de Alumunio</option><option value="Decorador">Decoración y Ambientación</option><option value="Cerrajero Judicial">Cerrajeros Judiciales</option><option value="Cerrajero Digital">Cerrajeros Digitales</option><option value="Cerrajero de Locales">Cerrajeros Locales</option><option value="Cerrajero de Viviendas">Cerrajeros Vivienda</option><option value="Electricista de Vivienda">Electricistas de Vivienda</option><option value="Electricista de Oficina">Electricistas de Oficina</option><option value="Electricista de Comercio">Electricistas de Comercio</option><option value="Electricista de Industria">Electricistas para Industria</option><option value="Fumigación Vivienda">Fumigadores de Vivienda</option><option value="Fumigación Consorcios">Fumigadores de Consorcios</option><option value="Fumigación Comercio">Fumigadores de Comercios</option><option value="Fumigación Oficina">Fumigadores de Oficina</option><option value="Fumigación Campo">Fumigadores de Campo</option><option value="Herrero">Herrería</option><option value="Jardinero">Jardinería y exteriores</option><option value="Limpieza">Servicio doméstico</option><option value="Pintor de Vivienda">Pintores de Vivienda</option><option value="Pintor de Comercio">Pintores de Comercio</option><option value="Pintor de Oficina">Pintores de Oficina</option><option value="Pintor de Industria">Pintores de Industria</option><option value="Pintor del automotor">Pintores de Automotor</option><option value="Pisos Flotantes">Pisos flotantes</option><option value="Cemento Alisado">Cemento Alisado</option><option value="Colocación de Cerámica y Porcelanato">Colocación de Cerámica y Porcelanato</option><option value="Plomero">Plomeros</option><option value="Gasista">Gasistas</option><option value="Revestimiento en Durlock">Revestimiento en Durlock</option><option value="Revestimiento en Madera">Revestimiento en Madera</option></select>
          </div>

          <div id="Abogados2" style="display:none;">
          <select name="abogados_tipos" id="abogados2" class="form-control input-lg form-control" >
            <option value="">Seleccionar...</option><option value="Abogado de Accidente de tránsito">Abogado de Accidentes de tránsito</option><option value="Abogado de Derecho Familiar">Abogado de Derecho Familiar</option><option value="Abogado de Derecho Penal">Abogado de Derecho Penal</option><option value="Abogado de Derecho Civil">Abogado de Derecho Civil</option></select>
          </div>

          <div id="Instalación2" style="display:none;">
          <select name="Instalacion_tecnico" id="abogados_tipos2" class="form-control input-lg form-control" >
            <option value="">Seleccionar...</option><option value="Servicio de Aire Acondicionado">Instalación y reparación de Aire Acondicionado</option><option value="Servicio de software">Instalación de Software</option><option value="Servicio de Cámaras de Seguridad">Instalación de Cámaras de Seguridad</option><option value="Alarmas y Cámaras de Seguridad">Alarmas y Cámaras de Seguridad</option></select>
          </div>

          <div id="Obras2" style="display:none;">
          <select name="specialty" id="Obras_Construcción2" class="form-control input-lg form-control" >
            <option value="">Seleccionar...</option><option value="Albañil">Albañiles</option><option value="Pisos de Cemento">Pisos de Cemeneto Alisado</option><option value="Pisos Flotantes">Pisos Flotantes</option><option value="Colocación de cerámica">Colocación de cerámica</option><option value="Colocación de Porcelanato">Colocación de Porcelanato</option><option value="Construcción de Cabañas">Construcción de Cabañas</option><option value="Revestimiento de Interiores">Revestimiento de Interiores</option><option value="Colocación Placas Anti-Humedad">Colocación Placas Anti-Humedad</option><option value="Techos">Techistas</option></select>
          </div><br>
          <script>
          function showUser2(str) {
              if (str == "") {
                  document.getElementById("ciudades2").innerHTML = "";
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
                          document.getElementById("ciudades2").innerHTML = this.responseText;
                      }
                  };
                  xmlhttp.open("GET","../province/provinces.php?q="+str,true);
                  xmlhttp.send();
              }
          }
          </script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
                 <div class="alert alert-success text-center">Ingresa la respectiva <strong>zona</strong> </div>
                 <input type="hidden" name="idUser" value="{{$user[0]['id']}}">
                 <select id="Province2" name="users" class="form-control input-lg" onchange="showUser2(this.value)" required>
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
                 <div id="ciudades2">
                 <select name="Buenos_Aires" class="form-control input-lg form-control">
                   <option>Seleccionar Provincia Primero..</option>
                 </select>
                 </div>

                 <br>
                 <div class="alert alert-warning text-center">Describe tu problema lo más posible</div>
                   <textarea type="text" class="form-control" name="description" placeholder="A continuación escriba detalles del problema" required ></textarea> <br>
                     <input id="file" type="file" name="file" class="inputfile" />
                     <label style="pointer-events: auto; position: relative;" for="file"><img height="60" src="../img/addimg.png"><span style="color:gray">Imagen del problema</span> </label><br>
                   <input type="hidden" value="{{csrf_token()}}" name="_token" >
           </div>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
           <input id="btn-problem2" type="submit" class="btn btn-primary" value="Enviar problema">
       </form>
         </div>
       </div>
     </div>
   </div>

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


</div><br><br><br><br>

<?php

if(Session::has('username')){
$user = Person::where('email','=',Session('username'))->get();

    if(!$user->isEmpty()){

if ($user[0]['activate'] == 0){?>

<div class="alert alert-danger text-center">Actualmente <strong> NO</strong> puede realizar ninguna acción en el sitio. <strong>Debe verificar su cuenta de E-mail !</strong> revise su casilla y siga las instrucciones... </div>

<?php } ?>

<div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Cambio de contraseña - Wou!</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="container">
<p>Para cambiar la contraseña ingrese en primer lugar la contraseña actual. Y luego la nueva.
<form id="formPassword" class="form-group" action="/savePassword" method="GET" enctype="multipart/form-data" >
<input type="hidden" id="idUser" value="{{$user[0]['id']}}"/>
<input id="pass" type="text" class="form-control" name="pass" placeholder="Ingrese la contraseña actual..." aria-describedby="basic-addon1" required /> <div id="resultado"></div><br>
<div class="alert alert-warning" role="alert">A continuación ingrese la nueva contraseña </div>
<input id="newpass" type="password" class="form-control" name="newPassword" placeholder="Ingrese la nueva contraseña" required /> <br>
<input onchange="comprobarClave()" id="newpassconfirm" type="password" class="form-control" name="passwordconfirm" placeholder="Ingrese la contraseña nuevamente" required /> <br>
<div id="resultCorrect" style="color:green;display:none;" >Las contraseñas coinciden correctamente</div>
<div id="resultIncorrect" style="color:red;display:none;">Las contraseñas <strong>NO</strong> coinciden</div>
<input type="hidden" name="idUser" value="{{ $user[0]['id'] }}" />

</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
<input id="confirmar" type="submit" class="btn btn-primary" value="Confirmar cambio">
</form>
</div>
</div>
</div>
</div>


  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <div class="card" style="box-shadow: 2px 2px 7px 4px #888888;">
               <div style="margin: 0 auto;">
                     <h5 style="font-size:40px;" class="card-title">{{$user[0]['name'] . ' ' . $user[0]['lastName']}}</h5>
                     </div>
             <div class="card-body">
               <div class="container-fluid">
                 <div class="row">

                   <div class="col-md-3">
                    <img height="150"src="{{$user[0]['ruta']}}"><br><br>
                    <a onclick="myFunction()"><img style="height:33px;margin-left:40px" src="../img/editar.png"</a><br>
                    <a data-toggle="modal" data-target="#exampleModal2"> <img height="60" src="../img/publicarProblema.png" > </a>
                  </div>
                  <div id="noEdit" class="col-md-3">
                    <h6 class="card-subtitle mb-2 text-muted">Datos Personales</h6>
                      <!-- DATOS PERSONALES Y EDITABLES DEL USUARIO -->
                      <p class="card-text"> <strong>Nombre:</strong> {{ $user[0]['name'] }}</p>
                      <p class="card-text"> <strong>Apellido:</strong> {{ $user[0]['lastName'] }}</p>
                      <p class="card-text"> <strong>DNI:</strong> {{ $user[0]['dni'] }}</p>
                      <p class="card-text"> <strong>Email:</strong> {{ $user[0]['email'] }}</p>
                      <p class="card-text"> <strong>Telefono:</strong> {{ $user[0]['phone'] }}</p>
                      <p class="card-text"> <strong>Ciudad:</strong> {{ $user[0]['city'] }}</p>
                      <p class="card-text"> <strong>Provincia:</strong> {{ $user[0]['province'] }}</p>
                    </div>
                          <div id="edit" class="col-md-3" style="display: none;">Editar campos
                              <form action="/editUser" method="GET">
                                <input type="hidden" name="id" value="{{ $user[0]['id'] }}" />
                                  <input type="text"  class="form-control" name="name" placeholder="{{ $user[0]['name'] }}"/>
                                  <input type="text" class="form-control" name="lastName" placeholder="{{ $user[0]['lastName'] }}"/>
                                  <input type="text" class="form-control" name="dni" placeholder="{{ $user[0]['dni'] }}"/>
                                  <input type="text" class="form-control" name="email" placeholder="{{ $user[0]['email'] }}"/>
                                  <input type="text" class="form-control" name="phone" placeholder="{{ $user[0]['phone'] }}"/>
                                  <input type="text" class="form-control" name="city" placeholder="{{ $user[0]['city'] }}"/>
                                  <input type="text" class="form-control" name="province" placeholder="{{ $user[0]['province'] }}"/><br>
                                  <input type="image" height=32 src="../img/saveEdit.png" style="display:block; margin:0 auto" alt="Submit Form" />
                              </form>
                                <a onclick="myFunction2()"><img style="height: 32px;margin-left: 96px;" src="../img/cancelaredit.png"></a>
                          </div>
<div class="col-md-5">
  <div class="row">
                        <?php
                            $problems = Problem::where('idUser','=',$user[0]['id'])->get();
                            if($problems->isEmpty()){?>
                              <div class="alert alert-warning">Actualmente <strong> NO</strong> tienes problemas publicados</div>
                            <?php }
                        for ($i = 0; $i<count($problems);$i++){
                        ?>
                          <div class="col-md-6" style="box-shadow: 1px 0px 3px 3px #888888;padding: 10px;">
                                <form id="formDelete" class="form-inline" action="delete" method="GET" >
                                    <h6 class="card-subtitle mb-2 text-muted">{{ $problems[$i]['specialty'] }}</h6>
                                     <input type="hidden" name="idProblem" value="{{ $problems[$i]['id'] }}" />
                                     <input style="margin-top:-13px;" id="btn-delete" type="image" src="../img/delete.png" alt="Submit Form" />
                                </form>
                                <form action="/chatUser" class="form-inline" style="margin-top: -28px;" method="POST">
                                    <input type="hidden" name="idProblem" value="{{$problems[$i]['id']}}" />
                                    <input type="hidden" value="{{csrf_token()}}" name="_token" >
                                    <input style="margin-top:-17px;margin-left: 215px;" type="image" src="../img/open.png" alt="Submit Form" />
                                </form>
                                <?php
                                    $status = Status::where('idProblem', '=', $problems[$i]['id'])->get();
                                    if($status->isEmpty()){?>
                                      <div class="alert alert-danger"><strong>Sin respuestas</strong> por el momento</div>
                                    <?php }else{
                                    if($status[0]['status'] == 0){ ?>
                                        <div class="alert alert-danger"><strong>Sin respuestas</strong> por el momento</div>
                                <?php }if($status[0]['status'] == 1){ ?>
                                        <div class="alert alert-info"><strong>Esperando</strong>confirmacion de contrato</div>
                                <?php }if($status[0]['status'] == 2){ ?>
                                        <div class="alert alert-warning">Aceptado y <strong>En realización</strong></div>
                                <?php }if($status[0]['status'] == 3){ ?>
                                        <div class="alert alert-dark">Finalizado y <strong>espera puntuación.</strong></div>
                                <?php }if($status[0]['status'] == 4){ ?>
                                  <div class="alert alert-success">Finalizado correctamente<img style="margin-top: -6px;height: 26px;" src="../img/finalizado.png" /></div>
                                <?php }} ?>
                            </div>



                        <?php } ?>
</div>
             </div></div>
        </div>
    </div>
  </div>
</div>
</div>
</div><br><br>



<div class="container">
    <div class="card" style="background:white;box-shadow: 2px 2px 7px 4px #888888; border-radius: 9px;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">

                    <?php
                    $contratos = Contrato::where("idUser","=",$user[0]['id'])->orderBy('created_at', 'asc')->get();
                    if($contratos){?>
                        <div class="container">
                            <div class="row" style="margin:0">
                                <div class="col-md-12 text-center" style="font-size: 40px;font-family: 'Raleway', sans-serif;color:#b01e59;font-weight: bold;">
                                    Contratos
                                </div>
                            </div>
                        </div>
                    <?php for($i = 0 ; $i<count($contratos); $i++){
                            if($contratos[$i]['state'] == 1){
                                $prof = Specialist::where("id","=",$contratos[$i]['idSpecialist'])->get(); ?>
                                <div class="alert alert-dark text-center" role="alert">Éste contrato se encuentra en espera de aceptación por parte de el profesional <strong>{{$prof[0]['name'] . ' ' . $prof[0]['lastName']}}</strong>
                                </div>
                            <?php }
                             if($contratos[$i]['state'] == 2){
                               $prof = Specialist::where("id","=",$contratos[$i]['idSpecialist'])->get(); ?>
                                <table><tr><td><div class="alert alert-warning text-center" role="alert">El contrato con el profesional <strong>{{$prof[0]['name'] . ' ' . $prof[0]['lastName']}}</strong> fue aceptado y se encuentra en <strong>realizacion.</strong></td>
                                    <td><form action="/finalizarContrato" method="GET" class="form-inline">

                                        <input type="hidden" name="id" value="{{$contratos[$i]['id']}}">
                                        <input type="submit" class="btn btn-warning text-center" value="FINALIZAR CONTRATO">
                                        </td>
                                    </form>
                                    <tr>
                                </table>

                                </div>
                            <?php }
                             if($contratos[$i]['state'] == 3){
                                $prof = Specialist::where("id","=",$contratos[$i]['idSpecialist'])->get(); ?>
                                <div class="alert alert-primary text-center" style="background: white;" role="alert"><span style="color:green; font-weight: bold;">Finalizar</span> <span style="color:black;">el contrato</span> </td>
                                    <div class="form-group"><form action="/puntuarContrato"><br>
                                        <textarea type="text" name="coment" class="form-control" placeholder="Deje un comentario sobre el profesional.."></textarea>
                                            <input type="hidden" name="id" value="{{$contratos[$i]['id']}}"><br>
                                            <input type="hidden" name="idSpecialist" value="{{$contratos[$i]['idSpecialist']}}">
                                            <p style="text-align: center;color:black; font-weight: bold; font-size: 18px; ">Puntuá del 1 al 10!</p>
                                            <select style="width: 100px;display: block; margin: 0 auto;font-size: 17px;" class="form-control" name="points"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select><br>
                                            <input type="submit" class="btn btn-success" value="PUNTUAR" />
                                        </form>
                                    </div>
                                </div>


                            <?php }
                              if($contratos[$i]['state'] == 4){
                                  $prof = Specialist::where("id","=",$contratos[$i]['idSpecialist'])->get(); ?>
                                <div class="alert alert-success text-center" role="alert">El contrato con <strong>{{$prof[0]['name'] . ' ' . $prof[0]['lastName']}}</strong>fue <strong>FINALIZADO.</strong>

                                </div>
                            <?php }


                        }
                    }

                    ?>

                </div>
            </div>
        </div>
    </div>
</div>






<script>
function myFunction() {
    document.getElementById("edit").style.display = "block";
    document.getElementById("noEdit").style.display = 'none';
}
</script>
 <script>
function myFunction2() {
    document.getElementById("edit").style.display = "none";
    document.getElementById("noEdit").style.display = "block";
}
</script>

<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
$('#myInput').trigger('focus')
})
</script>

<script type="text/javascript">
$('#password').on('shown.bs.modal', function () {
$('#myInput').trigger('focus')
})
</script>

<script>
$(document).ready(function(){

  var consulta;

  //hacemos focus
  $("#pass").focus();
  $("#idUser").focus();

  //comprobamos si se pulsa una tecla
  $("#pass").keyup(function(e){
         //obtenemos el texto introducido en el campo
         consulta = $("#pass").val();
         id = $("#idUser").val();
         //hace la búsqueda
         $("#resultado").delay(200).queue(function(n) {

              $("#resultado").html('<img src="../img/ajax-loader.gif" />');

                    $.ajax({
                          type: "POST",
                          url: "/comprobations/comprobarPass.php",
                          data: {b: $("#pass").val(), id: $("#idUser").val()},
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
<script type="text/javascript">
function comprobarClave(){
var clave1 =   document.getElementById("newpass").value;
var clave2 = document.getElementById("newpassconfirm").value;

if (clave1 == clave2) {
document.getElementById("newpassconfirm").style.background = "green";
document.getElementById("newpassconfirm").style.color = "white";
document.getElementById("confirmar").style.display = "block";
document.getElementById("resultCorrect").style.display = "block";
document.getElementById("resultIncorrect").style.display = "none";
}else{
document.getElementById("newpassconfirm").style.color = "white";
document.getElementById("confirmar").style.display = "none";
document.getElementById("resultCorrect").style.display = "none";
document.getElementById("resultIncorrect").style.display = "block";

}
  }
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
    border-color: #c1c1c1;
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
    function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#uploadForm + img').remove();
            $('#uploadForm').after('<img src="'+e.target.result+'" width="450" height="300"/>');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>


<script>
jQuery('#btn-delete').click(function(event){
    event.preventDefault();
    swal({
        title: "Eliminar el problema? ",
        text: "Está seguro que desea eliminar el problema y todos sus componentes?",
        icon: "warning",
        buttons: {
            cancel: "No se. No!",
            confirm: "Estoy segurísimo!",
        },
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            $('#formDelete').submit();
            swal("Problema Eliminado", "Ah eliminado éste problema con éxito", "success");
        } else {
            return false;
        }
    });
});
</script>

<script>
jQuery('#confirmar').click(function(event){
    event.preventDefault();
    swal({
        title: "Cambiar contraseña? ",
        text: "Está seguro que desea cambiar su contraseña anterior por la ingresada actualmente?",
        icon: "warning",
        buttons: {
            cancel: "No se. No!",
            confirm: "Estoy segurísimo!",
        },
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            $('#formPassword').submit();
            swal("Nueva contraseña", "Ah actualizado su contraseña con éxito!", "success");
        } else {
            return false;
        }
    });
});
</script>

<script>
jQuery('#btn-problem').click(function(event){
    event.preventDefault();
    swal({
        title: "Publicar problema?  ",
        text: "Está seguro que está listo para enviar éste tipo de problema? Los problemas NO se puede editar!",
        icon: "warning",
        buttons: {
            cancel: "No se. Creo que todavia no!",
            confirm: "Estoy totalmente listo",
        },
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            $('#formProblem2').submit();
            swal("Problema publicado", "Ahora a esperar respuesta de profesionales!!", "success");
        } else {
            return false;
        }
    });
});
</script>



<script>
    $("#file").change(function () {
    filePreview(this);
});
</script>

<script>
$("#categoriaPrincipal2").change(function(){
  var sel = $("#categoriaPrincipal2").val();
  var sel2 = sel.toString();

  if(sel2 === ''){
    $("#Belleza_y_Cuidado2").css("display", "none");
    $('#Hogar_contruccion2').css("display", "none");
    $('#Abogados2').css("display", "none");
    $('#Gestor2').css("display", "none");
    $('#Mantenimiento_Hogar2').css("display", "none");
    $('#Instalación2').css("display", "none");
    $('#Martilleros2').css("display", "none");
    $('#Seguros2').css("display", "none");
    $('#Tasador2').css("display", "none");
    $("#Comunicacion2").css("display", "none");
    $("#Fiestas2").css("display", "none");
    $("#Fotografia2").css("display", "none");
    $("#Mascotas2").css("display", "none");
    $("#Oficinas2").css("display", "none");
    $("#Tecno2").css("display", "none");
  }
  if(sel2 === 'Asesoramiento Contable y Legal'){
    $("#Asesoramiento_Contable2").css("display", "block");
    $("#Belleza_y_Cuidado2").css("display", "none");
    $('#Hogar_contruccion2').css("display", "none");
    $('#Gestor2').css("display", "none");
    $('#Mantenimiento_Hogar2').css("display", "none");
    $('#Instalación2').css("display", "none");
    $('#Martilleros2').css("display", "none");
    $('#Seguros2').css("display", "none");
    $('#Tasador2').css("display", "none");
    $("#Comunicacion2").css("display", "none");
    $("#Fiestas2").css("display", "none");
    $("#Fotografia2").css("display", "none");
    $("#Mascotas2").css("display", "none");
    $("#Oficinas2").css("display", "none");
    $("#Tecno2").css("display", "none");
  }else{
    $("#Asesoramiento_Contable2").css("display", "none");
  }


  if(sel2 === 'Viajes y Turismo'){
    $("#Viajes2").css("display", "block");
    $("#Asesoramiento_Contable2").css("display", "none");
    $("#Belleza_y_Cuidado2").css("display", "none");
    $('#Hogar_contruccion2').css("display", "none");
    $('#Abogados2').css("display", "none");
    $('#Gestor2').css("display", "none");
    $('#Mantenimiento_Hogar2').css("display", "none");
    $('#Instalación2').css("display", "none");
    $('#Martilleros2').css("display", "none");
    $('#Seguros2').css("display", "none");
    $('#Tasador2').css("display", "none");
    $("#Comunicacion2").css("display", "none");
    $("#Fiestas2").css("display", "none");
    $("#Fotografia2").css("display", "none");
    $("#Mascotas2").css("display", "none");
    $("#Oficinas2").css("display", "none");
    $("#Tecno2").css("display", "none");
  }else{
    $("#Viajes2").css("display", "none");
  }
  if(sel2 === 'Imprenta'){
    $("#Imprenta2").css("display", "block");
    $("#Asesoramiento_Contable2").css("display", "none");
    $("#Belleza_y_Cuidado2").css("display", "none");
    $('#Hogar_contruccion2').css("display", "none");
    $('#Abogados2').css("display", "none");
    $('#Gestor2').css("display", "none");
    $('#Mantenimiento_Hogar2').css("display", "none");
    $('#Instalación2').css("display", "none");
    $('#Martilleros2').css("display", "none");
    $('#Seguros2').css("display", "none");
    $('#Tasador2').css("display", "none");
    $("#Viajes2").css("display", "none");
    $("#Comunicacion2").css("display", "none");
    $("#Fiestas2").css("display", "none");
    $("#Fotografia2").css("display", "none");
    $("#Mascotas2").css("display", "none");
    $("#Oficinas2").css("display", "none");
    $("#Tecno2").css("display", "none");
  }else{
    $("#Imprenta2").css("display", "none");
  }
  if(sel2 === 'Belleza y Cuidado Personal'){
    $("#Belleza_y_Cuidado2").css("display", "block");
    $("#Asesoramiento_Contable2").css("display", "none");
    $('#Hogar_contruccion2').css("display", "none");
    $('#Abogados2').css("display", "none");
    $('#Gestor2').css("display", "none");
    $('#Mantenimiento_Hogar2').css("display", "none");
    $('#Instalación2').css("display", "none");
    $('#Martilleros2').css("display", "none");
    $('#Seguros2').css("display", "none");
    $('#Tasador2').css("display", "none");
    $("#Viajes2").css("display", "none");
    $("#Comunicacion2").css("display", "none");
    $("#Fiestas2").css("display", "none");
    $("#Fotografia2").css("display", "none");
    $("#Mascotas2").css("display", "none");
    $("#Oficinas2").css("display", "none");
    $("#Tecno2").css("display", "none");
  }else{
    $("#Belleza_y_Cuidado2").css("display", "none");
  }
  if(sel2 === 'Comunicación y Diseño'){
    $("#Comunicacion2").css("display", "block");
    $("#Asesoramiento_Contable2").css("display", "none");
    $("#Belleza_y_Cuidado2").css("display", "none");
    $('#Hogar_contruccion2').css("display", "none");
    $('#Abogados2').css("display", "none");
    $('#Gestor2').css("display", "none");
    $('#Mantenimiento_Hogar2').css("display", "none");
    $('#Instalación2').css("display", "none");
    $('#Martilleros2').css("display", "none");
    $('#Seguros2').css("display", "none");
    $('#Tasador2').css("display", "none");
    $("#Viajes2").css("display", "none");
    $("#Cursos2").css("display", "none");
    $("#Fiestas2").css("display", "none");
    $("#Fotografia2").css("display", "none");
    $("#Mascotas2").css("display", "none");
    $("#Oficinas2").css("display", "none");
    $("#Tecno2").css("display", "none");
  }else{
    $("#Comunicacion2").css("display", "none");
  }
  if(sel2 === 'Cursos y Clases'){
    $("#Cursos2").css("display", "block");
    $("#Asesoramiento_Contable2").css("display", "none");
    $("#Belleza_y_Cuidado2").css("display", "none");
    $('#Hogar_contruccion2').css("display", "none");
    $('#Abogados2').css("display", "none");
    $('#Gestor2').css("display", "none");
    $('#Mantenimiento_Hogar2').css("display", "none");
    $('#Instalación2').css("display", "none");
    $('#Martilleros2').css("display", "none");
    $('#Seguros2').css("display", "none");
    $('#Tasador2').css("display", "none");
    $("#Viajes2").css("display", "none");
    $("#Fiestas2").css("display", "none");
    $("#Fotografia2").css("display", "none");
    $("#Mascotas2").css("display", "none");
    $("#Oficinas2").css("display", "none");
    $("#Tecno2").css("display", "none");
  }else{
    $("#Cursos2").css("display", "none");
  }
  if(sel2 === 'Fiestas y Eventos'){
    $("#Fiestas2").css("display", "block");
    $("#Asesoramiento_Contable2").css("display", "none");
    $("#Belleza_y_Cuidado2").css("display", "none");
    $('#Hogar_contruccion2').css("display", "none");
    $('#Abogados2').css("display", "none");
    $('#Gestor2').css("display", "none");
    $('#Mantenimiento_Hogar2').css("display", "none");
    $('#Instalación2').css("display", "none");
    $('#Martilleros2').css("display", "none");
    $('#Seguros2').css("display", "none");
    $('#Tasador2').css("display", "none");
    $("#Viajes2").css("display", "none");
    $("#Cursos2").css("display", "none");
    $("#Fotografia2").css("display", "none");
    $("#Mascotas2").css("display", "none");
    $("#Oficinas2").css("display", "none");
    $("#Tecno2").css("display", "none");
  }else{
    $("#Fiestas2").css("display", "none");
  }
  if(sel2 === 'Fotografía, Música y Cine'){
    $("#Fotografia2").css("display", "block");
    $("#Asesoramiento_Contable2").css("display", "none");
    $("#Belleza_y_Cuidado2").css("display", "none");
    $('#Hogar_contruccion2').css("display", "none");
    $('#Abogados2').css("display", "none");
    $('#Gestor2').css("display", "none");
    $('#Mantenimiento_Hogar2').css("display", "none");
    $('#Instalación2').css("display", "none");
    $('#Martilleros2').css("display", "none");
    $('#Seguros2').css("display", "none");
    $('#Tasador2').css("display", "none");
    $("#Viajes2").css("display", "none");
    $("#Cursos2").css("display", "none");
    $("#Mascotas2").css("display", "none");
    $("#Oficinas2").css("display", "none");
    $("#Tecno2").css("display", "none");
  }else{
    $("#Fotografia2").css("display", "none");
  }
  if(sel2 === 'Hogar y Construcción'){
    $("#Hogar2").css("display", "block");
    $("#Asesoramiento_Contable2").css("display", "none");
    $("#Belleza_y_Cuidado2").css("display", "none");
    $('#Hogar_contruccion2').css("display", "none");
    $('#Abogados2').css("display", "none");
    $('#Gestor2').css("display", "none");
  //  $('#Mantenimiento_Hogar').css("display", "none");
    $('#Instalación2').css("display", "none");
    $('#Martilleros2').css("display", "none");
    $('#Seguros2').css("display", "none");
    $('#Tasador2').css("display", "none");
    $("#Viajes2").css("display", "none");
    $("#Cursos2").css("display", "none");
    $("#Fotografia2").css("display", "none");
    $("#Mascotas2").css("display", "none");
    $("#Oficinas2").css("display", "none");
    $("#Tecno2").css("display", "none");
  }else{
    $("#Hogar2").css("display", "none");
  }
  if(sel2 === 'Mantenimiento de Vehículos'){
    $("#Vehiculos2").css("display", "block");
    $("#Hogar2").css("display", "none");
    $("#Asesoramiento_Contable2").css("display", "none");
    $("#Belleza_y_Cuidado2").css("display", "none");
    $('#Hogar_contruccion2').css("display", "none");
    $('#Abogados2').css("display", "none");
    $('#Gestor2').css("display", "none");
    $('#Mantenimiento_Hogar2').css("display", "none");
    $('#Instalación2').css("display", "none");
    $('#Martilleros2').css("display", "none");
    $('#Seguros2').css("display", "none");
    $('#Tasador2').css("display", "none");
    $("#Viajes2").css("display", "none");
    $("#Cursos2").css("display", "none");
    $("#Fotografia2").css("display", "none");
    $("#Mascotas2").css("display", "none");
    $("#Oficinas2").css("display", "none");
    $("#Tecno2").css("display", "none");
  }else{
    $("#Vehiculos2").css("display", "none");
  }
  if(sel2 === 'Medicina y Salud'){
    $("#Medicina2").css("display", "block");
    $("#Hogar2").css("display", "none");
    $("#Asesoramiento_Contable2").css("display", "none");
    $("#Belleza_y_Cuidado2").css("display", "none");
    $('#Hogar_contruccion2').css("display", "none");
    $('#Abogados2').css("display", "none");
    $('#Gestor2').css("display", "none");
    $('#Mantenimiento_Hogar2').css("display", "none");
    $('#Instalación2').css("display", "none");
    $('#Martilleros2').css("display", "none");
    $('#Seguros2').css("display", "none");
    $('#Tasador2').css("display", "none");
    $("#Viajes2").css("display", "none");
    $("#Cursos2").css("display", "none");
    $("#Fotografia2").css("display", "none");
    $("#Mascotas2").css("display", "none");
    $("#Oficinas2").css("display", "none");
    $("#Tecno2").css("display", "none");
  }else{
    $("#Medicina2").css("display", "none");
  }
  if(sel2 === 'Ropa y Moda'){
    $("#Ropa2").css("display", "block");
    $("#Hogar2").css("display", "none");
    $("#Asesoramiento_Contable2").css("display", "none");
    $("#Belleza_y_Cuidado2").css("display", "none");
    $('#Hogar_contruccion2').css("display", "none");
    $('#Abogados2').css("display", "none");
    $('#Gestor2').css("display", "none");
    $('#Mantenimiento_Hogar2').css("display", "none");
    $('#Instalación2').css("display", "none");
    $('#Martilleros2').css("display", "none");
    $('#Seguros2').css("display", "none");
    $('#Tasador2').css("display", "none");
    $("#Viajes2").css("display", "none");
    $("#Cursos2").css("display", "none");
    $("#Fotografia2").css("display", "none");
    $("#Mascotas2").css("display", "none");
    $("#Oficinas2").css("display", "none");
    $("#Tecno2").css("display", "none");
  }else{
    $("#Ropa2").css("display", "none");
  }
  if(sel2 === 'Servicios para Mascotas'){
    $("#Mascotas2").css("display", "block");
    $("#Hogar2").css("display", "none");
    $("#Asesoramiento_Contable2").css("display", "none");
    $("#Belleza_y_Cuidado2").css("display", "none");
    $('#Hogar_contruccion2').css("display", "none");
    $('#Abogados2').css("display", "none");
    $('#Gestor2').css("display", "none");
    $('#Mantenimiento_Hogar2').css("display", "none");
    $('#Instalación2').css("display", "none");
    $('#Martilleros2').css("display", "none");
    $('#Seguros2').css("display", "none");
    $('#Tasador2').css("display", "none");
    $("#Viajes2").css("display", "none");
    $("#Cursos2").css("display", "none");
    $("#Fotografia2").css("display", "none");
    $("#Oficinas2").css("display", "none");
    $("#Tecno2").css("display", "none");
  }else{
    $("#Mascotas2").css("display", "none");
  }
  if(sel2 === 'Servicios para Oficina'){
    $("#Oficinas2").css("display", "block");
    $("#Hogar2").css("display", "none");
    $("#Asesoramiento_Contable2").css("display", "none");
    $("#Belleza_y_Cuidado2").css("display", "none");
    $('#Hogar_contruccion2').css("display", "none");
    $('#Abogados2').css("display", "none");
    $('#Gestor2').css("display", "none");
    $('#Mantenimiento_Hogar2').css("display", "none");
    $('#Instalación2').css("display", "none");
    $('#Martilleros2').css("display", "none");
    $('#Seguros2').css("display", "none");
    $('#Tasador2').css("display", "none");
    $("#Viajes2").css("display", "none");
    $("#Cursos2").css("display", "none");
    $("#Fotografia2").css("display", "none");
    $("#Tecno2").css("display", "none");
  }else{
    $("#Oficinas2").css("display", "none");
  }

  if(sel2 === 'Tecnología'){
    $("#Tecno2").css("display", "block");
    $("#Oficinas2").css("display", "none");
    $("#Hogar2").css("display", "none");
    $("#Asesoramiento_Contable2").css("display", "none");
    $("#Belleza_y_Cuidado2").css("display", "none");
    $('#Hogar_contruccion2').css("display", "none");
    $('#Abogados2').css("display", "none");
    $('#Gestor2').css("display", "none");
    $('#Mantenimiento_Hogar2').css("display", "none");
    $('#Instalación2').css("display", "none");
    $('#Martilleros2').css("display", "none");
    $('#Seguros2').css("display", "none");
    $('#Tasador2').css("display", "none");
    $("#Viajes2").css("display", "none");
    $("#Cursos2").css("display", "none");
    $("#Fotografia2").css("display", "none");
  }else{
    $("#Tecno2").css("display", "none");
  }

  if(sel2 === 'Transporte'){
    $("#Trans2").css("display", "block");
    $("#Tecno2").css("display", "none");
    $("#Oficinas2").css("display", "none");
    $("#Hogar2").css("display", "none");
    $("#Asesoramiento_Contable2").css("display", "none");
    $("#Belleza_y_Cuidado2").css("display", "none");
    $('#Hogar_contruccion2').css("display", "none");
    $('#Abogados2').css("display", "none");
    $('#Gestor2').css("display", "none");
    $('#Mantenimiento_Hogar2').css("display", "none");
    $('#Instalación2').css("display", "none");
    $('#Martilleros2').css("display", "none");
    $('#Seguros2').css("display", "none");
    $('#Tasador2').css("display", "none");
    $("#Viajes2").css("display", "none");
    $("#Cursos2").css("display", "none");
    $("#Fotografia2").css("display", "none");
  }else{
    $("#Trans2").css("display", "none");
  }

  });
</script>


<script>
$("#Hogar_contruccion2").change(function(){
    var sel5 = $("#Asesoramiento_Contable_y_Legal2").val();
    var sel6 = sel5.toString();
      if(sel6 === 'Martilleros Públicos'){
        $("#Martilleros2").css("display", "block");
      }else{
        $("#Martilleros2").css("display", "none");
      }
  });
</script>


<script>
$("#Asesoramiento_Contable_y_Legal2").change(function(){
    var sel5 = $("#Asesoramiento_Contable_y_Legal2").val();
    var sel6 = sel5.toString();
      if(sel6 === 'Martilleros Públicos'){
        $("#Martilleros2").css("display", "block");
      }else{
        $("#Martilleros2").css("display", "none");
      }
  });
</script>

<script>
$("#Asesoramiento_Contable_y_Legal2").change(function(){
    var sel5 = $("#Asesoramiento_Contable_y_Legal2").val();
    var sel6 = sel5.toString();
      if(sel6 === 'Gestores'){
        $("#Gestor2").css("display", "block");
      }else{
        $("#Gestor2").css("display", "none");
      }
  });
</script>

<script>
$("#Imprenta2").change(function(){
    var sel5 = $("#Asesoramiento_Contable_y_Legal2").val();
    var sel6 = sel5.toString();
      if(sel6 === 'Gestores'){
        $("#Gestor2").css("display", "block");
      }else{
        $("#Gestor2").css("display", "none");
      }
  });
</script>

<script>
$("#Asesoramiento_Contable_y_Legal2").change(function(){
    var abogado = $("#Asesoramiento_Contable_y_Legal2").val();
    var abogadoo = abogado.toString();
      if(abogadoo === 'Tasadores'){
        $("#Tasador2").css("display", "block");
      }else{
        $("#Tasador2").css("display", "none");
      }
  });
</script>

<script>
$("#Asesoramiento_Contable_y_Legal2").change(function(){
    var abogado = $("#Asesoramiento_Contable_y_Legal2").val();
    var abogadoo = abogado.toString();
      if(abogadoo === 'Abogados y Estudios Jurídicos'){
        $("#Abogados2").css("display", "block");
      }else{
        $("#Abogados2").css("display", "none");
      }
  });
</script>

<script>
    function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#formProblem2 + img').remove();
            $('#formProblem2').after('<img src="'+e.target.result+'" width="450" height="300"/>');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

</script>

<script>
    $("#file").change(function () {
    filePreview(this);
});
</script>

<script>
$("#Asesoramiento_Contable_y_Legal2").change(function(){
    var abogado = $("#Asesoramiento_Contable_y_Legal2").val();
    var abogadoo = abogado.toString();
      if(abogadoo === 'Productores de Seguros'){
        $("#Seguros2").css("display", "block");
      }else{
        $("#Seguros2").css("display", "none");
      }
  });
</script>

<script>
$("#Hogar_y_Construccion2").change(function(){
    var Mantenimiento = $("#Hogar_y_Construccion2").val();
    var Mantenimientoo = Mantenimiento.toString();
      if(Mantenimientoo === 'Instalación y Servicio Técnico'){
        $("#Instalación2").css("display", "block");
      }else{
        $("#Instalación2").css("display", "none");
      }
  });
</script>
<script>
$("#Hogar_y_Construccion2").change(function(){
    var Mantenimiento = $("#Hogar_y_Construccion2").val();
    var Mantenimientoo = Mantenimiento.toString();
      if(Mantenimientoo === 'Mantenimiento del Hogar'){
        $("#Mantenimiento_Hogar2").css("display", "block");
      }else{
        $("#Mantenimiento_Hogar2").css("display", "none");
      }
  });
</script>






<?php }else {
  echo 'DEBE INICIAR SESION';
} }}?>
    </body>
</html>
@endsection
