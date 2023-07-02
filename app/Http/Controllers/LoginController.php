<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function index()
    {
        $this->data['title'] = 'Login';
        return $this->render('login.index');
    }
}
