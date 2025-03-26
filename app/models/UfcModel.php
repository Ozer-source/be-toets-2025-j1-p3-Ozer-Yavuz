<?php

class UfcModel{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function GetAllUfcs() {
        $sql = 'SELECT 
                 UFC.Id
                ,UFC.Naam
                ,UFC.Ranglijstnummer
                ,UFC.Lengte
                ,UFC.Gewicht
                ,UFC.Leeftijd
                ,UFC.Ko


                FROM Ufc as UFC
                ORDER BY UFC.Ranglijstnummer ASC';
                
                
                $this->db->query($sql);

                return $this->db->resultSet();
    }


    public function deleteToren(int $Id) {
        $sql = "DELETE FROM Torens WHERE Id = $Id;";

        $this->db->query($sql);
        return $this->db->execute();
        
        
    }
    

}