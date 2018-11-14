<?php
namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Specialist;
use App\Person;
?>
<html>
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="../css/animate.css">
</head>
</html>
<?php

class PaginasController extends Controller
{
    public function funcion1()
    {
      return view('index');
    }
    public function index()
    {
      return view('index');
    }
    public function cargar(Request $request)
    {
      $especialista = Especialista::find(3);
      Session::put('especialista',$especialista->nombre);
      return view('welcome',['especialista' => $especialista]);
    }

    public function loguearse(Request $request)
    {
      $user = Person::where('username','=',$request['username'])->get();
      $password = Person::where('password','=',$request['password'])->get();
      if(!$user->isEmpty() && !$password->isEmpty()){
        Session::put('username',$request['username']);
         echo'<script>
swal("Bienvenido Usuario!", "Lo redireccionaremos a su perfil! espere por favor...", "success");
</script>';

          return redirect('/userPanel');
      }else{
        $user = Specialist::where('username','=',$request['username'])->get();
        $password = Specialist::where('password','=',$request['password'])->get();
        if(!$user->isEmpty() && !$password->isEmpty()){
          Session::put('username',$request['username']);
          echo'<script>
swal("Bienvenido Profesional!", "Lo redireccionaremos a su perfil! espere por favor...", "success");
</script>';

          return redirect('/specialistPanel');
        }else{
            echo'<script>
swal("Datos incorrectos!", "Por favor verifique los datos e intente nuevamente", "error");
</script>';
sleep(4);
          return redirect('/logins');
        }
      }
    }
    public function logout(){
      Session::flush();
       return view('index');
    }

    public function allSpecialist(){
      return view('../layouts/specialists');
    }

    public function adminPanel(){
        return view('../layouts/adminPanel');
    }

}
