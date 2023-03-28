<?php

namespace App\Http\Controllers;

use SicoHelpers\Helpers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Register(){
        return Helpers::Viewer('Users.Register');
    }
}
