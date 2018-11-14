<?php

use App\Problem;
use App\Status;
use App\Person;
use App\Specialist;
use App\activeProblem;

$category = $_POST['category'];
$description = $_POST['description'];
$ciudad = $_POST['ciudad'];

 if($_POST['category'] == 'Asesoramiento Contable y Legal'){
        $subCategory = 'Asesoramiento Contable y Legal';                                                 
          if($_POST['Asesoramiento'] == 'Abogados y Estudios Jurídicos'){
              $specialty = $_POST['abogados_tipos'];
          }if($_POST['Asesoramiento'] == 'Contadores y Estudios'){
              $specialty = 'Contador Público';
          }if($_POST['Asesoramiento'] == 'Gestores'){
              $specialty = $_POST['Gestores'];
          }if($_POST['Asesoramiento'] == 'Martilleros Públicos'){
              $specialty = $_POST['Martilleros'];
          }if($_POST['Asesoramiento'] == 'Productores de Seguros'){
              $specialty = $_POST['Productoras_Seguros'];
          }if($_POST['Asesoramiento'] == 'Despachantes de Aduana'){
              $specialty = 'Despachante de Aduana';
          }if($_POST['Asesoramiento'] == 'Tasadores'){
              $specialty = $_POST['Tasador_es'];
          }if($_POST['Asesoramiento'] == ''){
              $specialty = 'Abogado / Contador';
          }
      }if($_POST['category'] == 'Belleza y Cuidado Personal'){
      $subCategory = $_POST['Belleza'];
      $specialty = $_POST['Belleza'];
      }if($_POST['category'] == 'Comunicación y Diseño'){
      $specialty = $_POST['Comunicacion_diseño'];
      $subCategory = $_POST['Comunicacion_diseño'];
      }if($_POST['category'] == 'Cursos y Clases'){
      $specialty = $_POST['Cursos_Clases'];
      $subCategory = $_POST['Cursos_Clases'];
      }if($_POST['category'] == 'Fiestas y Eventos'){
      $specialty = $_POST['Fiestas_Eventos'];
      $subCategory = $_POST['Fiestas_Eventos'];
      }if($_POST['category'] == 'Fotografía, Música y Cine'){
      $specialty = $_POST['Fotografia_Musica'];
      $subCategory = $_POST['Fotografia_Musica'];
      }if($_POST['category'] == 'Hogar y Construcción'){
        if($_POST['hogar_construccion'] == 'Cabañas Construcción'){
          $subCategory = 'Construccion de Cabañas';
          $specialty = 'Construccion de Cabañas';
        }if($_POST['hogar_construccion'] == 'Cabañas Mantenimiento'){
          $subCategory = 'Mantenimiento de Cabañas';
          $specialty = 'Mantenimiento de Cabañas';
        }if($_POST['hogar_construccion'] == 'Mantenimiento del Hogar'){
          $specialty = $_POST['Mantenimiento_del_hogar'];
          $subCategory = 'Mantenimiento del Hogar';
        }if($_POST['hogar_construccion'] == 'Obras y Construcción'){
          $specialty = $_POST['Obras_Construcción'];
          $subCategory = 'Obras y Construcción';
        }if($_POST['hogar_construccion'] == 'Instalación y Servicio Técnico'){
          $specialty = $_POST['Instalacion_tecnico'];
          $subCategory = 'Instalación y Servicio Técnico';
        }
      }if($_POST['category'] == 'Imprenta'){
        $specialty = $_POST['Impreciones'];
        $subCategory = $_POST['Impreciones'];
      }if($_POST['category'] == 'Mantenimiento de Vehículos'){
        $specialty = $_POST['Mantenimiento_vehiculos'];
        $subCategory = $_POST['Mantenimiento_vehiculos'];
      }if($_POST['category'] == 'Medicina y Salud'){
        $specialty = $_POST['Medicina_salud'];
        $subCategory = $_POST['Medicina_salud'];
      }if($_POST['category'] == 'Ropa y Moda'){
        $specialty = $_POST['Ropa_Moda'];
        $subCategory = $_POST['Ropa_Moda'];
      }if($_POST['category'] == 'Servicio para Mascotas'){
        $specialty = $_POST['Servicio_mascotas'];
        $subCategory = $_POST['Servicio_mascotas'];
      }if($_POST['category'] == 'Servicio para Oficina'){
        $specialty = $_POST['Servicio_Oficina'];
        $subCategory = $_POST['Servicio_Oficina'];
      }if($_POST['category'] == 'Tecnología'){
        $specialty = $_POST['Tecnología_Pro'];
        $subCategory = $_POST['Tecnología_Pro'];
      }if($_POST['category'] == 'Transporte'){
        $specialty = $_POST['Transporte_com'];
        $subCategory = $_POST['Transporte_com'];
      }if($_POST['category'] == 'Viajes y Turismo'){
        $specialty = $_POST['Viajes_turismo'];
        $subCategory = $_POST['Viajes_turismo'];
      }

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
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
    <title>Wou!</title>
