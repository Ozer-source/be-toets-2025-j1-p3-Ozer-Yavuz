<?php
class Ufc extends BaseController
{
    private $Ufc;

    public function __construct()
    {
        $this->Ufc = $this->model('UfcModel');
    }


    public function index()
    {
        $result = $this->Ufc->GetAllUfcs();
        
        $data = [
            'title' => "UFC Men's Pound-For-Pound Ranking",
            'Ufc' => $result
        ];

        $this->view('Ufc/index', $data);
    }

    public function delete($Id)
    {
        $result = $this->Ufc->deleteUfc($Id);

        header("Location:". URLROOT. "/Ufc/index");


        
    }
}