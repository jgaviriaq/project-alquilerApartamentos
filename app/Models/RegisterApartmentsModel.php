<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterApartmentsModel extends Model
{
    function addApartment($cityapartment, $countryapartment, $addressapartment, $urlgoogle, $numberrooms, $imagesapartment, $outstandingimage,$nightvalue, $descriptionapartment){
         $sql = "INSERT INTO  registerapartment (cityapartment, countryapartment, addressapartment, urlgoogle, numberrooms, imagesapartment, outstandingimage, nightvalue, descriptionapartment) VALUES ('{$cityapartment}', '{$countryapartment}', '{$addressapartment}', '{$urlgoogle}', '{$numberrooms}', '{$imagesapartment}', '{$outstandingimage}', '{$nightvalue}', '{$descriptionapartment}')";
         $this ->db->query($sql);   
        }

    function readApartment(){
        $sql ="SELECT * FROM registerapartment";
        $apartments = $this->db->query($sql);
        return $apartments->getResult();
    }
}