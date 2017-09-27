<?php

class Model_Demo extends CI_Model
{
    public function GetAllCategories()
    {
        $sql=$this->db->query("select* from categorie");
        return $sql->result();
    }
    function GetAllJeuxByCategorie($laCateg)
    {
        $sql=$this->db->query("select* from jeux where numCateg= ".$laCateg);
        return $sql->result();
    }
}

