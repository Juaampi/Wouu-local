@extends('menu')
@section('cuerpo')


<?php

use App\Problem;
use App\Status;
use App\Person;
use App\Specialist;
use App\activeProblem;
use App\Contrato;

$idSpecialist = $_GET['idSpecialist'];

$problems = activeProblem::where('idSpecialist','=', $idSpecialist)->get();

$cantidad = activeProblem::where('idSpecialist','=', $idSpecialist)->count();


?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
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
    <link href="https://fonts.googleapis.com/css?family=Spicy+Rice" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
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
<body style="background: #dce8e6;">


<br><br><br><br><br><br>

<?php

$specialists = Specialist::where('id', '=', $idSpecialist)->get();

?>

<div class="container-fluid">
    <div class="card" style="background:white;box-shadow: 2px 2px 7px 4px #888888; border-radius: 9px;">
        <div class="card-body">
            <div class="row">
            <div class="col-md-4"><br>
                <img style="display:block; margin: 0 auto;border-radius: 5px;" height="260" width="425" src="{{$specialists[0]['ruta']}}"><br>
                       <?php $points = $specialists[0]['points'];
                            if(!empty($points)){ ?>
                        <br>
         <div class="text-center" style="margin-top: -35px;">Puntaje promedio </div>

         <?php

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

            <?php } ?>

          
            <?php }else{ ?>
            <br>
            <div class="alert alert-danger text-center" role="alert">El profesional aun <strong>NO</strong> fue puntuado</div>

            <?php } ?>
        </div>
        <br>
    <div class="col-md-8">

                       <div class="text-center" style="font-size:35px;font-weight: bold;" >{{$specialists[0]['name'] . ' ' . $specialists[0]['lastName']}}
                 </div>
                 <table cellspacing="80px">
                     <tr><td style="padding: 20px 110px;">
                <div id="noEdit" style="font-family: 'Lato', sans-serif;color:#565656;">
                    <!-- DATOS PERSONALES  -->
                    <p class="card-text"> <strong>DNI: </strong>{{ $specialists[0]['dni'] }} </p>
                    <p class="card-text"> <strong>Telefono:</strong> {{ $specialists[0]['phone'] }} </p>
                      <p class="card-text"> <strong>Provincia:</strong> {{ $specialists[0]['province'] }} </p>
                    <p class="card-text"> <strong>Horario inicial: </strong>{{ $specialists[0]['initSchedule'] }} </p>
                </div>
                </td>
                <td>
                      <div id="noEdit" style="font-family: 'Lato', sans-serif;color:#565656;">
                    <!-- DATOS PERSONALES  -->
                      <p class="card-text"> <strong>E-mail: </strong> {{ $specialists[0]['email'] }} </p>
                     <p class="card-text"> <strong>Ciudad: </strong> {{ $specialists[0]['city'] }} </p>
                    <p class="card-text"> <strong>Especialidad:</strong> {{ $specialists[0]['lastName'] }} </p>
                    <p class="card-text"> <strong>Horario Final:</strong> {{ $specialists[0]['finalSchedule'] }} </p>
                </div>
                </td>

                </tr>
                </table><br><br>
                <div class="row">
                  <div class="col-md-12">
                <div style="margin: 0 auto;">  <p style="margin-left: 38%;font-size: 20px; font-family: 'Lato', sans-serif;color:#00a861;;">Perfil verificado <img style="height: 37px;" src="../img/shield.png"></p></div>
              </div>
              </div>
                <?php if ($specialists[0]['description'] != ''){?>
                <div class="alert alert-info">{{$specialists[0]['description']}}</div>
                <?php }
                    $problemas = activeProblem::where('idSpecialist', '=', $specialists[0]['id'])->get();
                      if($problemas){
                      for($i = 0; $i<count($problemas); $i++){
                          $cantEspera = Status::where('idProblem', '=', $problemas[$i]['idProblem'])->where('status', '=', 1)->count();
                          $cantRealizacion = Status::where('idProblem', '=', $problemas[$i]['idProblem'])->where('status', '=', 2)->count();
                          $cantFinal = Status::where('idProblem', '=', $problemas[$i]['idProblem'])->where('status', '=', 3)->count();
                          $cantPuntuado = Status::where('idProblem', '=', $problemas[$i]['idProblem'])->where('status', '=', 4)->count();
                      if($cantEspera){?>
                         <div class="alert alert-danger text-center">El profesional se encuentra con <strong>{{$cantEspera}}</strong> problemas en espera de confirmacion.</div>
                      <?php
                      }if($cantRealizacion){
                      ?><div class="alert alert-warning text-center">El profesional se encuentra realizando <strong> {{$cantRealizacion}} </strong> problemas.</div>
                      <?php
                      }if($cantFinal){?>
                       <div class="alert alert-primary text-center">El profesional ha finalizado <strong> {{$cantFinal}} </strong> problemas.</div>
                      <?php
                    }if($cantPuntuado){?>
                       <div class="alert alert-success text-center">El profesional ha sido puntuado <strong> {{$cantPuntuado}} </strong> veces.</div>
                    <?php
                  }
}
                  }else{ ?>

                 <div class="alert alert-primary text-center">ACTUALMENTE NO PARTICIPO DE NINGUN PROBLEMA</div>

                 <?php } ?>

                <?php if(Session::has('username')){ ?>
                    <form action="/conversacion" method="GET">
                        <input type="hidden" value="{{$specialists[0]['id']}}" name="idReceptor" />
                            <?php $specialist = Specialist::where('email','=',Session('username'))->get();
                                if(!$specialist->isEmpty()){ ?>
                                <input type="hidden" value="{{$specialist[0]['id']}}" name="idEmisor" />
                            <?php }else{
                                $user = Person::where('email','=',Session('username'))->get();
                                    if(!$user->isEmpty()){ ?>
                                     <input type="hidden" value="{{$user[0]['id']}}" name="idEmisor" />
                                   <?php  }
                            }
                         } ?>

                    </form>

                </div>
            </div>
        </div>
      </div>
  </div>