</head>
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
<body style="background-image: url('img/fondo.jpg')";>


<div class="row" style="margin:0;width: 100%;background: white; min-height: 80px;margin:0px;box-shadow: 4px 7px 14px #888888;position:fixed; z-index: 100;">
    <div class="col-md-6">
        <img src="img/logo.png" style="margin-top: 20px" height="52" width="150" />
    </div>
    <div class="col-md-3" style="margin-top: 10px;font-family: 'Roboto', sans-serif ">

    </div>
    <?php
    if(Session::has('username')){
    $user = Person::where('email','=',Session('username'))->get();

        if(!$user->isEmpty()){

            $mensajes = activeProblem::where('idUser','=',$user[0]['id'])->orderby('created_at', 'DESC')->get();
    ?>
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
        <div class="container">
          <p>Para que los profesionales del sitio puedan ofrecerle una solución, debe completar todos los campos del siguiente formulario. En la parte de la descripción debe ser lo más específico posible, de esta manera obtendrá una respuesta de manera más rápida. (En seleccionar archivo debe subir una imagen de su problema).
            <form id="formProblem" class="form-group" action="/saveProblem" method="POST" enctype="multipart/form-data">
              <div class="col-md-12"><select style="background:#7a72ef; color:white;" id="job_posting_search_interestArea" name="specialty" class="form-control"><option value="">Ocupación</option><option value="Albañil">Albañiles</option><option value="Abogado">Abogados</option><option value="Acompañante terapéutico">Acompañantes terapéuticos</option><option value="Arquitecto">Arquitectos</option><option value="Agrimensor">Agrimensores</option><option value="Animador">Animadores</option><option value="Barbero">Barberos</option><option value="Bicicletero">Bicicleteros</option><option value="Contador público">Contadores públicos</option><option value="Carpintero">Carpinteros</option><option value="Cerrajero">Cerrajeros</option><option value="Construccion en general">Construccion en general</option><option value="Costurer">Costureros</option><option value="Escriban">Escribanos</option><option value="Electro mecanico">Electro mecanicos</option><option value="Fumigador">Fumigadores</option><option value="Fotógraf">Fotógrafos</option><option value="Fletero">Fleteros</option><option value="Gomero">Gomeros</option><option value="Gestor">Gestores</option><option value="Gasista">Gasistas</option><option value="Herrero">Herreros</option><option value="Iluminador">Iluminadores</option><option value="Maestro mayor de obra">Maestro mayor de obras</option><option value="Maestro particular">Maestro particular</option><option value="Masajista">Masajistas</option><option value="Mecanico de autos">Mecanico de autos</option><option value="Mecanico de motos">Mecanico de motos</option><option value="Nutricionista">Nutricionistas</option><option value="Niñera">Niñeras</option><option value="Pedicura">Pedicuras</option><option value="Perforacion de pozos">Perforacion de pozos</option><option value="Peluquer">Peluqueros</option><option value="Pintor">Pintores</option><option value="Pilates">Pilates</option><option value="Exterminador">Plagas</option><option value="Plomero">Plomeros</option><option value="Podador">Podadores</option><option value="Programador textil">Programador textil</option><option value="Publici">Publicistas</option><option value="Reparador de PC">Reparadores de PC</option><option value="Reposter">Reposteros</option><option value="Servicio de lunch">Servicio de lunch</option><option value="Terapista Ocupacional">Terapista Ocupacional</option><option value="Técnico de ascensores">Técnicos de ascensores</option><option value="Tecnico de celulares">Tecnicos de celulares</option><option value="Tecnico audio stereo">Tecnico audio stereo</option><option value="Técnico de lavarropas">Técnicos de lavarropas</option><option value="Tasador">Tasadores</option><option value="Techista">Techistas</option><option value="Transporte de mascotas">Transporte de mascotas</option><option value="Transporte de personas">Transporte de personas</option><option value="Vidriero">Vidrieros</option><option value="Zapatero">Zapateros</option></select></div><br>
              <div class="alert alert-warning text-center">Describe tu problema lo más pposible</div>
                <textarea type="text" class="form-control" name="description" placeholder="A continuación escriba detalles del problema" required ></textarea> <br>
                <input type="hidden" name="id" value="{{ $user[0]['id'] }}" />
                <input type="hidden" name="zone" value="{{ $user[0]['zone'] }}" />
                <input id="file" type="file" name="file" class="inputfile" />
                  <label for="file"><img src="../img/addimg.png"><span style="color:gray">Imagen del problema</span> </label><br>
                <input type="hidden" value="{{csrf_token()}}" name="_token" >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <input id="btn-problem" type="submit" class="btn btn-primary" value="Enviar problema">
    </form>
      </div>
    </div>
  </div>
</div>
    <div class="col-md-3" style="margin-top: 4px;font-family: 'Roboto', sans-serif;">
        <div class="container" style="width: 100%;">
            <div class="row" style="float:right;" >
                <div style="display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;">
                    <table>
                      <td><img style="border-radius: 6px;" height="60" width="60" src="<?php echo $user[0]['ruta']?>">
                      </td>
                     <td><div class="btn-group">
                         <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <?php echo $user[0]['name'] . '  ' . $user[0]['lastName'] ?>
                         </button><div class="dropdown-menu">
                           <a class="dropdown-item" href="/userPanel">Perfil</a>
                           <div class="dropdown-divider"></div>
                          <?php
      if($mensajes->isEmpty()){ ?>
      <a class="dropdown-item" style="background: #bd2d5d; color:white;">Sin Mensajes</a>
      <?php }else{ ?>
      <a class="dropdown-item" href="/userMsj">Mensajes</a>
      <?php } ?>
                           <a class="dropdown-item" href="/busqueda">Ver profesionales</a>
                           <div class="dropdown-divider"></div>
                           <form action="/logout" method="GET">
                             <input class="dropdown-item" type="submit" value="Cerrar Sesion" />
                           </form>
                         </div>
                       </div></td></table>
                </div>
            </div>
        </div>
    </div>

<?php   }else{
$specialist = Specialist::where('email','=',Session('username'))->get();
    if(!$specialist->isEmpty()){
        $mensajes = activeProblem::where('idSpecialist','=',$specialist[0]['id'])->orderby('created_at', 'DESC')->get();
?>
<div class="col-md-3" style="margin-top: 4px;font-family: 'Roboto', sans-serif;">
    <div class="container" style="width:100%;" >
        <div class="row" style="float:right;" >
            <div style="display: block;background: white;padding: 10px;border-radius: 10px;width: 250px;">
                <table>
                  <td><img style="border-radius: 6px;" height="60" width="60" src="<?php echo $specialist[0]['ruta']?>">
                  </td>
                 <td><div class="btn-group">
                     <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <?php echo $specialist[0]['name'] . '  ' . $specialist[0]['lastName'] ?>
                     </button><div class="dropdown-menu">
                       <a class="dropdown-item" href="/specialistPanel">Ver perfil</a>
                        <div class="dropdown-divider"></div>
                       <?php if($mensajes->isEmpty()){ ?>
      <a class="dropdown-item" style="background: #bd2d5d; color:white;">Sin Mensajes</a>
      <?php }else{ ?>
      <a class="dropdown-item" href="/specialistMsj">Mensajes</a>
      <?php } ?>
                       <a class="dropdown-item" href="/busqueda">Ver Profesionales</a>
                       <?php if ($specialist[0]['activate'] == 0 || $specialist[0]['activate'] == 1){?>
                       <a class="dropdown-item" style="background: red; color:white">No puedes ver problemas</a>
                        <?php }else{ ?>
                        <a class="dropdown-item" href="/allProblems">Ver problemas de hoy</a>
                        <?php } ?>
                       <div class="dropdown-divider"></div>
                       <form action="/logout" method="GET">
                         <input class="dropdown-item" type="submit" value="Cerrar Sesion" />
                       </form>
                     </div>
                   </div></td></table>
            </div>
        </div>
    </div>
</div>

<?php   }}}
if(!Session::has('username')){

  ?>

  <div class="col-md-3" style="margin-top: 20px;font-family: 'Roboto', sans-serif;">
      <div class="container" style="width: 100%;">
          <div class="row vdivide" style="float:right;" >
                  <a href="/logins" style="color:white;"><img height=45 src="../img/ingreso.png" /> </a>
          </div>
      </div>
  </div>
<?php

}

