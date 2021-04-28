<?php

namespace App\Controllers;
use App\Models\RegisterApartmentsModel;

class RegistroApartamentosController extends BaseController
{
	public function index()
	{
       	echo view('registroApartamentos_view');
		echo view('layouts/footer');
	}


	public function listApartments()
	{
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
		$registroApartmentModel->addApartment($cityApartment,$countryApartment,$addressApartment,$ubicacionApartment,$numberRoomsApartment,$imagesApartment,$featuredImagesApartment,$nightValueApartment,$descriptionApartment);
		
	}
}
