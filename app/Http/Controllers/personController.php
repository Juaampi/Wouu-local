<?php

namespace App\Http\Controllers;
use Session;
use App\Person;
use App\Specialist;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Participante;
use App\Conversacion;

class personController extends Controller
{
    public function conversacion(Request $request){

        $conversacion = new Conversacion;
        $conversacion->idParticipante1 = $request['idEmisor'];
        $conversacion->idParticipante2 = $request['idReceptor'];
        $conversacion->save();

        return view('../layouts/index');
    }


    public function deleteUser(Request $request){
        $user = Person::find($request['idUser']);
        $user->delete();
        return redirect('/adminPanel');
    }

    public function view(){
      return view('../layouts/registro');
    }

    public function registrar (){

      if($_POST['type'] == 'usuario'){
           $file = Input::file('file');
             if(!$file){
            $ruta = "../img/perfil.jpg";
        }else{
        $file->move('img', $file->getClientOriginalName());
        $ruta="../img/";//ruta carpeta donde queremos copiar las imágenes
        $ruta.=$file->getClientOriginalName();
        }

      $person = new Person;
      $person->name = $_POST['name'];
      $person->lastName = $_POST['lastName'];
      $person->dni = $_POST['dni'];
      $person->email = $_POST['email'];
      $person->phone = $_POST['phone'];
      $person->province = $_POST['province'];
      $person->city = $_POST['city'];
      $person->date = $_POST['date'];
      $person->sex = $_POST['sex'];
      $person->zone = $_POST['zone'];
      $person->ruta = $ruta;
      $person->username = $_POST['email'];
      $person->password = $_POST['password'];
      $person->type = $_POST['type'];
      $serial = uniqid();
      $serialString = (string)$serial;
      $person->confirmcode = $serialString;
      $person->activate = 0;
      $person->save();

        $email_to = "" . $_POST['email'] . "";
	    $email_subject = "Validación de correo electronico Wouu ";
	    $email_from = "validacion@wouu.com.ar";
        $email_message = "Éste es un Email automático, No debe responderlo. \n\n Por favor para la confirmación de la cuenta debe clickear el siguiente link .. \n\n";
	    $email_message .= " www.wouu.com.ar/activation/activateUser.php/?serial=$serialString \n\n";
	    $email_message .= "Para comunicarse con la administracion escribir a administracion@wouu.com.ar";
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		@mail($email_to, $email_subject, $email_message, $headers);

      return redirect('/postRegister');

    }else{
         $file = Input::file('file2');
        if(!$file){
            $ruta = "../img/perfil.jpg";
        }else{
        $file->move('img', $file->getClientOriginalName());
        $ruta="../img/";//ruta carpeta donde queremos copiar las imágenes
        $ruta.=$file->getClientOriginalName();
        }
      $person = new Specialist;
      $person->name = $_POST['name'];
      $person->lastName = $_POST['lastName'];
      $person->dni = '';
      $person->email = $_POST['email'];
      $person->phone = $_POST['phone'];
      $person->province = $_POST['users'];
      $person->city = $_POST['ciudad'];
      $person->date = $_POST['date'];
      $person->sex = '';
      $person->zone ='';
      $person->ruta = $ruta;
      $person->description = '';

      $person->initSchedule = $_POST['initSchedule'];
      $person->finalSchedule = $_POST['finalSchedule'];
      $person->username = $_POST['email'];
      $person->password = $_POST['password'];
      $person->type = $_POST['type'];

      $person->category = $_POST['category'];

      if($_POST['category'] == 'Asesoramiento Contable y Legal'){
        $person->subCategory = $_POST['Asesoramiento'];
          if($_POST['Asesoramiento'] == 'Abogados y Estudios Jurídicos'){
              $person->specialty = $_POST['abogados_tipos'];
          }if($_POST['Asesoramiento'] == 'Contadores y Estudios'){
              $person->specialty = 'Contador Público';
          }if($_POST['Asesoramiento'] == 'Gestores'){
              $person->specialty = $_POST['Gestores'];
          }if($_POST['Asesoramiento'] == 'Martilleros Públicos'){
              $person->specialty = $_POST['Martilleros'];
          }if($_POST['Asesoramiento'] == 'Productores de Seguros'){
              $person->specialty = $_POST['Productoras_Seguros'];
          }if($_POST['Asesoramiento'] == 'Despachantes de Aduana'){
              $person->specialty = 'Despachante de Aduana';
          }if($_POST['Asesoramiento'] == 'Tasadores'){
              $person->specialty = $_POST['Tasador_es'];
          }if($_POST['Asesoramiento'] == ''){
              $person->specialty = 'Abogado / Contador';
          }
      }if($_POST['category'] == 'Belleza y Cuidado Personal'){
      $person->subCategory = $_POST['Belleza'];
      $person->specialty = $_POST['Belleza'];
      }if($_POST['category'] == 'Comunicación y Diseño'){
      $person->specialty = $_POST['Comunicacion_diseño'];
      $person->subCategory = $_POST['Comunicacion_diseño'];
      }if($_POST['category'] == 'Cursos y Clases'){
      $person->specialty = $_POST['Cursos_Clases'];
      $person->subCategory = $_POST['Cursos_Clases'];
      }if($_POST['category'] == 'Fiestas y Eventos'){
      $person->specialty = $_POST['Fiestas_Eventos'];
      $person->subCategory = $_POST['Fiestas_Eventos'];
      }if($_POST['category'] == 'Fotografía, Música y Cine'){
      $person->specialty = $_POST['Fotografia_Musica'];
      $person->subCategory = $_POST['Fotografia_Musica'];
      }if($_POST['category'] == 'Hogar y Construcción'){
        if($_POST['hogar_construccion'] == 'Cabañas Construcción'){
          $person->subCategory = 'Construccion de Cabañas';
          $person->specialty = 'Construccion de Cabañas';
        }if($_POST['hogar_construccion'] == 'Cabañas Mantenimiento'){
          $person->subCategory = 'Mantenimiento de Cabañas';
          $person->specialty = 'Mantenimiento de Cabañas';
        }if($_POST['hogar_construccion'] == 'Mantenimiento del Hogar'){
          $person->specialty = $_POST['Mantenimiento_del_hogar'];
          $person->subCategory = 'Mantenimiento del Hogar';
        }if($_POST['hogar_construccion'] == 'Obras y Construcción'){
          $person->specialty = $_POST['Obras_Construccion'];
          $person->subCategory = 'Obras y Construcción';
        }if($_POST['hogar_construccion'] == 'Instalación y Servicio Técnico'){
          $person->specialty = $_POST['Instalacion_tecnico'];
          $person->subCategory = 'Instalación y Servicio Técnico';
        }
      }if($_POST['category'] == 'Imprenta'){
        $person->specialty = $_POST['Impreciones'];
        $person->subCategory = $_POST['Impreciones'];
      }if($_POST['category'] == 'Mantenimiento de Vehículos'){
        $person->specialty = $_POST['Mantenimiento_vehiculos'];
        $person->subCategory = $_POST['Mantenimiento_vehiculos'];
      }if($_POST['category'] == 'Medicina y Salud'){
        $person->specialty = $_POST['Medicina_salud'];
        $person->subCategory = $_POST['Medicina_salud'];
      }if($_POST['category'] == 'Ropa y Moda'){
        $person->specialty = $_POST['Ropa_Moda'];
        $person->subCategory = $_POST['Ropa_Moda'];
      }if($_POST['category'] == 'Servicio para Mascotas'){
        $person->specialty = $_POST['Servicio_mascotas'];
        $person->subCategory = $_POST['Servicio_mascotas'];
      }if($_POST['category'] == 'Servicio para Oficina'){
        $person->specialty = $_POST['Servicio_Oficina'];
        $person->subCategory = $_POST['Servicio_Oficina'];
      }if($_POST['category'] == 'Tecnología'){
        $person->specialty = $_POST['Tecnología_Pro'];
        $person->subCategory = $_POST['Tecnología_Pro'];
      }if($_POST['category'] == 'Transporte'){
        $person->specialty = $_POST['Transporte_com'];
        $person->subCategory = $_POST['Transporte_com'];
      }if($_POST['category'] == 'Viajes y Turismo'){
        $person->specialty = $_POST['Viajes_turismo'];
        $person->subCategory = $_POST['Viajes_turismo'];
      }

      $person->points = "";
      $serial = uniqid();
      $serialString = (string)$serial;
      $person->confirmcode = $serialString;
      $person->activate = 0;
      $person->save();

      $email_to = "" . $_POST['email'] . "";
	    $email_subject = "Validacion de correo electronico Wouu ";
	    $email_from = "validacion@wouu.com.ar";
      $email_message = "Éste es un Email automático, No debe responderlo. \n\n Por favor para la confirmación de la cuenta debe clickear el siguiente link .. \n\n";
	    $email_message .= " www.wouu.com.ar/activation/activate.php/?serial=$serialString  \n\n";
	    $email_message .= "Para comunicarse con la administracion escribir a administracion@wouu.com.ar";
		  $headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		@mail($email_to, $email_subject, $email_message, $headers);

      return redirect('/postRegister');
    }

    }

