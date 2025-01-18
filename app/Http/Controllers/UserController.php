<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
public function __construct(private User $users){}

      public function index(){
      $users = $this->users->all();
      return response()->json($users);
      }
}
