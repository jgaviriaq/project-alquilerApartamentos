<?php

namespace App\Controllers;

class RegistroApartamentosController extends BaseController
{
	public function index()
	{
       	echo view('registroApartamentos_view');
		echo view('layouts/footer');
	}
}
