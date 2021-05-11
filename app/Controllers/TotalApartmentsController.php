<?php

namespace App\Controllers;

use App\Models\RegistroModel;

class TotalApartmentsController extends BaseController
{
    public function index()
    {
        $Session = session();
		$Session->get('email');
		if($Session->get('email') !="" || $Session->get('email')!=null){
        $registerApartment = new RegistroModel();
        $resultApartment = $registerApartment->readApartment();
        $data = array(
            "registerapartment" => $resultApartment,
        );
        echo view('totalApartments_view', $data);
        echo view('layouts/footer');
    }
    else{
        echo view('denegado_view');
        echo view('layouts/footer');
    }
    }
}
