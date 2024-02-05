<?php

namespace App\Controllers;

use App\Models\M_model;


class Siswa extends BaseController
{
	public function index()
	{
		if (session()->get('level') == 1 || session()->get('level') == 3) {
			$model = new M_model();

			echo view('header');
			echo view('menuutama');
			$diva['a'] = $model->tampil('siswa');
			echo view('siswa', $diva);
			echo view('footer');
		} else {
			return redirect()->to('/Home');
		}
	}
	public function tambah()
	{
		if (session()->get('level') == 1 || session()->get('level') == 3) {
			echo view('header');
			echo view('menuutama');
			echo view('tambah_siswa');
			echo view('footer');
		} else {
			return redirect()->to('/Home');
		}

	}
	public function aksi_tambah()
	{
		if (session()->get('level') == 1 || session()->get('level') == 3) {
			$a = $this->request->getPost('username');
			$b = $this->request->getPost('password');
			$c = $this->request->getPost('nis');
			$d = $this->request->getPost('nama');
			$e = $this->request->getPost('kelas');
			$f = $this->request->getPost('jurusan');


			$data1 = array(
				'username' => $a,
				'password' => md5($b),
				'level' => '2'

			);
			$darrel = new M_model();
			$darrel->simpan('user', $data1);
			$where = array('username' => $a);
			$ayu = $darrel->getWhere2('user', $where);
			$id = $ayu['id_user'];
			$data2 = array(
				'nis' => $c,
				'nama' => $d,
				'kelas' => $e,
				'jurusan' => $f,
				'user' => $id
			);
			$darrel->simpan('siswa', $data2);

			return redirect()->to('siswa');
		} else {
			return redirect()->to('/Home');
		}

	}
	public function edit($user)
	{
		if (session()->get('level') == 1 || session()->get('level') == 3) {
			$model = new M_model();
			$where = array('user' => $user);
			$where2 = array('id_user' => $user);
			$data['a'] = $model->getWhere('siswa', $where);
			$data['b'] = $model->getWhere('user', $where2);
			echo view('header');
			echo view('menuutama');
			echo view('edit_siswa', $data);
			echo view('footer');
		} else {
			return redirect()->to('/Home');
		}

	}
	public function aksi_edit()
	{
		if (session()->get('level') == 1 || session()->get('level') == 3) {
			$a = $this->request->getPost('username');
			$b = $this->request->getPost('password');
			$c = $this->request->getPost('nis');
			$d = $this->request->getPost('nama');
			$e = $this->request->getPost('kelas');
			$f = $this->request->getPost('jurusan');
			$id = $this->request->getPost('id');
			$id2 = $this->request->getPost('id2');

			$where = array('id_user' => $id);
			$data1 = array(
				'username' => $a,
				'password' => md5($b),
				'level' => '2'

			);
			$darrel = new M_model();
			$darrel->qedit('user', $data1, $where);
			$where2 = array('user' => $id2);
			$data2 = array(
				'nis' => $c,
				'nama' => $d,
				'kelas' => $e,
				'jurusan' => $f,
				'user' => $id
			);
			$darrel->qedit('siswa', $data2, $where2);

			return redirect()->to('siswa');
		} else {
			return redirect()->to('/Home');
		}

	}
	public function hapus($id)
	{
		if (session()->get('level') == 1 || session()->get('level') == 3) {
			$model = new M_model();
			$where = array('user' => $id);
			$where2 = array('id_user' => $id);
			$model->hapus('siswa', $where);
			$model->hapus('user', $where2);
			return redirect()->to('siswa');
		} else {
			return redirect()->to('/Home');
		}
	}


}