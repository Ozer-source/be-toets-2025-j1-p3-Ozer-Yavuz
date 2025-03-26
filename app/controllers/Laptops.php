<?php

class Laptops extends BaseController
{
    private $Laptops;

    public function __construct()
    {
        $this->Laptops = $this->model('LaptopsModel');
    }


    public function index()
    {
        $result = $this->Laptops->getAllLaptops();
        
        $data = [
            'title' => 'Overzicht Laptops',
            'Laptops' => $result
        ];

        $this->view('Laptops/index', $data);
    }
    public function delete($Id)
    {
        $result = $this->Laptops->deleteLaptop($Id);

        header("Location:". URLROOT. "/Laptops/index");


        
    }
}