?>

</div><br><br><br><br><br><br>
  <h3 style="text-align:center">Estamos por publicar tu problema! - Sólo completa éstos datos!</h3><br>
<div class="container">
<div class="row">
    <div class="col-xs-8 col-md-8">
        <div class="card">
            <h5 class="card-header">Datos de contacto</h5>
            <div class="card-body">

<form id="form-not-register" action="/savePreProblem" method="POST">
    <div class="form-group">
    <label for="exampleInputEmail1">Nombre Completo</label>
    <input type="text" name="name" class="form-control" aria-describedby="Nombre" placeholder="Nombre completo que figura en su documento">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Apellido Completo</label>
    <input type="text" name="lastName" class="form-control" aria-describedby="Apellido" placeholder="Apellido que figura en su documento">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Direccion de E-mail</label>
    <input type="email" name="emailUser" class="form-control" id="emailUser" aria-describedby="emailHelp" placeholder="Luego del registro será su nombre de usuario"><div class="text-center" id="resultEmail"></div>
    <small id="emailHelp" class="form-text text-muted">Ésta dirección de E-mail debe ser verdadera, para la confirmación de la cuenta.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ingrese una contraseña</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña para el ingreso al sitio web">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Ingrese su número telefónico</label>
    <input type="number" name="phone" class="form-control" id="exampleInputPassword1" placeholder="+54 9 223 5 648454">
  </div>
  <input type="hidden" name="specialty" value="{{$specialty}}" />
  <input type="hidden" name="category" value="{{$category}}" />
  <input type="hidden" name="subCategory" value="{{$subCategory}}" />
  <input type="hidden" name="description" value="{{$description}}" />
 <input type="hidden" value="{{csrf_token()}}" name="_token" >
  <input type="hidden" name="ciudad" value="{{$ciudad}}" />

  <button type="submit" class="btn btn-outline-primary">Enviar problema!</button>
</form>

            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
        <h5 class="card-header">Problema</h5>
        <div class="card-body">
            <h5 class="card-title">Usted necesita un: {{$specialty}}</h5>
            <p class="card-text">{{$description}}</p>
            <p class="card-text">En la ciudad de <strong>{{$ciudad}}</strong></p>

  </div>
</div>
    </div>
</div>
</div>



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
             $("#resultEmail").delay(500).queue(function(n) {

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





</body>
</html>
