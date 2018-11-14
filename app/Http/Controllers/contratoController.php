<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\activeProblem;
use App\Status;
use App\Contrato;
use App\Person;
use App\Specialist;?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="../css/animate.css">
</head>
</html>
<?php 
class contratoController extends Controller
{
    
      public function deleteContrato(Request $request){
        $contrato = Contrato::find($request['idContrato']);
        $contrato->delete();
        return redirect('/adminPanel');
    }

    public function aceptarContrato(Request $request){
        $contrato = Contrato::find($request['id']);
        $contrato->state = 2;
        $contrato->save();

        return redirect('/specialistPanel');
    }

     public function finalizarContrato(Request $request){
        $contrato = Contrato::find($request['id']);
        $contrato->state = 3;
        $contrato->save();

        return redirect('/userPanel');
    }

    public function puntuarContrato(Request $request){
        $contrato = Contrato::find($request['id']);
        $contrato->state = 4;
        $contrato->coment = $request['coment'];
        $contrato->points = $request['points'];
        $contrato->save();
        
        $specialist = Specialist::find($request['idSpecialist']);
        if($specialist->points == ''){
            $specialist->points = $request['points'];
        }else{
            $specialist->points = ($specialist->points + $request['points']) /2 ;    
        }
        
        $specialist->save();

        return redirect('/userPanel');
    }


    public function preContrato(){
        return view('../layouts/preContrato');
    }


    public function enviarPreContrato(){
        //Guardar usuario
      $ruta = "../img/perfil.jpg";
      $person = new Person;
      $person->name = $_POST['name'];
      $person->lastName = $_POST['lastName'];
      $person->dni = '';
      $person->email = $_POST['email'];
      $person->phone = $_POST['phone'];
      $person->province = 'Buenos Aires';
      $person->city = 'Mar del Plata';
      $person->date = '';
      $person->sex = '';
      $person->zone = '';
      $person->ruta = $ruta;
      $person->username = $_POST['email'];
      $person->password = $_POST['password'];
      $person->type = 'usuario';
      $serial = uniqid();
      $serialString = (string)$serial;
      $person->confirmcode = $serialString;
      $person->activate = 0;
      $person->save();
      $idPerson = $person->id;


        //Guardar contrato
        $contrato = new Contrato;
        $contrato->idSpecialist=$_POST['idSpecialist'];
        $contrato->idUser = $idPerson;
        $contrato->state = 1;
        $contrato->save();

        $email_to = "" . $_POST['email'] . "";
	    $email_subject = "Validación de correo electronico por publicacion de problema sin registrar Wouu ";
	    $email_from = "validacion@wouu.com.ar";
        $email_message = "Éste es un Email automático, No debe responderlo. \n\n Por favor para la confirmación de la cuenta debe clickear el siguiente link .. \n\n";
	    $email_message .= " www.wouu.com.ar/activation/activateUser.php/?serial=$serialString \n\n";
	    $email_message .= "Para comunicarse con la administracion escribir a administracion@wouu.com.ar";
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		@mail($email_to, $email_subject, $email_message, $headers);
		 echo'<script>
swal("Bienvenido Usuario!", "Se ha registrado con exito. Va a ser redireccionado al panel de Login, para que pueda ingresar con su Email. (No olvide revisar la casilla de su Email para confirmar el mismo.)", "success");
</script>';
		
        return redirect('/logins');
    }
    
    public function contrato(Request $request){
        $contrato = new Contrato;
        $contrato->idSpecialist=$request['idSpecialist'];
        $contrato->idUser = $request['idUser'];
        $contrato->state = 1;
        $contrato->save();

        return redirect('/userPanel');
    }
    
}
?>

