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
            $order['kode_tema'] = $kodeTema;
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
            } else {
                $order = session('order');
                $kodeTema = $order['kode_tema'];
                redirect()->route('order.index', $kodeTema);
            }
        }
        $this->data['title'] = 'Order';
        return $this->render('order.2mempelai');
    }

    public function imgUpload(Request $request)
    {
        $check = session('checkpoint');
        if ($check < 2) {
            return redirect()->route('order/any');
            exit();
        }

        $groom = $request->file('foto_groom');
        $bride = $request->file('foto_bride');
        $sampul = $request->file('foto_sampul');
        $generate = session('dummy');
        $path = 'assets/users/' . $generate;

        //buat folder ny
        if (!file_exists($path)) {
            $create = mkdir('assets/users/' . $generate, 0755, true);
        }
        $order = session('order');

        if ($groom != '') {
            $avatar = $groom;
            $pathName = 'assets/users/' . $generate . '/groom.png';
            if (file_exists($pathName)) {
                unlink($pathName);
            }
            $extension = $groom->extension();
            $fileName = "bride_" . str_replace(" ", "", strtolower($validator['name'])) . '_' . date('YmdHis') . '.' . $extension;
            $path = 'brides';
            $up = $groom->storeAs($path, $fileName, 'public_uploads');

            $avatar->move('assets/users/' . $generate, 'groom.png');
            $order['foto_groom'] = 1;
            session('order', $order);
            echo 'uploadedgroom';
        } else if ($bride != '') {
            $avatar = $bride;
            $pathName = 'assets/users/' . $generate . '/bride.png';
            if (file_exists($pathName)) {
                unlink($pathName);
            }
            $avatar->move('assets/users/' . $generate, 'bride.png');
            $this->session->set('foto_bride', 1);
            echo 'uploadedbride';
        } else {
            $avatar = $sampul;
            $pathName = 'assets/users/' . $generate . '/kita.png';
            if (file_exists($pathName)) {
                unlink($pathName);
            }
            $avatar->move('assets/users/' . $generate, 'kita.png');
            $this->session->set('foto_sampul', 1);
            echo 'uploadedsampul';
        }
    }
}
