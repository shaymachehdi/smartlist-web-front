<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class groupController extends Controller
{

	public function addGroup(Request $request)
         {
             
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


         public function allGroup()
         {


         	$url ='http://localhost:5000/group';

    	
    	$client = new Client([
                   'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   'x-access-token'=>Session::get('token')
                   ]]);
      
      
   $request = $client->request('GET',$url);
                 $res=(array)json_decode($request -> getBody ());
                 
              
             return view('group.allgroups',['groups'=>$res]);

         }

  

   public function delete($title)
    {
      $url ='http://localhost:5000/group/delete';
      $client = new Client([
                   'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   'x-access-token'=>Session::get('token')
                   ]]);
              $arr = array('title' => $title);//réciption des valeur(form)
                       $data = json_encode($arr);
                      var_dump($data);
         // $request = $client->delete($url,['body' => $data]);
           //$res=(array)json_decode($request -> getBody ());
             //    var_dump($res);

       }


       public function update (Request $request,$id)
       {

             $url ='http://localhost:5000/group/update/'.$id;
      $client = new Client([
                   'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   'x-access-token'=>Session::get('token')
                   ]]);
              $arr = array('title' => $request->input('title'));//réciption des valeur(form)
                       $data = json_encode($arr);
                      var_dump($data);
         $request = $client->put($url,['body' => $data]);
           $res=(array)json_decode($request -> getBody ());

           session()->flash('success','succes');
      
          
                 return redirect('allGroup');

       }

   public function  followers($title)
   {
      var_dump(trans('lang.password'));  
       $arr = array('title' => $title);//réciption des valeur(form)
                   $data = json_encode($arr);
                      // var_dump($data);
             $url='http://localhost:5000/group/followers';
              $client = new Client([
                   'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   'x-access-token'=>Session::get('token')
                   ]]);
               $request = $client->get($url,['body' => $data]); 
               $res=(array)json_decode($request -> getBody ());
              
            
           
           return view('group.followers',['followers'=>$res["followers"]]);
     
   }
 


   public function  addFollower($title,$email)
   {
      
       $arr = array('email' => $email, 
                      'title' => $title);//réciption des valeur(form)
                       $data = json_encode($arr);
                      // var_dump($data);
             $url='http://localhost:5000/follow';
              $client = new Client([
                   'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   'x-access-token'=>Session::get('token')
                   ]]);
               $request = $client->post($url,['body' => $data]); 
               $res=(array)json_decode($request -> getBody ());
               var_dump($res);


   }

 public function deleteFollower($id)
 {
     $url ='http://localhost:5000/follower/delete/'.$id;
      $client = new Client([
                   'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   'x-access-token'=>Session::get('token')
                   ]]);
            //  $arr = array('title' => $title);//réciption des valeur(form)
                     //  $data = json_encode($arr);
                     // var_dump($data);
          $request = $client->delete($url);
           $res=(array)json_decode($request -> getBody ());
                 var_dump($res);

 }

}
