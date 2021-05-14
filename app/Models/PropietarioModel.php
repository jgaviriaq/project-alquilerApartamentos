<?php

namespace App\Models;

use CodeIgniter\Model;

class PropietarioModel extends Model
{
    function readPropietario($id){
       $sql ="SELECT * from registeruser INNER JOIN registerapartment on registeruser.id= registerapartment.id_user where registerapartment.id = $id;";
        $propietario = $this->db->query($sql);
        return $propietario->getResult();
    }

  
}