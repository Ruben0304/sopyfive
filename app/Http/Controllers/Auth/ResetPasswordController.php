<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Passwords\CanResetPassword;

class ResetPasswordController extends Controller
{
    use CanResetPassword,Illuminate\Foundation\Auth\ResetsPasswords
   public static validateToken(){

   }
}
