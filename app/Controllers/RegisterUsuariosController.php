<?php

namespace App\Controllers;

use App\Models\RegistroModel;
use phpDocumentor\Reflection\Location;

class RegisterUsuariosController extends BaseController
{
	public function index()
	{
		$Session = session();
		$Session->get('email');
			echo view('layouts/header');
			echo view('registro_view');
			echo view('layouts/footer');
		
	}


	public function listUsers()
	{
		$request = \Config\Services::request();
		$registroModel = new RegistroModel();
		$user = $request->getPost('user');
		$emailuser = $request->getPost('emailuser');
		$countryuser = $request->getPost('countryuser');
		$cityuser = $request->getPost('cityuser');
		$passworduser = $request->getPost('passworduser');
		$roluser  = $request->getPost('roluser');
		$datos = base_url() . '/public/regiterUser';
		$emailRepetidos =$registroModel->login($emailuser);
		if($emailRepetidos[0]->emailUser !=$emailuser){
			$registroModel->addUser($user, $emailuser, $countryuser, $cityuser, $passworduser, $roluser);
		return	redirect()->to($datos);
		}
		else{
			echo view('error_view');
			echo view('layouts/footer');
		}

		// if ($registroModel) {
		// 	echo ("Registro agregado");
		// } else {
		// 	echo ("error");
		// }
	}
}
