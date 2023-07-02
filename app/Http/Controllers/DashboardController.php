<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\BaseHelper;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $this->data['title'] = 'Dashboard';
        $join = BaseHelper::join();
        $this->data['join'] = $join;
        return $this->render('dashboard.index');
    }
}
