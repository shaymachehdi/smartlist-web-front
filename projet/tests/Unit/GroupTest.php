<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Session;
use App\Gestion\testunit;
class GroupTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testgroup()
    {
        
              $test = new testunit();
              $token=$test->login();


        $url ='http://localhost:5000/group';



    	
    	$client = new Client([
                   'headers' => [ 'Content-Type' => 'application/json' ,
                   'x-api-key'      => 'eiWee8ep9due4deeshoa8Peichai8Eih',
                   'x-access-token'=>$token
                   ]]);
      
      
                $request = $client->request('GET',$url);
                $this->assertSame($request->getStatusCode(),200);
    }
}
