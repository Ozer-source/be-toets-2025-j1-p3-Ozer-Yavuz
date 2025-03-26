<?php

class Sneakers extends BaseController
{
    private $Sneaker;

    public function __construct()
    {
        $this->Sneaker = $this->model('SneakersModel');
    }


    public function index()
    {
        $result = $this->Sneaker->GetAllSneakers();
        
        $data = [
            'title' => 'Overzicht Sneakers',
            'Sneakers' => $result
        ];

        $this->view('Sneakers/index', $data);
    }

    public function delete($Id)
    {
        $result = $this->Sneaker->deleteSneaker($Id);

        header("Location:". URLROOT. "/Sneakers/index");


        
    }
}