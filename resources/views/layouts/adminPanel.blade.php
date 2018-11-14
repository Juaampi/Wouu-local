<?php

use App\Person;
use App\Specialist;
use App\Problem;
use App\activeProblem;
use App\chat;
use App\Status;
use App\Contrato;


$user = Person::all();
$specialists = Specialist::all();
$problems = Problem::all();

$cantUser = Person::count();
$cantSpecialist = Specialist::count();
$cantProblems = Problem::count();

$contratos = Contrato::all();
$cantContrato = Contrato::count();

?>

<html>
    <head>
        <title>Administración... </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Panel de Administración</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" onclick="editUser()">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="editSpecialist()">Especialistas</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" onclick="contratos()">Contratos</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" onclick="aprobacion()">Aprobación de imagen de Perfil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="problems()">Problemas de la gente</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" onclick="matriculas()">Aprobación de Matrículas</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<br>
        <div class="container">
               <div class="row">
                   <div class="col-md-3 alert alert-success" >
                        Cantidad de usuarios: <span style="border-radius:5px; color:white; background:green; font-weight: bold;"> {{$cantUser}}</span>
                    </div>
                    <div class="col-md-3 alert alert-info">
                        Cantidad de profesionales: <span style="border-radius:5px; color:white; background:blue; font-weight: bold;"> {{$cantSpecialist}}</span>
                    </div>
                    <div class="col-md-3 alert alert-danger" >
                        Cantidad de problemas: <span style="border-radius:5px; color:white; background:red; font-weight: bold;"> {{$cantProblems}}</span><br><br>
                        </div>
                         <div class="col-md-3 alert alert-dark">
                        Cantidad de problemas: <span style="border-radius:5px; color:white; background:black; font-weight: bold;"> {{$cantContrato}}</span><br><br>
                        </div>
                </div>
        </div>
        
          <div class="container" id="matriculas" style="display:none;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table>
                                                      <thead class="thead-dark">
                                                            <tr>
                                                                <th scope="col">ID</th>
                                                                <th scope="col">Nombre</th>
                                                                <th scope="col">Apellido</th>
                                                                <th scope="col">Especialidad</th>
                                                                <th scope="col">Acción</th>
                                                                
                                                            </tr>
                                                            </thead>
        
