<?php

namespace App\Controllers;
use App\Models\RegistroModel;
class RegisterUsuariosController extends BaseController
{
	public function index()
	{
		$registerUser = new RegistroModel();
		$registerUser -> readUser();
        echo view('layouts/header');
		echo view('registro_view');
		echo view('layouts/footer');
	}
}