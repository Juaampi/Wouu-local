<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Chat;

class chatController extends Controller
{
    public function chatSpecialist(){
      return view('../layouts/chatSpecialist');
    }
    public function chatUser(){
      return view('../layouts/chatUser');
    }
    public function sendChatSpecialist(Request $request){
      $chat = new Chat;
      $chat->idProblem = $request['idProblem'];
      $chat->idUser = $request['idUser'];
      $chat->idSpecialist = $request['idSpecialist'];
      $chat->msj = $request['msj'];
      $chat->type = 2;
      $chat->save();
      return redirect('/specialistMsj');
    }
    public function sendChatUser(Request $request){
      $chat = new Chat;
      $chat->idProblem = $request['idProblem'];
      $chat->idUser = $request['idUser'];
      $chat->idSpecialist = $request['idSpecialist'];
      $chat->msj = $request['msj'];
      $chat->type = 3;
      $chat->save();
      return redirect('/userMsj');
    }
    public function userMsj(){
      return view('../layouts/userMsj');
    }


}
