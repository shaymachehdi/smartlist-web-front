<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\UserApi;
use App\GestionApi;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Http\Requests\SginupRequest;
class UserapiController extends Controller
{
    
        public function addGroup(Request $request)
         {
             var_dump($request->input('title'));
             $request->validate([
            'title' => 'required|max:255'
              ]);
            $userapi = Session::get('userapi');

           $arr = array('email' => $userapi->getEmail(), 
                      'title' => $request->input('title'));//réciption des valeur(form)
                       $data = json_encode($arr);
                       var_dump($data);
             $url='http://localhost:5000/group';
              $client = new Client([
                   'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   'x-access-token'=>Session::get('token')
                   ]]);
               $request = $client->post($url,['body' => $data]); 
         }




    public function updateProfil_page()
    { 
         $userapi = new UserApi();
         $userapi = Session::get('userapi');
          
        $url ='http://localhost:5000/user/'.$userapi->getId().'/'.$userapi->getEmail();





         //var_dump($userapi->getEmail());
         //var_dump($userapi);

    	
    	$client = new Client([
                   'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   'x-access-token'=>Session::get('token')
                   ]]);
      //  $request = $client->get('http://localhost:5000/user');
      
      
   $request = $client->request('GET',$url);
                 $res=(array)json_decode($request -> getBody ());

       $userapi->init($res["id"],$res["email"],NULL,$res["firstname"], $res["lastname"],$res["phone_number"],$res["phone_number"],NULL );
    /*	$userapi->setEmail($user->email);
    	//var_dump($userapi);
                      $userapi->setPassword( $user->password);
                      $userapi->setFirstname($user->firstname);  
                      //$userapi->setDateOfBirth( $user->dateOfBirth);  
                      $userapi->setPhone_number($user->phone_number); 
                      //$userapi->setAdresse($user->adresse); 
                      $userapi->setLastname($user->lastname);
                    //  var_dump($user);
    	*/
      /* var_dump(Session::get('userapi'));
       var_dump(Session::get('token'));*/
    	return view('user.updateprofil',['userapi'=>$userapi]);
       //return view('user.updateprofil');
    }

    public function updateprofil(Request $request)
    {
        
                     $userapi = new UserApi();

                     $userapi->setEmail($request->input('email'));
                      $userapi->setPassword( $request->input('password'));
                      $userapi->setFirstname($request->input('firstname'));  
                      $userapi->setDateOfBirth( $request->input('dateofbirth'));  
                      $userapi->setPhone_number($request->input('phone_number')); 
                      $userapi->setAdresse($request->input('adresse')); 
                      $userapi->setLastname($request->input('lastname'));

                       $arr = array('email' => $request->input('email'), 'password' => $request->input('password'),
                       'firstname' => $request->input('firstname'), 'dateOfBirth' => NULL
                        , 'phone_number' => $request->input('phone_number'), 'adresse' => $request->input('adresse')
                        , 'lastname' => $request->input('lastname'));
           $user = json_encode($arr);
           var_dump($user);
$url='http://localhost:5000/user/update';
           $client = new Client([
    'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   'x-access-token'=>Session::get('token')
                   ]]);
           $request = $client->put($url,['body' => $user]); 
  


    }


      public function logout()
      {

                    $url ='http://localhost:5000/user/logout';

      
      $client = new Client([
                   'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   'x-access-token'=>Session::get('token')
                   ]]);
      
      
   $request = $client->request('GET',$url);
                 $res=(array)json_decode($request -> getBody ());
                 

           Session::flush();
            return redirect('login');



      }





}
