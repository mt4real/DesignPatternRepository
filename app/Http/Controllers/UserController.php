<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\User;
//use UserRepositoryInterface;



class UserController extends Controller
{
    private $userRepository;

    public function _construct(UserRepositoryInterface $userRepository){

        $this->userRepository=$userRepository;

    }
   

    public function index(){

        $userRepository=$this->userRepository->getAllList();

        //$userRepository=UserRepositoryInterface::getAllList();
        return view('user', compact('userRepository'));

       // print_r ($user);  die;
    }
}
