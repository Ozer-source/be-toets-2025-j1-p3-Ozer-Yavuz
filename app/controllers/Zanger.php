<?php

class Zanger extends BaseController
{
    private $Zanger;

    public function __construct()
    {
        $this->Zanger = $this->model('ZangersModel');
    }


    public function index()
    {
        $result = $this->Zanger->GetAllZangers();
        
        $data = [
            'title' => 'Overzicht Zanger',
            'Zanger' => $result
        ];

        $this->view('Zangers/index', $data);
    }

    public function delete($Id)
    {
        $result = $this->Zanger->deleteZanger($Id);

        header("Location:". URLROOT. "/Zanger/index");


        
    }
}