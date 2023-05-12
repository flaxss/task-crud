<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Models\Task;

class RegisterController extends Controller
{
    //
    function __construct(){
        $this->user = new User;
    }
}
