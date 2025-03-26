<?php

class Toren extends BaseController
{
    private $Toren;

    public function __construct()
    {
        $this->Toren = $this->model('TorenModel');
    }


    public function index()
    {
        $result = $this->Toren->GetAllTorens();
        
        $data = [
            'title' => 'Overzicht Toren',
            'Toren' => $result
        ];

        $this->view('Torens/index', $data);
    }

    public function delete($Id)
    {
        $result = $this->Toren->deleteToren($Id);

        header("Location:". URLROOT. "/Toren/index");


        
    }
}