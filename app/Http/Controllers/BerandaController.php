<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Themes;

class BerandaController extends Controller
{
    //

    public function index()
    {
        $themes = Themes::all();
        $this->data['title'] = 'Beranda';
        $this->data['themes'] = $themes;
        return $this->render('index');
    }
}
