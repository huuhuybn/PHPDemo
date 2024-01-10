<?php
namespace huuhuy\php;
class People
{
   public $name;
   public $address;

   function print(){
       echo $this->name . ' - ' .$this->address;
   }
}