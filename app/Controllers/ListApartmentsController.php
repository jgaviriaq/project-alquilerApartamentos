<?php

namespace App\Controllers;

use App\Models\RegisterApartmentsModel;
use CodeIgniter\HTTP\Request;

class ListApartmentsController extends BaseController
{
    public function index()
    {
        $Session = session();
        $Session->get('email');
        if ($Session->get('email') != "" || $Session->get('email') != null) {
            $registerApartment = new RegisterApartmentsModel();
            $resultApartment = $registerApartment->readApartment();
            $data = array(
                "registerApartment" => $resultApartment,
            );
            echo view('listApartments_view', $data);
            echo view('layouts/footer');
        } else {
            echo view('denegado_view');
            echo view('layouts/footer');
        }
    }


    public function deleteApartment(){
        $registerApartment = new RegisterApartmentsModel();
        $request = \Config\Services::request();
        $id = $request->getGet('id');
        $registerApartment->deleteApartment($id);
        $datos = base_url() . '/public/apartments';
		return	redirect()->to($datos);
    }

    
    public function updateApartment(){
        $registerApartment = new RegisterApartmentsModel();
        $request = \Config\Services::request();
        $id = $request->getGet('id');
        $cityApartment = $request->getPost('cityApartment');
		$countryApartment = $request->getPost('countryApartment');
		$addressApartment = $request->getPost('addressApartment');
		$RoomsApartment = $request->getPost('RoomsApartment');
        $nightValueApartment  = $request->getPost('nightValueApartment');
		$descriptionApartment  = $request->getPost('descriptionApartment');
        $outstandingimage = $request->getPost('outstandingimage');
        $imagesapartment = $request->getPost('imagesapartment');
        $registerApartment->updateApartment($id, $cityApartment,$countryApartment,$addressApartment,$RoomsApartment,$imagesapartment,$outstandingimage,$nightValueApartment,$descriptionApartment);
        $datos = base_url() . '/public/apartments';
		return	redirect()->to($datos);
    }
}
