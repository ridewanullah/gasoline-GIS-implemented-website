<?php

namespace App\Controllers;

use App\Models\ModelMap;

class Menu extends BaseController
{
    protected $modelmap;
    public function __construct()
    {
        $this->modelmap = new ModelMap();
    }

    public function awal()
    {
        echo view('landingpage');
    }

    public function home()
    {
        echo view('home');
    }

    public function contactus()
    {
        echo view('contactus');
    }

    public function learn()

    {
        echo view('learn');
    }

    public function viewmap()
    {
        $model = new \App\Models\ModelMap();

        $datadiri = $model->findAll();
        $data = [
            'datadiri' => $datadiri
        ];
        echo view('viewmap', $data);
    }

    public function mapadmin()
    {
        $model = new \App\Models\ModelMap();

        $datadiri = $model->findAll();
        $data = [
            'datadiri' => $datadiri
        ];
        echo view('mapadmin', $data);
    }

    public function createadmin()
    {
        $model = new \App\Models\ModelMap();


        $datadiri = $model->findAll();
        $data = [

            'tittle' => 'Data Diri',
            'datadiri' => $datadiri
        ];
        echo view('createadmin', $data);
    }

    public function saveadmin()
    {
        $id = $this->request->getPost('id');
        $nama =  $this->request->getPost('nama');
        $alamat =  $this->request->getPost('alamat');
        $lat =  $this->request->getPost('lat');
        $long =  $this->request->getPost('long');

        $data = [
            'id' => $id,
            'nama' => $nama,
            'alamat' => $alamat,
            'lat' => $lat,
            'long' => $long
        ];

        $simpan = $this->modelmap->insert($data);

        if ($simpan) {
            session()->setFlashdata('success', 'sipo');
            return redirect()->to('/mapadmin');
        } else {
            session()->setFlashdata('gagal', 'gg');
            return redirect()->to('/mapadmin');
        }
    }

    public function delete($id = null)
    {

        $model = new ModelMap();

        $model->where('id', $id)->delete();

        return redirect()->to(base_url('/mapadmin'));
    }

    public function find($id = null)
    {
        $model = new ModelMap();
        $datadiri = $model->find($id);

        $data = [

            'tittle' => 'Update Data',
            'datadiri' => $datadiri
        ];
        echo view('update', $data);
    }

    public function update()
    {
        $model = new ModelMap();
        $model->save($_POST);
        return redirect()->to(base_url('/mapadmin'));
    }
}
