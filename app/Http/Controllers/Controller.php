<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use session;
use App\Specialist;
use App\Person;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function logins()
    {
        return view('../layouts/logins');
    }

    /*public function loguearse(Request $request){
      $person = new Person;
      $user = $person::where('username', $request['username']);
      $password = $person::where('password', $request['password']);
        if(!$user->isEmpty() && !$password->isEmpty()){
        Session::put('username',$request['username']);
        var_dump($user);
      }*/
      /*else{
        return view('../layouts/logins');
      }*/
      
      public function index(){
      return view('../layouts/userPanel');
    }
    
}
