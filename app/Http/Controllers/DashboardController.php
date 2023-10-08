<?php

namespace App\Http\Controllers;


use App\Models\Handphone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function index() {
        $data['Handphone'] = Handphone::all();
        return view('list', $data);
    }

    public function add() {
        return view('create');
    }

    public function store(Request $req) {
        $messages = [
            'required' => ':attribut tidak boleh kosong'
        ];

        $validator = Validator::make($req->all(), [
            'nama' => 'required',
            'merk' => 'required',
            'harga' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'error' => $validator->errors()->toArray()
            ]);
        }

        $data = [
            'nama' => $req->nama,
            'merk' => $req->merk,
            'harga' => $req->harga,
        ];
        $fileName = time(). str_replace(" ", "", $req->nama). '.' .$req->foto->extension();
        $data['foto'] = $req->file('foto')->storeAs('foto_hp', $fileName);

        Handphone::create($data);
        return redirect(route('list'));
    }

    public function edit($id) {
        $data['Handphone'] = Handphone::where('id', $id)->first();
        return view('edit', $data);
    }

    public function update(Request $req, $id) {
        $messages = [
            'required' => ':attribut tidak boleh kosong'
        ];

        $validator = Validator::make($req->all(), [
            'nama' => 'required',
            'merk' => 'required',
            'harga' => 'required',
            'foto' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'error' => $validator->errors()->toArray()
            ]);
        }

        $data = [
            'nama' => $req->nama,
            'merk' => $req->merk,
            'harga' => $req->harga,
            'foto' => $req->foto
        ];

        Handphone::where('id', $id)->update($data);
        return redirect(route('list'));
    }

    public function destroy($id){

        Handphone::where('id',$id)->delete();

        return redirect(route('list'));
    }
}
