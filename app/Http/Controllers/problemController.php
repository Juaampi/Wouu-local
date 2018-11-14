<?php

namespace App\Http\Controllers;

session_start();
use Session;
use Illuminate\Http\Request;
use App\Problem;
use App\Person;
use App\Status;
use App\activeProblem;
use App\Chat;
use App\Specialist;
?>
<html>
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="../css/animate.css">
</head>
</html>

<?php 

use Illuminate\Support\Facades\Input;

class problemController extends Controller
{
      public function preContrato(){
          $ruta = '';
           Session::put('ruta', $ruta);
        return view('../layouts/preContrato');
    }

    public function preProblem(){
            $file = Input::file('file');
             if(!$file){
                $ruta = "../img/problema.png";
            }else{
                $file->move('img', $file->getClientOriginalName());
                $ruta="../img/";//ruta carpeta donde queremos copiar las imágenes
                $ruta.=$file->getClientOriginalName();
            }
        Session::put('ruta', $ruta);
        return view('../layouts/preProblem');
    }

    public function saveProblem(){

        $user = Person::where('id','=',$_POST['idUser'])->get();
        Session::put('username', $user[0]['username']);
        $file = Input::file('file');
        if(!$file){
            $ruta = '../img/problema.png';
        }else{
            $file->move('img', $file->getClientOriginalName());
            $ruta="../img/";//ruta carpeta donde queremos copiar las imágenes
            $ruta.=$file->getClientOriginalName();
        }
        $problem = new Problem;
        $problem->idUser = $user[0]['id'];
        $problem->category = $_POST['category'];

      if($_POST['category'] == 'Asesoramiento Contable y Legal'){
        $problem->subCategory = $_POST['Asesoramiento'];
          if($_POST['Asesoramiento'] == 'Abogados y Estudios Jurídicos'){
              $problem->specialty = $_POST['abogados_tipos'];
          }if($_POST['Asesoramiento'] == 'Contadores y Estudios'){
              $problem->specialty = 'Contador Público';
          }if($_POST['Asesoramiento'] == 'Gestores'){
              $problem->specialty = $_POST['Gestores'];
          }if($_POST['Asesoramiento'] == 'Martilleros Públicos'){
              $problem->specialty = $_POST['Martilleros'];
          }if($_POST['Asesoramiento'] == 'Productores de Seguros'){
              $problem->specialty = $_POST['Productoras_Seguros'];
          }if($_POST['Asesoramiento'] == 'Despachantes de Aduana'){
              $problem->specialty = 'Despachante de Aduana';
          }if($_POST['Asesoramiento'] == 'Tasadores'){
              $problem->specialty = $_POST['Tasador_es'];
          }if($_POST['Asesoramiento'] == ''){
              $problem->specialty = 'Abogado / Contador';
          }
      }if($_POST['category'] == 'Belleza y Cuidado Personal'){
      $problem->subCategory = $_POST['Belleza'];
      $problem->specialty = $_POST['Belleza'];
      }if($_POST['category'] == 'Comunicación y Diseño'){
      $problem->specialty = $_POST['Comunicacion_diseño'];
      $problem->subCategory = $_POST['Comunicacion_diseño'];
      }if($_POST['category'] == 'Cursos y Clases'){
      $problem->specialty = $_POST['Cursos_Clases'];
      $problem->subCategory = $_POST['Cursos_Clases'];
      }if($_POST['category'] == 'Fiestas y Eventos'){
      $problem->specialty = $_POST['Fiestas_Eventos'];
      $problem->subCategory = $_POST['Fiestas_Eventos'];
      }if($_POST['category'] == 'Fotografía, Música y Cine'){
      $problem->specialty = $_POST['Fotografia_Musica'];
      $problem->subCategory = $_POST['Fotografia_Musica'];
      }if($_POST['category'] == 'Hogar y Construcción'){
        if($_POST['hogar_construccion'] == 'Cabañas Construcción'){
          $problem->subCategory = 'Construccion de Cabañas';
          $problem->specialty = 'Construccion de Cabañas';
        }if($_POST['hogar_construccion'] == 'Cabañas Mantenimiento'){
          $problem->subCategory = 'Mantenimiento de Cabañas';
          $problem->specialty = 'Mantenimiento de Cabañas';
        }if($_POST['hogar_construccion'] == 'Mantenimiento del Hogar'){
          $problem->specialty = $_POST['Mantenimiento_del_hogar'];
          $problem->subCategory = 'Mantenimiento del Hogar';
        }if($_POST['hogar_construccion'] == 'Obras y Construcción'){
          $problem->specialty = $_POST['Obras_Construcción'];
          $problem->subCategory = 'Obras y Construcción';
        }if($_POST['hogar_construccion'] == 'Instalación y Servicio Técnico'){
          $problem->specialty = $_POST['Instalacion_tecnico'];
          $problem->subCategory = 'Instalación y Servicio Técnico';
        }
      }if($_POST['category'] == 'Imprenta'){
        $problem->specialty = $_POST['Impreciones'];
        $problem->subCategory = $_POST['Impreciones'];
      }if($_POST['category'] == 'Mantenimiento de Vehículos'){
        $problem->specialty = $_POST['Mantenimiento_vehiculos'];
        $problem->subCategory = $_POST['Mantenimiento_vehiculos'];
      }if($_POST['category'] == 'Medicina y Salud'){
        $problem->specialty = $_POST['Medicina_salud'];
        $problem->subCategory = $_POST['Medicina_salud'];
      }if($_POST['category'] == 'Ropa y Moda'){
        $problem->specialty = $_POST['Ropa_Moda'];
        $problem->subCategory = $_POST['Ropa_Moda'];
      }if($_POST['category'] == 'Servicio para Mascotas'){
        $problem->specialty = $_POST['Servicio_mascotas'];
        $problem->subCategory = $_POST['Servicio_mascotas'];
      }if($_POST['category'] == 'Servicio para Oficina'){
        $problem->specialty = $_POST['Servicio_Oficina'];
        $problem->subCategory = $_POST['Servicio_Oficina'];
      }if($_POST['category'] == 'Tecnología'){
        $problem->specialty = $_POST['Tecnología_Pro'];
        $problem->subCategory = $_POST['Tecnología_Pro'];
      }if($_POST['category'] == 'Transporte'){
        $problem->specialty = $_POST['Transporte_com'];
        $problem->subCategory = $_POST['Transporte_com'];
      }if($_POST['category'] == 'Viajes y Turismo'){
        $problem->specialty = $_POST['Viajes_turismo'];
        $problem->subCategory = $_POST['Viajes_turismo'];
      }
        $problem->description = $_POST['description'];
        $problem->zone = $_POST['ciudad'];
        $problem->img = $ruta;
        $problem->save();
        
        $specialists = Specialist::all();
        for ($i = 0; $i<count($specialists);$i++){
            if($specialists[$i]['city'] == $problem->zone){
                
                $email_to = $specialists[$i]['email'];
	            $email_subject = "¡Se ha publicado un nuevo problema en tu ciudad!" ;
	            $email_from = "empleos@wouu.com.ar";
                $email_message = "Revisa la pagina ! www.wouu.com.ar \n\n";              
                $email_message .= "Para comunicarse con la administracion escribir a administracion@wouu.com.ar";
		        $headers = 'From: '.$email_from."\r\n".
		        'Reply-To: '.$email_from."\r\n" .
		        'X-Mailer: PHP/' . phpversion();
		        @mail($email_to, $email_subject, $email_message, $headers);   
                
            }
        }
                
        return redirect('/userPanel');
    }

