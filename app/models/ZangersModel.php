<?php

class ZangersModel{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function GetAllZangers() {
        $sql = 'SELECT 
                 ZA.Id
                ,ZA.Naam
                ,ZA.Nettowaarde
                ,ZA.Land
                ,ZA.Mobiel
                ,ZA.Leeftijd


                FROM Zangeres as ZA
                ORDER BY ZA.Nettowaarde DESC';
                
                
                $this->db->query($sql);

                return $this->db->resultSet();
    }


    public function deleteZanger(int $Id) {
        $sql = "DELETE FROM Zangeres WHERE Id = $Id;";

        $this->db->query($sql);
        return $this->db->execute();
        
        
    }
    

}