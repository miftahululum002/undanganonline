<?php

namespace App\Http\Controllers;

use App\Helpers\BaseHelper;
use Illuminate\Http\Request;
use App\Models\Themes;

class OrderController extends Controller
{
    //
    public function index($kodeTema = null)
    {
        $order = session('order');
        $themes = Themes::where(['kode_theme' => $kodeTema])->first();
        if ($themes) {
            $order['theme'] = $themes->id;
            session(['order' => $order]);
            session('checkpoint', 1);
        } else {
            return redirect()->route('themes.index');
        }
        $this->data['title'] = 'Order';
        $this->data['order'] = $order;
        return $this->render('order.1datauser');
    }

    public function mempelai(Request $request)
    {
        $order = session('order');
        if (!empty($request->submit)) {
            $order['email'] = $request->email;
            $order['hp'] = $request->hp;
            $order['domain'] = $request->domain;
            $order['password'] = $request->password;
            session(['order' => $order]);
            session('checkpoint', 2);
        } else {
            $cek = session('checkpoint');
            if ($cek >= 2) {
                $dummy = session('dummy') ? session('dummy') : BaseHelper::getDummyString();
                session('dummy', $dummy);
                $this->data['title'] = 'Order';
                return $this->render('order.2mempelai');
            } else {
                redirect()->route('order.index');
            }
        }
    }
}
