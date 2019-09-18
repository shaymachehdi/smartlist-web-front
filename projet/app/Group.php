<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    private  $title ;
       

       public function init($title)
       {
             $this->title = $title;

       }

       public function setTitle($title){
        $this->title = $title;
    }
     public function getTitle(){
        return $this->title;
    }

}
