<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    #method get
    public function index() {
        // $user = [
        //     'nama'=> 'Anisa Nur Halifah',
        //     'jurusan' => 'Teknik Informatika'
        // ];
        $mahasiswas = Mahasiswa::all();
        $data = [
            'message' => 'Get all mahasiswa',
            'data' => $mahasiswas 
        ];
        return response()->json($data, 200);
    }
    public function store(Request $request){
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
        ];
        $mahasiswa = Mahasiswa::create($input);
        $data = [
            'message' => 'Data mahasiswa berhasil dibuat',
            'data' => $mahasiswa, 
        ];
        return response()->json($data, 201);
    }
    public function update(Request $request, $id){
        $student1 = Mahasiswa::find ($id);
        $student1->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
            'updated_at' => now()
        ]);
        $data = [
            'message' => 'Data berhasil diubah' .$id,
            'data' => $student1
        ];
        return response()->json($data, 200);
    }
    public function delete($id){
        $student2 = Mahasiswa::destroy($id);
        $data = [
            'message' => 'Data Berhasil dihapus' .$id,
            'jumlah data yang terhapus' =>$student2
        ];
        return response()->json($data, 200);
    }
}