<?php

namespace App\Controllers;

class Buku extends BaseController
{
    protected $bukuModel;
    public function __construct()
    {
        $this->bukuModel = new \App\Models\BukuModel();
    }

    public function index()
    {
        return view('daftar_buku');
    }

    public function addbuku()
    {
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view ('add_buku', $data);
    }

    public function save()
    {
        //fungsi validasi
        if (!$this->validate([
            'judul' => 'required|is_unique[buku.judul]',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'jumlah_halaman' => 'required',
            'sampul' => 'required'
        ])) {
            return redirect()->to('/Buku/addbuku')->withInput();
        }

        $this->bukuModel->save([
            'judul' => $this->request->getVar('judul'),
            'pengarang' => $this->request->getVar('pengarang'),
            'penerbit' => $this->request->getVar('penerbit'),
            'jumlah_halaman' => $this->request->getVar('jumlah_halaman'),
            'sampul' => $this->request->getVar('sampul')
        ]);
        session()->setFlashdata('pesan', 'Pesan Berhasil Disimpan');

        return redirect()->to('/Buku');
    }
}