<br>


   <div class="container">
        <div class="row" style="margin:0">
            <div class="col-md-12 text-center" style="font-size: 40px;font-family: 'Raleway', sans-serif;color:black;font-weight: bold;">
                Opiniones de la gente que contrato a <strong>{{$specialists[0]['name']}}</strong>
            </div>
        </div>
    </div><br>



<?php

$problema = Status::where('idSpecialist', '=', $specialists[0]['id'])->get();

if($problema){
    for($x =0; $x<count($problema); $x++){
        if($problema[$x]['status'] == 4){
            $user = Person::find($problema[$x]['idUser'])->get();
            $points = $problema[$x]['points'];
?>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="display:block; margin: 0 auto;">
            <div class="card" style="box-shadow: 2px 2px 7px 4px #888888">
                <div class="card-header">
                     Fecha <span style="display:block; float:right;">{{$problema[$x]['created_at']}}</span>
                </div>
            <div class="card-body">
            <h5 class="card-title">{{ $user[0]['name'] }}</h5>
            <p class="card-text">{{$problema[$x]['coment']}}</p>
            <div style="  display: flex;align-items: center;"><div style="margin: 0 auto">
            <?php if($points >=9 && $points <=9.6){ ?>
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

            <?php } ?>

            </div></div>
        </div>
    </div>
</div>
    </div>
</div><br>
        <?php }
    }
}






$contratos = Contrato::where('idSpecialist','=',$specialists[0]['id'])->get();

for ($i=0;$i<count($contratos);$i++){

    $user = Person::where('id', '=', $contratos[$i]['idUser'])->get();

        if($contratos[$i]['coment']!=''){
            $points = $contratos[$i]['points'];

?>


<div class="container">
    <div class="row">
        <div class="col-md-12" style="display:block; margin: 0 auto;">
            <div class="card" style="box-shadow: 2px 2px 7px 4px #888888">
                <div class="card-header">
                     Comentario de contrato <span style="display:block; float:right;">{{$contratos[$i]['updated_at']}}</span>
                </div>
            <div class="card-body">
            <h5 class="card-title">{{ $user[0]['name'] }}</h5>
            <p class="card-text">{{$contratos[$i]['coment']}}</p>
            <div style="  display: flex;align-items: center;"><div style="margin: 0 auto">
            <?php if($points >=9 && $points <=9.6){ ?>
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

            <?php } ?>

            </div></div>
        </div>
    </div>
</div>
    </div>
</div>
<br><br>


<?php
}}
if(Session::has('username')){
    $specialist = Specialist::where('email','=',Session('username'))->get();
        if($specialist->isEmpty()){  ?>

        <div class="container">
                <form class="text-center" action="/contrato" method="GET">
                    <input type="hidden" value="{{$specialists[0]['id']}}" name="idSpecialist" />
                    <input type="hidden" value="{{$user[0]['id']}}" name="idUser" />
                    <input type="image" height=50 src="../img/contratar.png" style="display:block; margin:0 auto" alt="Submit Form" /><br>
                </form>
            </div>

<?php }else{?>
    <div class="container">
        <div class="alert alert-danger text-center">No puedes contratar siendo un especialista. Crea tu cuenta de usuario desde <a href="registro"><strong>Aqui</strong></a></div>
    </div>
  <?php  }
  }else{ ?>
              <div class="container">
                <form class="text-center" action="/preContrato" method="GET">
                    <input type="hidden" value="{{$specialists[0]['id']}}" name="idSpecialist" />
                    <input type="image" height=50 src="../img/contratar.png" style="display:block; margin:0 auto" alt="Submit Form" /><br>
                </form>
            </div>
 <?php } ?>


<script>
function myFunction() {
    document.getElementById("edit").style.display = "block";
    document.getElementById("noEdit").style.display = "none";
}
</script>
 <script>
function myFunction2() {
    document.getElementById("edit").style.display = "none";
    document.getElementById("noEdit").style.display = "block";
}
</script>
 <script>
function myFunction3() {
    document.getElementById("datos").style.display = "block";
}
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
                          url: "comprobarPassProf.php",
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
document.getElementById("newpassconfirm").style.background = "red";
document.getElementById("newpassconfirm").style.color = "white";
document.getElementById("confirmar").style.display = "none";
document.getElementById("resultCorrect").style.display = "none";
document.getElementById("resultIncorrect").style.display = "block";

}
  }
</script>

    </body>



</html>
@endsection
