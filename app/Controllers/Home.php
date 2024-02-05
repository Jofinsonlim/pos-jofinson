<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use App\Models\UserModel;

use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use CodeIgniter\Controller;
use App\Models\M_model;

class Home extends BaseController
{
    public function index()
    {
        if (session()->get('level') > 0) {
            echo view('head');
            echo view('menu');
            echo view('dashboard');
            echo view('footer');
        } else {
            return redirect()->to('home/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('home/login');
    }

    public function login()
    {
        echo view('login');
    }

    public function proses_login()
    {
        $model = new M_model();
        $a = $this->request->getPost('username');
        $b = $this->request->getPost('password');

        $isi = array(
            'username' => $a,
            'password' => md5($b)
        );
        $cek = $model->getWhere2('user', $isi);
        if ($cek > 0) {
            session()->set('id_user', $cek['id_user']);
            session()->set('username', $cek['username']);
            session()->set('level', $cek['level']);
            return redirect()->to('home/dashboard');
        } else {
            return redirect()->to('home/login');
        }
    }

    public function dashboard()
    {
        echo view('head');
        echo view('menu');
        echo view('dashboard');
        echo view('footer');
    }

    public function minuman()
    {
        echo view('head');
        echo view('menu');
        echo view('minuman');
        echo view('footer');
    }

    public function makanans()
    {
        $model = new M_model();
        $data['dt'] = $model->tampil('makanan');
        echo view('head');
        echo view('menu');
        echo view('makanans', $data);
        echo view('footer');
    }

    public function makanan()
    {
        $model = new M_model();
        $data['dt'] = $model->tampil('makanan');
        echo view('head');
        echo view('menu');
        echo view('makanan', $data);
        echo view('footer');
    }

    public function user()
    {
        if (session()->get('level') == 1 || session()->get('level') == 2) {
            $model = new M_model();
            $data['dt'] = $model->tampil('user');
            echo view('head');
            echo view('menu');
            echo view('user', $data);
            echo view('footer');
        } else {
            return redirect()->to('home/login');
        }
    }
}