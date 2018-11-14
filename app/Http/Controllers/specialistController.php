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
      $specialist = new Specialist;
            
         if(!empty($request['description'])){
          $specialist->find($id)->update(['description' => $request['description']]);
          $specialist->save();
        }    
        
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
        if(!empty($request['zone'])){
          $specialist->find($id)->update(['zone' => $request['zone']]);
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
        if(!empty($request['specialty'])){
          $specialist->find($id)->update(['specialty' => $request['specialty']]);
          $specialist->save();
        }
        if(!empty($request['initSchedule'])){
          $specialist->find($id)->update(['initSchedule' => $request['initSchedule']]);
          $specialist->save();
        }
        if(!empty($request['finalSchedule'])){
        $specialist->find($id)->update(['finalSchedule' => $request['finalSchedule']]);
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
