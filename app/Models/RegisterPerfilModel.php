<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterPerfilModel extends Model
{
    function addPerfil($nameUser,$cityUser){
         $sql = "INSERT INTO  registeruser (nameUser,cityUser) VALUES ('{$nameUser}', '{$cityUser}')";
         $this ->db->query($sql);   
        }

    function readPerfil(){
        $Session = session();
        $id = $Session->get('id');
        $sql ="SELECT * FROM registeruser where id = $id";
        $perfil = $this->db->query($sql);
        return $perfil->getResult();
    }

    function updatePerfil($id,$nameUser,$cityUser,$description,$image){
        $sql = "UPDATE registeruser SET nameUser='{$nameUser}',cityUser='{$cityUser}',description='{$description}',image='{$image}'WHERE id='{$id}'  ";
        $this->db->query($sql);
    }


}