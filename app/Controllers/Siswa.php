<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Siswa extends BaseController
{
    public function __construct()
    {
        $this->SiswaModel = new SiswaModel();
    }
    public function index()
    {
        $siswa = $this->SiswaModel->findAll();
        $data = [
            'siswa' => $siswa,
            'title' => 'Daftar Siswa'
        ];
        return view('layout/v_siswa', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Tambah Data Siswa'
        ];
        return view('layout/v_createsiswa', $data);
    }
    public function createsiswa()
    {
        $request = service('request');
        $data = [
            'nama' => $request->getVar('nama'),
            'nis' => $request->getVar('nis'),
            'kelas' => $request->getVar('kelas'),
            'tagihan' => $request->getVar('tagihan'),
            'status' => $request->getVar('status'),
            'cicil' => $request->getVar('cicil'),
        ];
        $this->SiswaModel->insert($data);
        return redirect()->to(base_url('siswa'));
    }
    public function detail($id_siswa)
    {
        $data = [
            'siswa' => $this->SiswaModel->find($id_siswa),
            'title' => 'Detail Siswa'
        ];
        //dd($data);
        return view('layout/v_detail', $data);
    }
    public function edit($id_siswa)
    {
        $data = [
            'siswa' => $this->SiswaModel->find($id_siswa),
            'title' => 'Edit Data Siswa'
        ];
        return view('layout/v_editsiswa', $data);
    }
    public function delete($id_siswa)
    {
        // $update = [
        //     'status' => 'Terhapus'
        // ];
        $this->SiswaModel->update($id_siswa);
        $data = [
            'siswa' => $this->SiswaModel->find($id_siswa),
            'title' => 'Detail Siswa'
        ];
        return view('layout/v_detail', $data);
    }
    public function editSiswa($id_siswa)
    {
        $request = service('request');

        $this->SiswaModel->save([
            'id_siswa' => $request->getVar('id_siswa'),
            'nama' => $request->getVar('nama'),
            'nis' => $request->getVar('nis'),
            'kelas' => $request->getVar('kelas'),
            'tagihan' => $request->getVar('tagihan'),
            'status' => $request->getVar('status'),
            'cicil' => $request->getVar('cicil'),
        ]);
        $data = [
            'siswa' => $this->SiswaModel->find($id_siswa),
            'title' => 'Detail Siswa'
        ];
        return view('layout/v_detail', $data);
    }
    public function laporan()
    {
        $siswa = $this->SiswaModel->findAll();

        $data = [
            'siswa' => $siswa,
            'title' => 'Laporan',
            'sudah' => $this->SiswaModel->where('status', 'Sudah Bayar')->findAll(),
            'jumlah' => $this->SiswaModel->findAll(),
            'cicil' => $this->SiswaModel->where('status', 'Cicil')->findAll(),
            'belum' => $this->SiswaModel->where('status', 'Belum Bayar')->findAll(),
        ];
        return view('layout/v_laporan', $data);
    }
}
