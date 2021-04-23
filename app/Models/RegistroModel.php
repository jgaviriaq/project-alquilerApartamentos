<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistroModel extends Model
{
    function addUser(){
        $nameUser = "Julian Gaviria";
        $emailUser = "jgaviriaq@outlook.com";
        $countryUser = "Colombia";
        $cityUser = "Medellin";
        $passwordUser = "1234";
        $rol = "Arrendador";
        $sql = "INSERT INTO  registeruser (nameUser, emailUser, countryUser, cityUser, passwordUser, rol) VALUES ('{$nameUser}', '{$emailUser}', '{$countryUser}', '{$cityUser}', '{$passwordUser}', '{$rol}')";
         $this ->db->query($sql);   

    }

    function readUser(){
        $sql ="SELECT * FROM registeruser";
        $users = $this ->db->query($sql);
        var_dump($users->getResult());
    }

}