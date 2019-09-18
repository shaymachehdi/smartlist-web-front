<?php 

namespace App\gestion;
use Session;
class fonctionSession
{
   public function affecterData($id=NULL,$email=NULL,$firstname=NULL,$lastname=NULL,$dateOfBirth=NULL,$phone_number=NULL,$adresse=NULL)
   {
                    
                    $userapi = new UserApi();

                    if($firstname!==NULL )
                      $userapi->setFirstname($firstname); 

                    if($lastname!==NULL )
                      $userapi->setLastname($lastname);

                     if($email!==NULL )
                  	 $userapi->setEmail($email);

                     if($adresse!==NULL)
                     $userapi->setAdresse($id);

                     if($dateOfBirth!==NULL)
                     $userapi->setDateOfBirth($dateOfBirth);

                  	 if($id!==NULL)
                     $userapi->setId($id);
                      // $userApi->setPassword = $res["password"];
                       
                      //$userapi->setDateOfBirth($res["dateOfBirth"]); 
                      if($phone_number!==NULL )
                      $userapi->setPhone_number($phone_number); 
                      //$userapi->setAdresse($res["adresse"]); 
                       
                  	 
                  Session::put('userapi', $userapi);


   }

}