<?php 
                        
                         for($i=0; $i<count($specialists);$i++){
                            if($specialists[$i]['activate'] == 1){ ?>
                            
                             
                                                               <tr>
                                                                    <th scope="row"> {{ $specialists[$i]['id'] }} </th>
                                                                    <td>  {{ $specialists[$i]['name']}}  </td>
                                                                    <td>  {{ $specialists[$i]['lastName'] }} </td>
                                                                    <td>  {{ $specialists[$i]['specialty'] }} </td>
                                                                    <td> <form action="/activate" method="GET">
                                                                         <input type="hidden" value="{{$specialists[$i]['id']}}" name="idSpecialist" />
                                                                         <input type="submit" class="btn btn-danger" value="Aprobar"/>
                                                                    </form> </td>  
                                                                </tr>
                                             
                                    <?php }} ?>
                                       </table>
                                            </div>
                                        </div>
                                    </div>
                               

 <div class="row" id="aprobacion" style="display:none">
                                            <div class="col-md-12">
                                                <table class="table">  
                                                    <thead class="thead-dark">
                                                            <tr>
                                                                <th scope="col">ID</th>
                                                                <th scope="col">Nombre</th>
                                                                <th scope="col">Apellido</th>
                                                                <th scope="col">Especialidad</th>
                                                                <th scope="col">Img a cambiar</th>
                                                                <th scope="col">Acción</th>
                                                                
                                                            </tr>
                                                            </thead>
                    <?php     
                       for($i=0; $i<count($specialists);$i++){
                        if($specialists[$i]['activate'] == 3){ ?>
                                    
                                                               <tr>
                                                                    <th scope="row"> {{ $specialists[$i]['id'] }} </th>
                                                                    <td>  {{ $specialists[$i]['name']}}  </td>
                                                                    <td>  {{ $specialists[$i]['lastName'] }} </td>
                                                                    <td>  {{ $specialists[$i]['specialty'] }} </td>
                                                                    <td>  <img height="100" width="100" src="{{$specialists[$i]['ruta']}}"/> </td>
                                                                    <td> <form action="/activateImg" method="GET">
                                                                         <input type="hidden" value="{{$specialists[$i]['id']}}" name="idSpecialist" />
                                                                         <input type="submit" class="btn btn-info" value="Aprobar"/>
                                                                    </form>   
                                                                        <form action="/cancelateImg" method="GET">
                                                                            <input type="hidden" value="{{$specialists[$i]['id']}}" name="idSpecialist" />
                                                                            <input type="submit" class="btn btn-danger" value="Cancelar">
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                              
                        <?php }}
                    ?>
                      </table>
                                            </div>
                                        </div>
               
               
               
        
      <div class="row">
            <div class="col-md-12">
                <div  id="users" class="users" style="display: none">
                    Usuarios:
                    <table id="user" class="table" >
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">DNI</th>
                            <th scope="col">Email</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Provincia</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Acción</th>
                        </tr>
                        </thead>
                            <?php

                        for($i = 0; $i < count($user); $i++){ ?>

                                <tr>
                                <th scope="row"> {{ $user[$i]['id'] }} </th>
                                <td>  {{ $user[$i]['name']}}  </td>
                                <td>  {{ $user[$i]['lastName'] }} </td>
                                <td>  {{ $user[$i]['dni'] }} </td>
                                <td>  {{ $user[$i]['email'] }} </td>
                                <td>  {{ $user[$i]['phone'] }} </td>
                                <td>  {{ $user[$i]['province']}}  </td>
                                <td>  {{ $user[$i]['city']}}  </td>
                                <td>  {{ $user[$i]['username']}}  </td>
                                <td>  {{ $user[$i]['password'] }} </td>
                                <td> <form action="/deleteUser" method="GET">
                                    <input type="hidden" name="idUser" value="{{$user[$i]['id']}}">
                                    <input type="submit" class="btn btn-danger" value="Eliminar" />
                                </form></td>
                                </tr>

                            <?php }  ?>
                    </table>
                </div>
             
        </div>

        </div>
        
          <div class="row" style="margin:0">
         <div class="col-md-12">
                <div id="specialist" style="display:none">
                    Especialistas :
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">DNI</th>
                            <th scope="col">Email</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Provincia</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Especialidad</th>
                             <th scope="col">Puntos </th>
                            <th scope="col">Comienzo</th>
                            <th scope="col">Final</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Acción</th>
                        </tr>
                        </thead>
                        <?php for($i = 0; $i < count($specialists); $i++){ ?>
                            <tr>
                            <td>{{$specialists[$i]['id']}}</td>
                            <td>{{$specialists[$i]['name']}}</td>
                            <td>{{$specialists[$i]['lastName']}}</td>
                            <td>{{$specialists[$i]['dni']}}</td>
                            <td>{{$specialists[$i]['email']}}</td>
                            <td>{{$specialists[$i]['phone']}}</td>
                            <td>{{$specialists[$i]['province']}}</td>
                            <td>{{$specialists[$i]['city']}}</td>
                            <td>{{$specialists[$i]['specialty']}}</td>
                            <td>{{$specialists[$i]['points']}}</td>
                            <td>{{$specialists[$i]['initSchedule']}}</td>
                            <td>{{$specialists[$i]['finalSchedule']}}</td>
                            <td>{{$specialists[$i]['username']}}</td>
                            <td>{{$specialists[$i]['password']}}</td>
                              <td> <form action="/deleteSpecialist" method="GET">
                                    <input type="hidden" name="idSpecialist" value="{{$specialists[$i]['id']}}">
                                    <input type="submit" class="btn btn-danger" value="Eliminar" />
                                </form></td>
                          </tr>
                          <?php  } ?>
                    </table>
                </div>
        </div>
</div>

