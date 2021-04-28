<?php

namespace App\Controllers;

use App\Models\RegisterApartmentsModel;

class ListApartmentsController extends BaseController
{
    public function index()
    {
        $registerApartment = new RegisterApartmentsModel();
        $resultApartment = $registerApartment->readApartment();
        $data = array(
            "registerApartment" => $resultApartment,
        );
        echo view('listApartments_view',$data);
        echo view('layouts/footer');
    }
}
