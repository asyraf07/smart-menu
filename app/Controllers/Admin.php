<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Admin extends BaseController
{

    protected $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin',
            'active' => 'admin',
        ];
        return view('Admin/dashboard.php', $data);
    }

    public function menu_restaurant()
    {
        $data = [
            'title' => 'Menu Restaurant',
            'active' => 'menu',
            'menu' => $this->menuModel->findAll(),
        ];
        return view('Admin/menu_restaurant.php', $data);
    }

    public function tambah_menu()
    {
        $file_gambar = $this->request->getFile('gambar');
        // dd($file_gambar);
        if ($file_gambar->getError() == 4) {
            $nama_gambar = 'default.png';
        } else {
            $nama_gambar = $file_gambar->getRandomName();
            $file_gambar->move('img/menu', $nama_gambar);
        }

        $data = [
            'nama' => $this->request->getVar('nama'),
            'keterangan' => $this->request->getVar('keterangan'),
            'kategori' => $this->request->getVar('kategori'),
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok'),
            'gambar' => $nama_gambar,
        ];

        $this->menuModel->save($data);
        return redirect()->to('/Admin/menu');
    }

    public function hapus_menu($id)
    {
        $menu = $this->menuModel->find($id);
        // dd($menu);

        if ($menu['gambar'] != 'default.png') {
            unlink('img/menu/' . $menu['gambar']);
        }

        $this->menuModel->delete($id);
        return redirect()->to('/Admin/menu');
    }

    public function update_menu($id)
    {
        $menu = $this->menuModel->find($id);
        $file_gambar = $this->request->getFile('gambar');
        // dd($file_gambar);
        if ($file_gambar->getError() == 4) {
            $nama_gambar = $menu['gambar'];
        } else {
            if ($menu['gambar'] != 'default.png') {
                unlink('img/menu/' . $menu['gambar']);
            }
            $nama_gambar = $file_gambar->getRandomName();
            $file_gambar->move('img/menu', $nama_gambar);
        }

        $data = [
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'keterangan' => $this->request->getVar('keterangan'),
            'kategori' => $this->request->getVar('kategori'),
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok'),
            'gambar' => $nama_gambar,
        ];

        $this->menuModel->save($data);
        return redirect()->to('/Admin/menu');
    }

    public function edit_menu($id)
    {
        $data = [
            "title" => 'Edit Menu',
            'active' => 'menu',
            "menu" => $this->menuModel->find($id),
        ];

        return view('/Admin/edit_menu', $data);
    }
}
