<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistroModel extends Model
{
    function addUser($nameUser,$emailUser,$countryUser,$cityUser,$passwordUser,$rol){
         $sql = "INSERT INTO  registeruser (nameUser, emailUser, countryUser, cityUser, passwordUser, rol) VALUES ('{$nameUser}', '{$emailUser}', '{$countryUser}', '{$cityUser}', '{$passwordUser}', '{$rol}')";
         $this ->db->query($sql);   
        }

    function readUser(){
        $sql ="SELECT * FROM registeruser";
        $users = $this->db->query($sql);
        return $users->getResult();
    }
}