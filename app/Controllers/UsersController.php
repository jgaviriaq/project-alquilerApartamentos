<?php

namespace App\Controllers;

use App\Models\RegistroModel;

class UsersController extends BaseController
{
    public function index()
    {
        $registerUser = new RegistroModel();
        $resultUser = $registerUser->readUser();
        $data = array(
            "registeruser" => $resultUser,
        );
        echo view('users_view', $data);
        echo view('layouts/footer');
    }
}
