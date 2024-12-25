<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Pendaftaran extends BaseController
{
    public function index()
    {
        $pendaftaranModel = new PendaftaranModel();
        $data['pendaftaran'] = $pendaftaranModel->findAll();
        return view('pendaftaran/index', $data);
    }

    public function create()
    {
        return view('pendaftaran/create');
    }

    public function store()
    {
        $pendaftaranModel = new PendaftaranModel();
        $data = [
            'user_id' => session()->get('user_id'),
            'name' => $this->request->getPost('name'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'ijazah' => $this->request->getPost('ijazah'),
            'kk' => $this->request->getPost('kk')
        ];
        $pendaftaranModel->save($data);
        return redirect()->to('/pendaftaran');
    }
}

