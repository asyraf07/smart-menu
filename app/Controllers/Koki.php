<?php

namespace App\Controllers;

use App\Models\MejaModel;
use App\Models\PesananModel;

class Koki extends BaseController
{
    protected $mejaModel;
    protected $pesananModel;

    public function __construct()
    {
        $this->mejaModel = new MejaModel();
        $this->pesananModel = new PesananModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Koki',
            'active' => 'pesanan',
            "pesanan" => $this->pesananModel->getPesananStatus('wait'),
        ];

        // dd($this->pesananModel->getPesanan());

        return view('Koki/pesanan.php', $data);
    }

    public function ubahStatus()
    {
        $id = $this->request->getVar('id');
        $status = $this->request->getVar('status');

        $this->pesananModel->update($id, [
            'status' => $status,
        ]);
    }

    public function loadData()
    {

        $pesanan = $this->pesananModel->getPesananStatus('wait');

        // var_dump($pesanan);
        $done = "done";
        $cancel = "cancel";
        $output = "
		<tr class='row'>
			<th class='col-1'>Id Invoice</th>
			<th class='col-2'>Nama Menu</th>
			<th class='col-2'>Nama Pelanggan</th>
			<th class='col-2'>Nomor Meja</th>
			<th class='col-2'>Jumlah</th>
			<th class='col-2'>Aksi</th>
		</tr>";
        foreach ($pesanan as $inv) {
            $output .= "
            <tr class='row' id='pesananId-{$inv['id']}'>
                <td class='col-1'>{$inv['id']}</td>
                <td class='col-2'>{$inv['nama']}</td>
                <td class='col-2'>{$inv['username']}</td>
                <td class='col-2'>{$inv['no_meja']}</td>
                <td class='col-2'>{$inv['quantity']}</td>
                <td class='col-2'>
                    <div class='btn btn-sm btn-success' onclick='ubahStatus({$inv['id']}, `done`)'>Selesai</div>
                    <div class='btn btn-sm btn-danger' onclick='ubahStatus({$inv['id']}, `cancel`)'>Habis</div>
                </td>
            </tr>";
        }
        echo $output;
    }
}
