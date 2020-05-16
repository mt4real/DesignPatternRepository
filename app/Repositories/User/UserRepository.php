<?php
 namespace App\Respositories\User;
 //namespace Respositories;
use Illuminate\Database\Eloquent\Model;
use App\User;


class UserRepository implements UserRepositoryInterface{

  // protected $user;

  /*public function _construct(){

      //$this->user=$user;
   }  */

   public function getAllList(){

       return User::all();
   }

   public function getListById($id){
       
    return User::findOrFail($id);
}

}


