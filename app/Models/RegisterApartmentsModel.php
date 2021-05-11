<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterApartmentsModel extends Model
{
    function addApartment($id_user,$cityapartment, $countryapartment, $addressapartment, $urlgoogle, $numberrooms, $imagesapartment, $outstandingimage,$nightvalue, $descriptionapartment){
         $sql = "INSERT INTO  registerapartment (id_user,cityapartment, countryapartment, addressapartment, urlgoogle, numberrooms, imagesapartment, outstandingimage, nightvalue, descriptionapartment) VALUES ('{$id_user}','{$cityapartment}', '{$countryapartment}', '{$addressapartment}', '{$urlgoogle}', '{$numberrooms}', '{$imagesapartment}', '{$outstandingimage}', '{$nightvalue}', '{$descriptionapartment}')";
         $this ->db->query($sql);   
        }

    function readApartment(){
        $Session = session();
        $id = $Session->get('id');
        $sql ="SELECT * FROM registerapartment where id_user = $id";
        $apartments = $this->db->query($sql);
        return $apartments->getResult();
    }

    function deleteApartment($id){
        $sql = "DELETE FROM registerapartment WHERE id =$id ";
        $this->db->query($sql);    
    }

    
    function updateApartment($id,$cityApartment,$countryApartment,$addressApartment,$numberrooms,$imagesapartment,$outstandingimage,$nightvalue,$descriptionapartment){
        $sql ="UPDATE registerapartment SET cityapartment='{$cityApartment}',countryapartment ='{$countryApartment}',addressapartment='{$addressApartment}',numberrooms='{$numberrooms}',imagesapartment='{$imagesapartment}',outstandingimage='{$outstandingimage}',nightvalue='{$nightvalue}',descriptionapartment='{$descriptionapartment}' where id = '{$id}'";
        $this->db->query($sql);
       
    }

}

