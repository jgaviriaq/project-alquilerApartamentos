<?php

namespace App\Controllers;

use App\Models\RegistroModel;
use CodeIgniter\Session\Session;

class SesionController extends BaseController
{
	public function index()
	{
		echo view('sesion_view');
		echo view('layouts/footer');
	}


	public function sesion()
	{
		$request = \Config\Services::request();
		$registroModel = new RegistroModel();
		$email = $request->getPost('email');
		$password = $request->getPost('password');
		$userData = $registroModel->login($email);
		$hash =  password_hash($password, CRYPT_BLOWFISH);

		//echo($userData[0]->id);
		//print_r($userData[0]['id']);
		// if(password_verify($userData[0]['passwordUser'],$hash) ){
		// 	$Session = session();
		// 	$newData = ['email'=>$email,
		// 				'rol'=>$userData[0]['rol'],
		// 				'id'=>$userData[0]['id']];
		// 	$Session->set($newData);			
		// 	echo("funciona");			
		// }
		// else{
		// 	echo("no funciona");
		// }
		if (password_verify($userData[0]->passwordUser, $hash)) {
			$Session = session();
			$newData = [
				'email' => $email,
				'rol' => $userData[0]->rol,
				'id' => $userData[0]->id,
				'nameUser' => $userData[0]->nameUser,
				'countryUser' => $userData[0]->countryUser,
				'cityUser' => $userData[0]->cityUser,
				'image' => $userData[0]->image,
				'description' => $userData[0]->description
			];

			$Session->set($newData);
			if ($Session->get('rol') == '1') {
				echo view('home_view');
			} else {
				if ($Session->get('rol') == '2') {
					$datos = base_url() . '/public/totalApartments';
					return	redirect()->to($datos);
				}
			}
		}else{
			echo view('accesoDenegado_view');
			echo view('layouts/footer');
		}
	}

	public function salir()
	{
		$session = session();
		$session->destroy();
		$datos = base_url() . '/public/login';
		return	redirect()->to($datos);
	}
}
