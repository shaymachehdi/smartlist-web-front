<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\UserApi;
use App\GestionApi;
use Session;
use App\Http\Requests\SginupRequest;
use App\Gestion\fonction_session;

class VisiteurController extends Controller
{
    public function login_page()
    {
    	return view('blog.login');
    }
     
    public function login(Request $request)
    { 
            
             $request->validate([
            'login' => 'required|max:255',
            'password' => 'required|max:255',
              ]);//validation de doneés
              $password=$request->input('password');
             try
             {        $arr = array('email' => $request->input('login'), 
    	 	              'password' => $request->input('password'));//réciption des valeur(form)
                       $data = json_encode($arr);//coder en json le résultat

                       $url='http://localhost:5000/user/login';//url de l'api concerné
                       $client = new Client([
                      'headers' => [ 'Content-Type' => 'application/json' ,
                      'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                      ]]);//former la requette

                      $request = $client->post($url,['body' => $data]);//poster la requette

          // echo  $request -> getBody ();
                if($request->getStatusCode()===200)//cas de success
                {   
                         $res=(array)json_decode($request -> getBody ());//resultat de la requette
                        //var_dump($res);
                  
                          if($res["isLogged"] === false)//login echec
                          {
                         $errors = $res["msg"];
                           return view('blog.login',['errorsapi'=>[
                                               "msg" => $errors,
                                                ]]);//msg d'erreur
                          }
                          else
                         {
                                $userapi = new UserApi();
                                $userapi->init($res["idUser"],$res["email"],$password,$res["firstname"], $res["lastname"],$res["phone_number"],$res["phone_number"],NULL );
                            
                                 Session::put('userapi', $userapi);
                               Session::put('auth', true);
                               Session::put('token', $res["token"]);
                      
                           return redirect()->intended('profil');
                         }
    	    	    
                }
                else
                abort(404);
                  }
                 catch (Exception $e) {
                    abort(404);
                             }
                 
    }


    public function signup_page()
    {
    	return view('blog.regestire');
    }
    public function signup(Request $request)
    {
      /*$userapi = new UserApi();

       $userapi->init(NULL,$request->input('email'),$request->input('password'),
                      $request->input('firstname'),$request->input('lastname'),
                      $request->input('dateofbirth'),$request->input('phone_number'),
                      $request->input('adresse'));*/
      
      
     
      

                    
       $arr = array('email' => $request->input('email'), 'password' => $request->input('password'),
                       'firstname' => $request->input('firstname'), 'dateOfBirth' => NULL
                        , 'phone_number' => $request->input('phone_number'), 'adresse' => $request->input('adresse')
                        , 'lastname' => $request->input('lastname'));
       //réception dans un tableau les valeurs apres validation

           $user = json_encode($arr);// coder en json les valeurs récipitionneés

           $url='http://localhost:5000/user/signup';//url de l'api concerné

           $client = new Client([
    'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   ]]);
           //former la requete

           $request = $client->post($url,['body' => $user]);// poster la requete

           
            if($request->getStatusCode()===200)// si success
            {   
                   $res=(array)json_decode($request -> getBody ()); // résultat de requette
                  
                    if($res["isCreated"] === false)//cas de echec de création 
                    {
                             $errors = $res["msg"];
                             return view('blog.regestire',['errorsapi'=>[
                                               "msg" => $errors,
                                                ]]);// mesg d'erreur

               
                    }
                    else
                    {
                      
                      
                     
                     
                  
                  Session::put('auth', true);
                 // Session::put('userapi', $userapi);
                  // var_dump(Session::get('userapi'));
                 }
                
                    

            }
            else
            {
                abort(404);

                    }
                  

    }
}
