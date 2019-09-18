<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\User;
use Auth;


class userController extends Controller
{
    public function login_pagefkdjfkd()

    {
    	$arr = array('email' => 'kjkjkjkjk', 'password' => 'fdsfsdfs');
        /*  $arr = array('email' => 'kjkjkjkjk', 'password' => 'fdsfsdfs',
                       'firstname' => 'lastname', 'dateOfBirth' => NULL
                        , 'phone_number' => '45786655', 'adresse' => 'fdsfsdfs'
                        , 'lastname' => 'fdsfsdfs');*/

$user = json_encode($arr);
    	/*  $client = new Client(); 
                  //$request = $client->get('http://localhost:5000/user');
   /*$request = $client->request('POST', 'http://localhost:5000/user', [
    'headers' => ['x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih'],
     'body'    => $user
]);*/
/*$url='http://localhost:5000/user/login';
 $request = $client->post($url,  ['body'=>$user,'headers' => ['x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih']]);
    	$response = $request->send();
    	// dd($response);*/
    	   $url='http://localhost:5000/user';
        //   $url='http://localhost:5000/user/login';
          // $url='http://localhost:5000/user/signup';
           /* $client = new Client([
    'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih'
                   ]
]);*/
/*$client = new Client([
    'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   ]
]);*/
$client = new Client([
    'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   'x-access-token'=>'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MiwiZXhwIjoxNTY0NTczMjQwfQ.yz24o9NdPnY7mpMGK_0PHgvjjVAInn43KWayk9Igm9E'
                   ]
]);
 $request = $client->get($url);
/*$request = $client->post($url,
    ['body' => $user]
);*/

// 'application / json;
echo  $request -> getBody ();

  
 //   dd($response);



    }

     public  function login_page ()
     {
           
           $url='http://localhost:5000/user';
           $client = new Client([
    'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   'x-access-token'=> 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MiwiZXhwIjoxNTY0NTc2ODgxfQ.dpopHhcS5IMEx1045Gemb8xgtlvI_M7coeyKA_oowd0'
                   ]]);
            $request = $client->get($url);

           echo  $request -> getBody ();
     }
     public  function login_pagedfdfdfd ()
     {
           $arr = array('email' => 'kjkjkjkjk', 'password' => 'fdsfsdfs');
           $user = json_encode($arr);
           $url='http://localhost:5000/user/login';
           $client = new Client([
    'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   ]]);
           $request = $client->post($url,['body' => $user]);

           echo  $request -> getBody ();
     }

      public  function signup ()
     {
           $arr = array('email' => 'kjkjkjkjk', 'password' => 'fdsfsdfs',
                       'firstname' => 'lastname', 'dateOfBirth' => NULL
                        , 'phone_number' => '45786655', 'adresse' => 'fdsfsdfs'
                        , 'lastname' => 'fdsfsdfs');
           $user = json_encode($arr);
           $url='http://localhost:5000/user/signup';
           $client = new Client([
    'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   ]]);
           $request = $client->post($url,['body' => $user]);

           echo  $request -> getBody ();
     }


     public function login(Request $request)
    {
    	   /* var_dump($request->input('login'));
    	    var_dump($request->input('password'));
    	    $user = new User();
    	    $user->name=$request->input('login');
    	    $user->password=$request->input('password');
    	    $user->email=$request->input('login');
    	    $array = array(
               "email"    => $request->input('login'),
               "password"  =>$request->input('login'),
               
              );
    	    Auth::once($array);
    	    if(Auth::once($array))
    	    	var_dump(true);*/
    	    	$request->session()->put('auth', true);
    	    	$request->session()->put('role', "admin");
              
    	    	



    }
}
