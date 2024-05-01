<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    //Get the data for the API
    public function index()
    {
        $mahasiswas=Mahasiswa::all();
        return response()->json($mahasiswas);
    }
    //Store or create data for the API
    public function store(Request $request)
    {
        $request->validate([
            'NIM' => 'required|unique:mahasiswa',
            'Nama_depan' => 'required|max:50',
            'Nama_belakang' => 'required|max:50',
            'Alamat' => 'required|max:50',
            'No_telp' => 'required|max:50',
            'Jurusan'=>'required|max:3'
        ]);

        $mahasiswa = Mahasiswa::create([
            'NIM'=>$request->NIM,
            'Nama_depan' => $request->Nama_depan,
            'Nama_belakang' => $request->Nama_belakang,
            'Alamat' => $request->Alamat,
            'No_telp'=>$request->No_telp,
            'Jurusan'=>$request->Jurusan
        ]);

        return response()->json(['message' => 'Mahasiswa created successfully', 'data' => $mahasiswa], 201);
    }

    //Show the data by selected ID
    public function show($Id_mahasiswa)
    {
        $mahasiswa=Mahasiswa::where('Id_mahasiswa',$Id_mahasiswa)
                        ->firstOrFail();
        return response()->json($mahasiswa);
    }

    //Update the data by selected ID for the API
    public function update(Request $request,$Id_mahasiswa)
    {
        $request->validate([
            'NIM' => 'required|unique:mahasiswa,NIM,'.$Id_mahasiswa.',Id_mahasiswa',
            'Nama_depan' => 'required|max:50',
            'Nama_belakang' => 'required|max:50',
            'Alamat' => 'required|max:50',
            'No_telp' => 'required|max:50',
            'Jurusan'=>'required|max:3'
        ]);

        $mahasiswa = Mahasiswa::findOrFail($Id_mahasiswa);
        $mahasiswa->update($request->all());
        
        return response()->json(['message'=>'Mahasiswa updated successfully','data'=>$mahasiswa]);
    }

   
    //Delete the data from selected ID
    public function destroy($Id_mahasiswa)
    {
        $mahasiswa=Mahasiswa::findOrFail($Id_mahasiswa);
        $mahasiswa->delete();

        return response()->json(['message'=>'Mahasiswa deleted Successfully'],200);
        
    }

    public function showByNIM($nim)
    {
        $mahasiswa = Mahasiswa::where('NIM', $nim)->first();

        if (!$mahasiswa) {
            return response()->json(['message' => 'Mahasiswa not found'], 404);
        }

        return response()->json($mahasiswa, 200);
    }

}
