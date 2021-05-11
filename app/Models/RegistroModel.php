<?php

namespace App\Models;

use CodeIgniter\Model;
use mysqli;

class RegistroModel extends Model
{
    function addUser($nameUser,$emailUser,$countryUser,$cityUser,$passwordUser,$rol){
         $sql = "INSERT INTO  registeruser (nameUser, emailUser, countryUser, cityUser, passwordUser, rol) VALUES ('{$nameUser}', '{$emailUser}', '{$countryUser}', '{$cityUser}', '{$passwordUser}', '{$rol}')";
         $this ->db->query($sql);   
        }

    function readApartment(){
        $sql ="SELECT * FROM registerapartment";
        $apartment = $this->db->query($sql);
        return $apartment->getResult();
    }

    function login($email){
        $sql = "SELECT * FROM registeruser WHERE emailUser='{$email}'";
        $rol = $this->db->query($sql);
        return $rol->getResult();
    }

}