<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    #method get
    public function index() {
        // $user = [
        //     'nama'=> 'Anisa Nur Halifah',
        //     'jurusan' => 'Teknik Informatika'
        // ];
        $students = Mahasiswa::all();
        $data = [
            'message' => 'Get all student',
            'data' => $students ];
        return response()->json($data, 200);
    }
    public function store(Request $request){
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
        ];
        $student = Student::create($input);
        $data = [
            'message' => 'Data mahasiswa berhasil dibuat',
            'data' => $student, 
        ];
        return response()->json($data, 201);
    }
    public function update(Request $request, $id){
        $siswa1 = Student::find ($id);
        $siswa1->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
            'updated_at' => now()
        ]);
        $data = [
            'message' => 'Data berhasil diubah' .$id,
            'data' => $siswa1
        ];
        return response()->json($data, 200);
    }
    public function delete($id){
        $siswa2 = Student::destroy($id);
        $data = [
            'message' => 'Data telah dihapus' .$id,
            'jumlah data terhapus' =>$siswa2
        ];
        return response()->json($data, 200);
    }
}