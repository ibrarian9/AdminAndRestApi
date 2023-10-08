<?php

namespace App\Http\Controllers;

use App\Models\Handphone;
use Illuminate\Http\Request;

class ApiContoller extends Controller
{
    public function index() {
        $data = Handphone::all();
        if ($data) {
            echo json_encode(array('kode' => 200, 'hasil' => $data));
        } else {
            echo json_encode(array('kode' => 404, 'pesan' => 'data tidak ditemukan'));
        }
    }

    public function dataById($id) {
        $data = Handphone::where('id', $id)->first();
        if ($data) {
            echo json_encode(array('kode' => 200, 'hasil' => $data));
        } else {
            echo json_encode(array('kode' => 404, 'pesan' => 'data tidak ditemukan'));
        }
    }
}
