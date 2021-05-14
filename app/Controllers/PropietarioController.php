<?php

namespace App\Controllers;
use App\Models\PropietarioModel;

class PropietarioController extends BaseController
{
	public function index()
	{
		$propietario=new PropietarioModel();
		$request = \Config\Services::request();
        $id = $request->getGet('id');
		$resulPropietario = $propietario->readPropietario($id);
		$data=array(
			"propietario"=>$resulPropietario,	
		);
		echo view('propietario_view',$data);
		echo view('layouts/footer');
	}
}



