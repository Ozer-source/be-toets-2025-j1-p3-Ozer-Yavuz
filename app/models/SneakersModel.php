<?php

class SneakerModel{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function GetAllSneakers() {
        $sql = 'SELECT 
                 SN.Id
                ,SN.Merk
                ,SN.Model
                ,SN.Prijs


                FROM Sneakers as SN';
                
                $this->db->query($sql);

                return $this->db->resultSet();
    }


    public function deleteSneaker(int $Id) {
        $sql = "DELETE FROM Sneakers WHERE Id = $Id;";

        $this->db->query($sql);
        return $this->db->execute();
        
        
    }
    

}