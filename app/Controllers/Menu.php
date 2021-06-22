<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\PesananModel;
use App\Models\MejaModel;

class Menu extends BaseController
{

    protected $menuModel;
    protected $pesananModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
        $this->pesananModel = new PesananModel();
        $this->mejaModel = new MejaModel();
    }

    public function index($id)
    {
        $data = [
            'title' => 'Menu',
            'id_meja' => $id,
        ];
        return view('menu/index', $data);
    }

    public function list($id)
    {
        $data = [
            'title' => 'Menu List',
            'id_meja' => $id,
            'makanan' => $this->menuModel->where('kategori', 'makanan')->findAll(),
            'minuman' => $this->menuModel->where('kategori', 'minuman')->findAll(),
            'snack' => $this->menuModel->where('kategori', 'snack')->findAll(),
            'desert' => $this->menuModel->where('kategori', 'desert')->findAll(),
        ];
        return view('menu/list', $data);
    }

    public function submit()
    {

        $id = $this->request->getVar('id');
        $pesanan = $this->request->getVar('pesan');

        // var_dump($id);

        try {
            foreach ($pesanan as $key => $v) {
                $id_meja = $id;
                $id_menu = $key;
                $quantity = $v['jumlah'];
                $harga = $v['harga'];

                $this->pesananModel->insert([
                    'id_meja' => "$id_meja",
                    'id_menu' => "$id_menu",
                    'quantity' => "$quantity",
                    'harga' => "$harga",
                    'status' => 'wait',
                ]);
            }
            echo "Menu berhasil ditambahkan untuk meja ${id}";
        } catch (\Exception $e) {
            throw new \Exception("Tidak dapat dibuka");
        }
    }

    public function waitingList($id)
    {

        $data = [
            'title' => 'Waiting List',
            'id' => $id,
            'wait' => $this->pesananModel->getPesanan($id, 'wait'),
            'done' => $this->pesananModel->getPesanan($id, 'done'),
            'cancel' => $this->pesananModel->getPesanan($id, 'cancel'),
        ];
        return view('menu/waitingList', $data);
    }


    public function update($id, $status)
    {
        $data = $this->pesananModel->getPesanan($id, $status);

        // dd($data[0]);
        $output = "";

        $i = 1;
        foreach ($data as $inv) {
            $output .= "<tr id='pesananId-{$inv['id']}'>
                <th scope='row'>{$i}</th>
                <td>{$inv['nama']}</td>
                <td>{$inv['quantity']}</td>
                <td>{$inv['harga']}</td>
            </tr>";
            $i++;
        }

        echo $output;
    }

    public function checkout($id)
    {
        $this->pesananModel->where('id_meja', $id)->delete();
        $this->mejaModel->update($id, [
            'username' => "Meja {$id}"
        ]);

        $data = [
            'title' => 'Success',
        ];

        return view('/menu/checkout', $data);
    }

    public function updateNama($id)
    {
        // echo $id;
        try {
            $nama = $this->request->getVar('nama');
            $data = [
                'username' => $nama,
            ];
            $this->mejaModel->update($id, $data);
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
