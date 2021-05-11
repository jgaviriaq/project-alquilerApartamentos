<?php

namespace App\Controllers;
use App\Models\RegisterApartmentsModel;

class RegistroApartamentosController extends BaseController
{
	public function index()
	{	$Session = session();
		$Session->get('email');
		if($Session->get('email') !="" || $Session->get('email')!=null){
       	echo view('registroApartamentos_view');
		echo view('layouts/footer');
		}
		else{
			echo view('denegado_view');
			echo view('layouts/footer');
		}
	}


	public function listApartments()
	{
		$Session = session();
		$id_user = $Session->get('id');
		$request = \Config\Services::request();
		$registroApartmentModel = new RegisterApartmentsModel();
		$cityApartment = $request->getPost('cityApartment');
		$countryApartment = $request->getPost('countryApartment');
		$addressApartment = $request->getPost('addressApartment');
		$ubicacionApartment = $request->getPost('ubicacionApartment');
		$numberRoomsApartment = $request->getPost('numberRoomsApartment');
		$imagesApartment  = $request->getPost('imagesApartment');
		$featuredImagesApartment  = $request->getPost('featuredImagesApartment');
		$nightValueApartment  = $request->getPost('nightValueApartment');
		$descriptionApartment  = $request->getPost('descriptionApartment');
		$registroApartmentModel->addApartment($id_user,$cityApartment,$countryApartment,$addressApartment,$ubicacionApartment,$numberRoomsApartment,$imagesApartment,$featuredImagesApartment,$nightValueApartment,$descriptionApartment);
		$datos = base_url() . '/public/registerApartment';
		return	redirect()->to($datos);
	}
}
