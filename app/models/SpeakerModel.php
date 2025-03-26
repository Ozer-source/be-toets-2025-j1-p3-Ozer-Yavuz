<?php

class SpeakerModel{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function GetAllSpeakers() {
        $sql = 'SELECT 
                 SP.Id
                ,SP.Naam
                ,SP.Batterijduur
                ,SP.Waterbestendigheid
                ,SP.Connectiviteit


                FROM Speakers as SP';
                
                $this->db->query($sql);

                return $this->db->resultSet();
    }


    public function deleteSpeaker(int $Id) {
        $sql = "DELETE FROM Speakers WHERE Id = $Id;";

        $this->db->query($sql);
        return $this->db->execute();
        
        
    }
    

}