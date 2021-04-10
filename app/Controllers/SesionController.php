<?php

namespace App\Controllers;

class SesionController extends BaseController
{
	public function index()
	{
       
		echo view('sesion_view');
		echo view('layouts/footer');
	}
}
