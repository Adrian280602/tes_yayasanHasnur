<?php

namespace App\Controllers;
use App\Models\SemnasModel;

class Semnas extends BaseController
{

    //Inheritance
    protected $semnasModel;
    public function __construct(){
        $this->semnasModel = new SemnasModel();
    }

    //Method Read
    public function index()
    {
        $curpage = $this->request->getVar('page_semnas') ? $this->request->getVar('page_semnas') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword){
            $semnas = $this->semnasModel->search($keyword);
        }
        else{
            $semnas = $this->semnasModel;
        }
        
        $data = [
            'semnas' => $semnas->paginate(5, 'semnas'),
            'pager' => $this->semnasModel->pager,
            'curpage' => $curpage
        ];
        return view('main/semnas', $data);
    }

    //Method Save
    public function save()
    {
        $this->semnasModel->save([
            'project_name' => $this->request->getVar('project_name'),
            'email' => $this->request->getVar('client'),
            'nama' => $this->request->getVar('nama'),
            'start_date' => $this->request->getVar('start_date'),
            'end_date' => $this->request->getVar('end_date'),
        ]);

        session()->setFlashdata('Pesan', 'Data berhasil ditambahkan..');
        return redirect()->to('/semnas');
    }
}
