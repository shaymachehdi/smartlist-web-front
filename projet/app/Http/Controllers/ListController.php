<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
class ListController extends Controller
{
    public function all_list()
    {
    	/*$url ='http://localhost:5000/list';
               $client = new Client([
                   'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   ]]);
        $request = $client->request('GET',$url);
        $res=(array)json_decode($request -> getBody ());*/
                /* $url ='https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyA3AaJQ4HMFc2LkNpIop-HesVoQiYCqvYg';
               $client = new Client([
                   'headers' => [ 'Content-Type' => 'application/json' ,
                   ]]);
        $request = $client->request('GET',$url);
        $res=json_decode($request -> getBody ());*/
              
             
              $arr = array('considerIp' => true);//réciption des valeur(form)
                   $data = json_encode($arr);
                      // var_dump($data);
              $url ='https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyA3AaJQ4HMFc2LkNpIop-HesVoQiYCqvYg';
              $client = new Client([
                   'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   'x-access-token'=>Session::get('token')
                   ]]);
               $request = $client->get($url,['body' => $data]); 
               $res=(array)json_decode($request -> getBody ());
                var_dump($res);
    }
    public function list_id()
    {
      /*$idlist=1;
      $url ='http://localhost:5000/list/'.$idlist;
               $client = new Client([
                   'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   ]]);
        $request = $client->request('GET',$url);
        $res=(array)json_decode($request -> getBody ());
                 
              
             var_dump($res);*/
             $arr = array('key' => 'AIzaSyA3AaJQ4HMFc2LkNpIop-HesVoQiYCqvYg',
                           'query'=>'mall');//réciption des valeur(form)
                   $data = json_encode($arr);
                      // var_dump($data);
             $url='https://maps.googleapis.com/maps/api/place/textsearch/json';
             var_dump($data);
              $client = new Client([
                   'headers' => [ 'Content-Type' => 'application/json'
                   ]]);
              $request = $client->get($url,['body' => $data]); 
             /*  $res=(array)json_decode($request -> getBody ());
              
        var_dump($res);*/
    }

    



    public function add_list()
    {
       $designation='testadd';
       $recurrence='testreccu';
       $device_id='testiddice';


       $arr = array('designation' => 'aa', 
                    'recurrence' =>2,
                      'device_id' =>1);//réciption des valeur(form)
                       $data = json_encode($arr);
      $url='http://localhost:5000/list/add';
              $client = new Client([
                   'headers' => [ 'Content-Type' => 'application/json' ,
                    'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih'
                     
                   ]]);
               $request = $client->post($url,['body' => $data]); 
    }
    public function put_list()
    {
      
       $designation='test';
       $arr = array('designation' => $designation);//réciption des valeur(form)
                       $data = json_encode($arr);
      $url='http://localhost:5000/list/1';
              $client = new Client([
                   'headers' => [ 'Content-Type' => 'application/json' ,
                    'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih'
                     
                   ]]);
               $request = $client->put($url,['body' => $data]); 
    }
    public function delete_list($id)
    {
      
      
      $url='http://localhost:5000/list/1';
              $client = new Client([
                   'headers' => [ 'Content-Type' => 'application/json' ,
                    'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih'
                     
                   ]]);
               $request = $client->delete($url); 
    }
}
