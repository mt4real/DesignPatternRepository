<?php
namespace App\Respositories\User;

use Illuminate\Database\Eloquent\Model;
use App\User;

Interface UserRepositoryInterface{

    public function getAllList();
    public function getListById($id);
}

?> 