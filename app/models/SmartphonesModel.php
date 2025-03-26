<?php

class SmartphonesModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllSmartphones()
    {
        $sql = 'SELECT  
                SMPH.Id
               ,SMPH.Merk
               ,SMPH.Model
               ,CONCAT(Prijs, " €") as Prijs
               ,SMPH.Besturingssysteem
               ,CONCAT(Schermgrootte, " mm") as Schermgrootte
               ,DATE_FORMAT(SMPH.ReleaseDate, "%d-%m-%Y") AS ReleaseDate
               ,CONCAT(Geheugen, " GB") as Geheugen
               ,SMPH.MegaPixel


                FROM Smartphones AS SMPH
                ORDER BY SMPH.Merk DESC, SMPH.Prijs ASC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

    public function deleteSmartphone(int $Id) {
        $sql = "DELETE FROM Smartphones WHERE Id = $Id;";

        $this->db->query($sql);
        return $this->db->execute();
        
        
    }
}