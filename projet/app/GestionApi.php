<?php

namespace App;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Session;

class GestionApi 
{ 
     private static $apiKey = 'eiWee8ep9due4deeshoa8Peichai8Eih';

     public static function header($token=NULL)
     {
     	if($token!==NULL)
		{
             $headers =[
             'headers' => [
             'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
              'x-access-token'=>Session::get('token'),
                   ]
              ];
             }
        else
        {
                  $headers =[
                      'headers' => [ 'Content-Type' => 'application/json' ,
                      'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                      ]];
        }

        return $headers;
     }

	public function get($url)
	{
		$client = new Client();
		
		
		$headers=GestionApi::header(true);
   // var_dump($headers);

       $request = $client->request('GET',$url ,$headers );
                  $response = $request->getBody()->getContents();
                  
                  return $response;

	}


	public function post ($url,$data,$token=NULL)
	{
         if($token===NULL)
          $headers=GestionApi::header();
        else
          $headers=GestionApi::header(true);

        $client = new Client([
                      'headers' => [ 'Content-Type' => 'application/json' ,
                      'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                      ]]);
          var_dump($url);
          var_dump($headers);
          var_dump($data);
          $request = $client->post($url,['body' => $data]);
          // return $request;


	}
}
