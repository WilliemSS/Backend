<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DaftarPengajar;

class DaftarPengajarController extends Controller
{
     //Get the data for the API
     public function index()
     {
         $pengajars=DaftarPengajar::all();
         return response()->json($pengajars);
     }

      //Store or create data for the API
      public function store(Request $request)
      {
          $request->validate([
              'NIM' => 'required',
              'Nama_mahasiswa' => 'required|max:100',
              'Nama_matkul' => 'required|max:50',
              'SKS' => 'required',
              'NID' => 'required',
              'Nama_dosen'=>'required|max:100'
          ]);
  
          $pengajar=DaftarPengajar::create($request->all());
  
          return response()->json(['message' => 'Daftar pengajar created successfully', 'data' => $pengajar], 201);
      }

      //Show the data by selected ID
    public function show($Id_pengajar)
    {
        $pengajar=DaftarPengajar::where('Id_pengajar',$Id_pengajar)
                        ->firstOrFail();
        return response()->json($pengajar);
    }

     //Update the data by selected ID for the API
     public function update(Request $request,$Id_pengajar)
     {
         $request->validate([
             'NIM' => 'required',
             'Nama_mahasiswa' => 'required|max:100',
             'Nama_matkul' => 'required|max:50',
             'SKS' => 'required',
             'NID' => 'required',
             'Nama_dosen'=>'required|max:100'
         ]);
 
         $pengajar = DaftarPengajar::findOrFail($Id_pengajar);
         $pengajar->update($request->all());
         
         return response()->json(['message'=>'Daftar Pengajar updated successfully','data'=>$pengajar]);
     }

     //Delete the data from selected ID
    public function destroy($Id_pengajar)
    {
        $pengajar=DaftarPengajar::findOrFail($Id_pengajar);
        $pengajar->delete();

        return response()->json(['message'=>'Daftar Pengajar deleted Successfully'],200);
        
    }
}