    public function savePreProblem(){
        //Guardar usuario
      $ruta = "../img/problema.png";
      $person = new Person;
      $person->name = $_POST['name'];
      $person->lastName = $_POST['lastName'];
      $person->dni = '';
      $person->email = $_POST['emailUser'];
      $person->phone = $_POST['phone'];
      $person->province = 'Buenos Aires';
      $person->city = 'Mar del Plata';
      $person->date = '';
      $person->sex = '';
      $person->zone = '';
      $person->ruta = $ruta;
      $person->username = $_POST['emailUser'];
      $person->password = $_POST['password'];
      $person->type = 'usuario';
      $serial = uniqid();
      $serialString = (string)$serial;
      $person->confirmcode = $serialString;
      $person->activate = 0;
      $person->save();
      $idPerson = $person->id;


        //Guardar problema

      
        $ruta2 = Session::get('ruta');
        $problem = new Problem;
        $problem->idUser = $idPerson;        
        $problem->category = $_POST['category'];
        $problem->subCategory = $_POST['subCategory'];
        $problem->specialty = $_POST['specialty'];     
        $problem->description = $_POST['description'];
        $problem->zone = $_POST['ciudad'];
        $problem->img = $ruta2;
        Session::flush();
        $problem->save();
                                
        $specialists = Specialist::all()->get();
        for ($i = 0; $i<count($specialists);$i++){
            if($specialists[$i]['city'] == $problem->zone){
                
                $email_to = $specialists[$i]['email'];
	            $email_subject = "¡Se ha publicado un nuevo problema en tu ciudad!" ;
	            $email_from = "empleos@wouu.com.ar";
                $email_message = "Revisa la pagina ! www.wouu.com.ar \n\n";              
                $email_message .= "Para comunicarse con la administracion escribir a administracion@wouu.com.ar";
		        $headers = 'From: '.$email_from."\r\n".
		        'Reply-To: '.$email_from."\r\n" .
		        'X-Mailer: PHP/' . phpversion();
		        @mail($email_to, $email_subject, $email_message, $headers);   
                
            }
        }
        
                
        
        $email_to = $_POST['emailUser'];
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
swal("Bienvenido Usuario!", "El problema fue publicado. Lo redireccionaremos al panel de ingreso. Debe ingresar con sus datos ingresados (No olvide confirmar su direccion de Email. Para hacerlo debe ingresar en su casilla del mail ingresado y seguir los pasos enviados por la administracion.)", "success");
</script>';
        return redirect('/logins');
    }

    public function delete(Request $request){
      $id = $request['idProblem'];
      $problem = Problem::find($id);
      $problem->delete();
      return redirect('/userPanel');
    }

    public function deleteParticipation(Request $request){
      $idProblem = $request['idProblem'];
      $idSpecialist = $request['idSpecialist'];
      $status = Status::where('idSpecialist','=',$idSpecialist)->where('idProblem','=', $idProblem)->get();
      $statusDelete = Status::find($status[0]['id']);
      $statusDelete->delete();

      $activeProblem = activeProblem::where('idSpecialist','=',$idSpecialist)->where('idProblem','=', $idProblem)->get();
      $activeProblemDelete = activeProblem::find($activeProblem[0]['id']);
      $activeProblemDelete->delete();

      $chats = Chat::where('idSpecialist','=',$idSpecialist)->where('idProblem','=', $idProblem)->get();
      for($i = 0; $i < count($chats); $i++){
          $chatDelete = Chat::find($chats[$i]['id']);
          $chatDelete->delete();
      }
      return redirect('/specialistPanel');
    }
    public function problemas(){
      return view('../layouts/allproblems');
    }
    public function problem(){
      return view('../layouts/problem');
    }
}
