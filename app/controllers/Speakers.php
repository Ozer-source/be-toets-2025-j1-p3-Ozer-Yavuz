<?php

class Speakers extends BaseController
{
    private $Speaker;

    public function __construct()
    {
        $this->Speaker = $this->model('SpeakerModel');
    }


    public function index()
    {
        $result = $this->Speaker->GetAllSpeakers();
        
        $data = [
            'title' => 'Overzicht Speakers',
            'Speaker' => $result
        ];

        $this->view('Speakers/index', $data);
    }

    public function delete($Id)
    {
        $result = $this->Speaker->deleteSpeaker($Id);

        header("Location:". URLROOT. "/Speakers/index");


        
    }
}