<?php

namespace App;



class UserApi 
{
   private  $id ; 
   private  $email ;
   private  $password;
   private  $firstname;
   private  $dateOfBirth;
   private  $phone_number;
   private  $adresse;
   private  $lastname;

    public function init ($id=NULL,$email=NULL,$password=NULL,$firstname=NULL,$lastname=NULL,$dateOfBirth=NULL,$phone_number=NULL,$adresse=NULL)
   {
                    
                    

                    if($firstname!==NULL )
                      $this->firstname=$firstname; 
                    if($password!==NULL )
                      $this->password=$password;

                    if($lastname!==NULL )
                      $this->lastname = $lastname;

                      if($email!==NULL )
                         $this->email=$email;

                     if($adresse!==NULL)
                      $this->adresse=$adresse;

                     if($dateOfBirth!==NULL)
                     $this->dateOfBirth=$dateOfBirth;

                     if($id!==NULL)
                      $this->id=$id;
                    
                      if($phone_number!==NULL )
                     $this->phone_number=$phone_number; 
                     
                       
                     
                 

   }

   public function setId($id){
        $this->id = $id;
    }
     public function getId(){
        return $this->id;
    }

     public function setPhone_number($phone_number){
        $this->phone_number = $phone_number;
    }
     public function getPhone_number(){
        return $this->phone_number;
    }


     public function setAdresse($adresse){
        $this->adresse = $adresse;
    }
    public function getAdresse(){
        return $this->adresse;
    }


   
     public function setFirstname($firstname){
        $this->firstname = $firstname;
    }
    public function getFirstname(){
        return $this->firstname;
    }

     public function setLastname($lastname){
        $this->lastname = $lastname;
    }
    public function getLastname(){
        return $this->lastname;
    }




   public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function getPassword(){
        return $this->password;
    }
   
    public function setDateOfBirth($dateOfBirth){
        $this->dateOfBirth = $dateOfBirth;
    }
    public function getDateOfBirth(){
        return $this->dateOfBirth;
    }
    


}
