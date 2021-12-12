<?php

namespace App\Controllers;

use App\BaseControllers;
use App\Models\AkunModel;

class Akun extends BaseController
{
    public function __construct()
    {
        $this->AkunModel = new AkunModel();
    }
    public function index()
    {
        $akun = $this->AkunModel->findAll();
        $data = [
            'akun' => $akun
        ];
        return view('layout/v_akun', $data);
    }
    public function saveAkun()
    {
        $request = service('request');
        $data = [
            'name' => $request->getVar('name'),
            'password' => $request->getVar('password')
        ];
        $this->AkunModel->insert($data);
        return redirect()->to(base_url('listakun'));
    }
    public function listAkun()
    {
        $akun = $this->AkunModel->findAll();
        $data = [
            'akun' => $akun
        ];
        return view('layout/v_listakun', $data);
    }
    public function delete($id)
    {
        $this->AkunModel->delete($id);
        return redirect()->to(base_url('listakun'));
    }
    public function edit($id)
    {
        $data['akun'] = $this->AkunModel->find($id);
        //dd($data);
        return view('layout/v_editakun', $data);
    }
    public function editAkun($id)
    {
        $request = service('request');

        $this->AkunModel->save([
            'id' => $request->getVar('id'),
            'name' => $request->getVar('name'),
            'password' => $request->getVar('password')
        ]);

        return redirect()->to(base_url('listakun'));
    }
}
