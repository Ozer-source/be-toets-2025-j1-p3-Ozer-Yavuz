<?php

class TorenModel{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function GetAllTorens() {
        $sql = 'SELECT 
                 Tr.Id
                ,Tr.Naam
                ,Tr.Locatie
                ,Tr.Hoogte
                ,Tr.AantalVerdiepingen
                ,Tr.JaarVoltooid


                FROM Torens as TR
                ORDER BY TR.Hoogte DESC';
                
                
                $this->db->query($sql);

                return $this->db->resultSet();
    }


    public function deleteToren(int $Id) {
        $sql = "DELETE FROM Torens WHERE Id = $Id;";

        $this->db->query($sql);
        return $this->db->execute();
        
        
    }
    

}