<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('sesion_view');
		echo view('layouts/footer');
	}
}