    public function recuperarClave(Request $request){

        $person = Person::where('email', '=', $request['email'])->get();
            if($person->isEmpty()){
                $specialist = Specialist::where('email', '=', $request['email'])->get();
                    if($specialist->isEmpty()){
                        echo'<script>alert("El email ingresado no existe en la plataforma. Por favor registrese o intente con otro.")</script>';
                        return redirect('/logins');
                    }else{
                        $serial = uniqid();
                        $email = $specialist[0]['email'];
                        $serialString = (string)$serial;
                        $email_to = $request['email'] ;
	                    $email_subject = "Recupero de contraseña para especialistas Wouu!";
	                    $email_from = "administracion@wouu.com.ar";
                        $email_message = "Éste es un Email automático, No debe responderlo. \n\n Para reestablecer la contraseña debe clickear el siguiente LINK. \n\n";
	                    $email_message .= " www.wouu.com.ar/activation/recuperarClaveProf.php/?serial=$serialString&email=$email  \n\n";
	                    $email_message .= "Para comunicarse con la administracion escribir a administracion@wouu.com.ar \n\n";
	                    $email_message .= "SU NUEVA CONTRASEÑA ES: " . $serialString . "";
		                $headers = 'From: '.$email_from."\r\n".
		                'Reply-To: '.$email_from."\r\n" .
		                'X-Mailer: PHP/' . phpversion();
		                @mail($email_to, $email_subject, $email_message, $headers);
		                return redirect('/recupero');

            }}else{

            $serial = uniqid();
            $email = $person[0]['email'];
            $serialString = (string)$serial;
            $email_to = $request['email'] ;
	        $email_subject = "Recupero de contraseña de usuario para Wouu!";
	        $email_from = "administracion@wouu.com.ar";
            $email_message = "Éste es un Email automático, No debe responderlo. \n\n Para reestablecer la contraseña debe clickear el siguiente LINK. \n\n";
	        $email_message .= " www.wouu.com.ar/activation/recuperarClaveUser.php/?serial=$serialString&email=$email  \n\n";
	        $email_message .= "Para comunicarse con la administracion escribir a administracion@wouu.com.ar \n\n";
	        $email_message .= "SU NUEVA CONTRASEÑA ES: " . $serialString . "";
		    $headers = 'From: '.$email_from."\r\n".
		    'Reply-To: '.$email_from."\r\n" .
		    'X-Mailer: PHP/' . phpversion();
		    @mail($email_to, $email_subject, $email_message, $headers);
		    return redirect('/recupero');
        }
    }

