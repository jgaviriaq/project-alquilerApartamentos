<?php

namespace App\Controllers;

class RegisterUsuariosController extends BaseController
{
	public function index()
	{
        echo view('layouts/header');
		echo view('registro_view');
		echo view('layouts/footer');
	}
}