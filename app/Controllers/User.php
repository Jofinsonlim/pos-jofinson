<?php

namespace App\Controllers;

use App\Models\M_model;


class User extends BaseController
{
    public function index()
    {
		if(session()->get('level')==1){
    $model=new M_model();
			$on='user.level=level.id_level';
			$diva['a'] = $model->join2('user', 'level',$on);
			echo view('header');
			echo view('menuutama');
			echo view('v_user',$diva);
			echo view('footer');
		}else{

			return redirect()->to('/home');
		}
    }
	

}