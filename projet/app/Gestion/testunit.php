<?php 

namespace App\Gestion;
use Session;
use App\UserApi;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
class testunit
{

      public function login()
      {


            $arr = array('email' => 'nour', 
                      'password' => '123');//réciption des valeur(form)
                       $data = json_encode($arr);//coder en json le résultat

                       $url='http://localhost:5000/user/login';//url de l'api concerné
                       $client = new Client([
                      'headers' => [ 'Content-Type' => 'application/json' ,
                      'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                      ]]);//former la requette

                      $request = $client->post($url,['body' => $data]);
                      $res=(array)json_decode($request -> getBody ());
                     return $res["token"];

                      
      }
   

}