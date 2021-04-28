<?php

namespace App\Controllers;

use App\Models\RegistroModel;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class RegisterUsuariosController extends BaseController
{
	public function index()
	{
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
		$registroModel->addUser($user, $emailuser, $countryuser, $cityuser, $passworduser, $roluser);
		return redirect()-> to('public/regiterUser') ;
		
        if($registroModel){
			echo("Registro agregado");
			}else{
				echo("error");
			}
	}
}