    public function changeImage(){

            $file = Input::file('file');
            if(!$file){?>
                <div class="alert alert-danger">Debe seleccionar una Imagen</div>
            <?php }else{
            $file->move('img', $file->getClientOriginalName());
            $ruta="../img/";//ruta carpeta donde queremos copiar las imágenes
            $ruta.=$file->getClientOriginalName();
            $specialist  = Specialist::find($_POST['idSpecialist']);
            $specialist->ruta = $ruta;
            $specialist->activate = 3;
            $specialist->save();
            return redirect('/specialistPanel');
            }
    }

    public function editUser(Request $request){
      $id = $request['id'];
      $specialist = new Person;
        if(!empty($request['name'])){
          $specialist->find($id)->update(['name' => $request['name']]);
          $specialist->save();
        }
        if(!empty($request['lastName'])){
          $specialist->find($id)->update(['lastName' => $request['lastName']]);
          $specialist->save();
        }
        if(!empty($request['dni'])){
          $specialist->find($id)->update(['dni' => $request['dni']]);
          $specialist->save();
        }
        if(!empty($request['email'])){
          $specialist->find($id)->update(['email' => $request['email']]);
          $specialist->save();
        }
        if(!empty($request['phone'])){
          $specialist->find($id)->update(['phone' => $request['phone']]);
          $specialist->save();
        }
        if(!empty($request['city'])){
          $specialist->find($id)->update(['city' => $request['city']]);
          $specialist->save();
        }
        if(!empty($request['province'])){
          $specialist->find($id)->update(['province' => $request['province']]);
          $specialist->save();
        }

      return redirect('/userPanel');

    }
    public function userPanel(){
      return view('../layouts/userPanel');
    }

    public function postRegister(){
      return view('../layouts/postRegister');
    }

       public function recupero(){
      return view('../layouts/recupero');
    }

    public function savePassword(Request $request){
      $id = $request['idUser'];
      $user = Person::find($id);
      $user->password = $request['passwordconfirm'];
      $user->save();
      return redirect('/userPanel');
    }
    public function activateImg(Request $request){

        $specialist = Specialist::find($request['idSpecialist']);
        $specialist->activate = 4;
        $specialist->save();
        return redirect('/adminPanel');
    }
}
