<?php

class LaptopsModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllLaptops()
    {
        $sql = 'SELECT  
                    LP.Id
                    ,LP.Merk
                    ,LP.Model
                    ,LP.Prijs
                    ,LP.Besturingssysteem
                    ,LP.Opslag
                    ,DATE_FORMAT(LP.DatumAangemaakt, "%d-%m-%Y") AS DatumAangemaakt
                    ,LP.Ram
                    ,LP.Gewicht


                FROM Laptops AS LP
                ORDER BY LP.Merk DESC, LP.Prijs ASC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

    public function deleteLaptop(int $Id) {
        $sql = "DELETE FROM Laptops WHERE Id = $Id;";

        $this->db->query($sql);
        return $this->db->execute();
        
        
    }
}