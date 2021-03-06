<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Specialist;

class specialistController extends Controller
{
     public function deleteSpecialist(Request $request){
        $specialist = Specialist::find($request['idSpecialist']);
        $specialist->delete();
        return redirect('/adminPanel');
    }

    public function editSpecialist(Request $request){
      $id = $request['id'];

         if(!empty($request['description'])){
          $specialist = Specialist::find($id);
          $specialist->description = $request['description'];
          $specialist->save();
        }

        if(!empty($request['name'])){

          $specialist = Specialist::find($id);
          $specialist->name = $request['name'];
          $specialist->save();
        }
        if(!empty($request['lastName'])){
          $specialist = Specialist::find($id);
          $specialist->lastName = $request['lastName'];
          $specialist->save();
        }
        if(!empty($request['dni'])){
          $specialist = Specialist::find($id);
          $specialist->dni = $request['dni'];
          $specialist->save();
        }
        if(!empty($request['email'])){
          $specialist = Specialist::find($id);
          $specialist->email = $request['email'];
          $specialist->save();
        }
        if(!empty($request['phone'])){
          $specialist = Specialist::find($id);
          $specialist->phone = $request['phone'];
          $specialist->save();
        }
        if(!empty($request['zone'])){
          $specialist = Specialist::find($id);
          $specialist->zone = $request['zone'];
          $specialist->save();
        }
        if(!empty($request['city'])){
          $specialist = Specialist::find($id);
          $specialist->city = $request['city'];
          $specialist->save();
        }
        if(!empty($request['province'])){
          $specialist = Specialist::find($id);
          $specialist->province = $request['province'];
          $specialist->save();
        }
        if(!empty($request['specialty'])){
          $specialist = Specialist::find($id);
          $specialist->specialty = $request['specialty'];
          $specialist->save();
        }
        if(!empty($request['initSchedule'])){
          $specialist = Specialist::find($id);
          $specialist->initSchedule = $request['initSchedule'];
          $specialist->save();
        }
        if(!empty($request['finalSchedule'])){
        $specialist = Specialist::find($id);
        $speciaist->finalSchedule = $request['finalSchedule'];
        $specialist->save();
      }

      return redirect('/specialistPanel');

    }
    public function specialistPanel(){
      return view('../layouts/specialistPanel');
    }
    public function specialistMsj(){
      return view('../layouts/specialistMsj');
    }
    public function sendMail(Request $request){
      $email_to = "contacto@mibilleteravirtual.com.ar";
		  $email_subject = "formulario de contacto (Vía Web) ";
		  $email_from = $request['email'];

		$email_message = "Formulario enviado desde la web para ponerse en contacto con wou!:\n\n";
		$email_message .= "E-mail: " . $request['email'] . "\n";

		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		@mail($email_to, $email_subject, $email_message, $headers);

    return redirect('/index');

    }

     public function savePasswordSpecialist(Request $request){
      $id = $request['idUser'];
      $specialist = Specialist::find($id);
      $specialist->password = $request['passwordconfirm'];
      $specialist->save();
      return redirect('/specialistPanel');
    }
    public function perfilSpecialist(){
        return view('../layouts/specialistPerfil');
    }
    public function activate(Request $request){
        $id = $request['idSpecialist'];
        $specialist = Specialist::find($id);
        $specialist->activate = 2;
        $specialist->save();
        return redirect('/adminPanel');
    }
    public function cancelateImg(Request $request){
        $id = $request['idSpecialist'];
        $specialist = Specialist::find($id);
        $specialist->activate = 2;
        $specialist->ruta = '../img/perfil.jpg';
        $specialist->save();
        return redirect('/adminPanel');
    }

    public function busqueda(Request $request){
        $abuscar = $request['Abuscar'];
        $categoria = $request['categoria'];
        return view('../layouts/specialists')->with('abuscar', $abuscar)->with('categoria', $categoria);
    }

}
