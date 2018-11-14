<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\activeProblem;
use App\Status;

class activeProblemController extends Controller
{
    public function activeProblem(Request $request){
      $active = new activeProblem;
      $active->idProblem = $request['idProblem'];
      $active->idUSer = $request['idUser'];
      $active->idSpecialist = $request['idSpecialist'];
      $active->msj = $request['msj'];
      $active->time = $request['time'];
      $active->money = $request['money'];
      $active->visto = 0;
      $active->save();

      $status = new Status;
      $status->idUSer = $request['idUser'];
      $status->idProblem = $request['idProblem'];
      $status->idSpecialist = $request['idSpecialist'];
      $status->status = 0;
      $status->save();

      return redirect('/specialistMsj');


    }
}