<button id="cancelar" style="display: none" class="btn btn-danger" onclick="cancelarEdicion();">Cancelar edicion</button>
        
           <div class="row" id="problems" style="display:none;">
                <?php
                  for($i = 0; $i<count($problems);$i++){
                      $status = Status::where('idProblem','=',$problems[$i]['id'])->get();
                      ?>
            <div class="col-md-2">
                         <div class="card" style="width:15rem;">
                            <div class="card-body">
                                <p class="text-muted">Se necesita: {{$problems[$i]['specialty']}}</p>
                                <p>El usuario nº {{$problems[$i]['idUser']}}</p>
                                <h5 class="card-title">Problema Nº  {{ $problems[$i]['id']}} </h5>
                                <p class="card-text"> En la zona {{ $problems[$i]['zone'] }}</p><br>
                                <p class="card-text"><strong> Se observa lo siguiente: </strong> {{$problems[$i]['description']}}</p>
                                <img style="border-radius: 5px" height="200px" width="210px" src="{{$problems[$i]['img']}}" /><br><br>
                                 <div>
                                <?php
                                    if($status){?>
                                    <div class="alert alert-dark">Aún no ah recibido respuestas de profesionales.</div> <?php
                                    }else{
                                    if($status[0]['status']==0){ ?>
                                    <div class="alert alert-dark">Aún no ah recibido respuestas de profesionales.</div> <?php
                                    }if( $status[0]['status']== 1){?>
                                   <div class="alert alert-danger">Esperando confirmación del profesional</div><?php
                                    }if( $status[0]['status'] == 2){?>
                                   <div class="alert alert-warning">En realización... por el profesional Nº<strong><?php echo $status->idSpecialist ?></strong></div><?php
                                    }if( $status[0]['status'] == 3){ ?>
                                        <div class="alert alert-info">Finalizado(En espera de puntuación)</div><?php
                                    }if( $status[0]['status'] == 4){?>
                                           <div class="alert alert-success">FINALIZADO</div>
                                    <?php }} ?>
                                  </div>
                            </div>
            </div>
            </div>

                <?php
                    }
                    ?>
            </div>
     
        </div>
      
      
      
      
      
      
      
      
      
      
      
           <div class="row">
            <div class="col-md-12">
                <div  id="contratos" class="users" style="display: none">
                   Contratos:
                    <table id="user" class="table" >
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID Contrato</th>
                            <th scope="col">ID Usuario</th>
                            <th scope="col">ID Especialista</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Comentario</th>
                            <th scope="col">Puntaje</th>
                            
                        </tr>
                        </thead>
                            <?php

                        for($i = 0; $i < count($contratos); $i++){ ?>

                                <tr>
                                <th scope="row"> {{ $contratos[$i]['id'] }} </th>
                                <td>  {{ $contratos[$i]['idUser']}}  </td>
                                <td>  {{ $contratos[$i]['idSpecialist'] }} </td>
                                <td>  {{ $contratos[$i]['state'] }} </td>
                                @if($contratos[$i]['state'] < 4)
                                <td><div class="alert alert-danger">Aún no fue finalizado</div></td>
                                <td><div class="alert alert-danger">Aún no fue finalizado</div></td>
                                @else
                                <td>  {{ $contratos[$i]['coment'] }} </td>
                                <td>  {{ $contratos[$i]['points'] }} </td>
                                @endif
                                <td> <form action="/deleteContrato" method="GET">
                                    <input type="hidden" name="idContrato" value="{{$contratos[$i]['id']}}">
                                    <input type="submit" class="btn btn-danger" value="Eliminar" />
                                </form></td>
                                </tr>

                            <?php }  ?>
                    </table>
                </div>
             
        </div>

        </div>
        
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      



        <script>
function myFunction() {
    document.getElementById("edit").style.display = "block";
}
</script>
 <script>
function myFunction2() {
    document.getElementById("edit").style.display = "none";
}
</script>
 <script>
function editUser() {
    document.getElementById("users").style.display = "block";
    document.getElementById("cancelar").style.display = "block";
    document.getElementById("editar").style.display = "none";
}
</script>

 <script>
function editSpecialist() {
    document.getElementById("specialist").style.display = "block";
    document.getElementById("cancelar").style.display = "block";
    document.getElementById("editspecialist").style.display = "none";
    document.getElementById("users").style.display = "none";
}
</script>

 <script>

function cancelarEdicion() {
    document.getElementById("users").style.display = "none";
       document.getElementById("specialist").style.display = "none";
       document.getElementById("problems").style.display = "none";
       document.getElementById("cancelar").style.display= "none";
       document.getElementById("contratos").style.display= "none";
        document.getElementById("aprobacion").style.display= "none";
            document.getElementById("matriculas").style.display= "none";
       

}
</script>
 <script>
function problems() {
    document.getElementById("problems").style.display = "block";
    document.getElementById("cancelar").style.display = "block";
    document.getElementById("verProblems").style.display = "none";
}
</script>

 <script>
function contratos() {
    document.getElementById("contratos").style.display = "block";
    document.getElementById("cancelar").style.display = "block";
}
</script>

 <script>
function aprobacion() {
    document.getElementById("aprobacion").style.display = "block";
    document.getElementById("cancelar").style.display = "block";
}
</script>

 <script>
function matriculas() {
    document.getElementById("matriculas").style.display = "block";
    document.getElementById("cancelar").style.display = "block";
}
</script>

    </body>
</html>
