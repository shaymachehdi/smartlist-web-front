<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class VisiteurTest extends TestCase
{
   


/**
     * A basic unit test example.
     *
     * @return void
     */
    public function test()
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
               $this->assertSame($request->getStatusCode(),200);
    }
    public function test2()
    {
        $arr = array('email' => 'noureddine@gmail.com', 'password' => 'ca123',
                       'firstname' => 'nour', 'dateOfBirth' => NULL
                        , 'phone_number' => '45445445', 'adresse' =>'zahrouni'
                        , 'lastname' => 'jlassi');
       //réception dans un tableau les valeurs apres validation

           $user = json_encode($arr);// coder en json les valeurs récipitionneés

           $url='http://localhost:5000/user/signup';//url de l'api concerné

           $client = new Client([
    'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   ]]);
           //former la requete

           $request = $client->post($url,['body' => $user]); 
           $this->assertSame($request->getStatusCode(),200);

    }
    

}
