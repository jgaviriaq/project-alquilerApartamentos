<?php

namespace App\Controllers;

use App\Models\RegisterPerfilModel;

class PerfilController extends BaseController
{
	public function index()
	{
		$Session = session();
		$Session->get('email');
		if ($Session->get('email') != "" || $Session->get('email') != null) {
			$perfilUser = new RegisterPerfilModel();
			$resultPerfil = $perfilUser->readPerfil();
			$data = array(
                "Perfil" => $resultPerfil,
            );
			echo view('perfil_view',$data);
			echo view('layouts/footer');
		} else {
			echo view('denegado_view');
			echo view('layouts/footer');
		}
	}


	function updatePerfil()
	{
		$request = \Config\Services::request();
		$registroPerfilModel = new RegisterPerfilModel();
		$id = $request->getGet('id');
		$nameUser = $request->getPost('nameUser');
		$cityUser = $request->getPost('cityUser');
		$image = $request->getPost('image');
		$description = $request->getPost('description'); 
		$registroPerfilModel->updatePerfil($id,$nameUser,$cityUser,$description,$image);
		$datos = base_url() . '/public/perfil';
		return	redirect()->to($datos);
	}
}
