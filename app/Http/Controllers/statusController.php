<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Status;
use App\Specialist;

class statusController extends Controller
{
    public function sendContrato(Request $request){
      $status = Status::find($request['idStatus']);
      $status->idProblem = $request['idProblem'];
      $status->idUser = $request['idUser'];
      $status->idSpecialist = $request['idSpecialist'];
      $status->status = 1;
      $status->save();
      $activeProblem = activeProblem::where('idProblem', '=', $request['idProblem']);
      $activeProlem->vistoSpecialist = 0;
      return redirect('/userMsj');
    }
    public function acceptContrato(Request $request){
      $status = Status::find($request['idStatus']);
      $status->idProblem = $request['idProblem'];
      $status->idUser = $request['idUser'];
      $status->idSpecialist = $request['idSpecialist'];
      $status->status = 2;
      $status->save();
      return redirect('/specialistMsj');
    }
    public function endContrato(Request $request){
      $status =Status::find($request['idStatus']);
      $status->idProblem = $request['idProblem'];
      $status->idUser = $request['idUser'];
      $status->idSpecialist = $request['idSpecialist'];
      $status->status = 3;
      $status->save();
      return redirect('/userMsj');
    }
    public function updatePoints(Request $request){
      $status = Status::find($request['idStatus']);
      $status->idProblem = $request['idProblem'];
      $status->idUser = $request['idUser'];
      $status->idSpecialist = $request['idSpecialist'];
      $status->coment = $request['coment'];
      $status->status = 4;
      $status->points = $request['points'];
      $status->save();
      $specialist = Specialist::find($request['idSpecialist']);
      $specialist->points = ($request['points']+$specialist->points)/2;
      $specialist->save();
      return redirect('/userMsj');
    }
}
