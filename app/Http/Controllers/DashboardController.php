<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $this->data['title'] = 'Dashboard';
        return $this->render('dashboard.index');
    }
}
