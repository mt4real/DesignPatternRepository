<?php

namespace App\Respositories\User;
//namespace Respositories;
use Illuminate\Database\Eloquent\Model;
use App\User;

Interface  UserRepositoryInterface{
    
    public function getAllList();

    public function getListById($id);
}

