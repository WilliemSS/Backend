<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
     //Get the data for the API
     public function index()
     {
         $dosens=Dosen::all();
         return response()->json($dosens);
     }

     //Store or create data for the API
     public function store(Request $request)
     {
         $request->validate([
             'NID' => 'required|unique:dosen',
             'Nama_depan' => 'required|max:50',
             'Nama_belakang' => 'required|max:50',
             'Alamat' => 'required|max:50',
             'No_telp' => 'required|max:50',
             'Nama_matkul'=>'required|max:50'
         ]);
 
         $dosen = Dosen::create([
             'NID'=>$request->NID,
             'Nama_depan' => $request->Nama_depan,
             'Nama_belakang' => $request->Nama_belakang,
             'Alamat' => $request->Alamat,
             'No_telp'=>$request->No_telp,
             'Nama_matkul'=>$request->Nama_matkul
         ]);
 
         return response()->json(['message' => 'Dosen created successfully', 'data' => $dosen], 201);
     }

      //Show the data by selected ID
    public function show($Id_dosen)
    {
        $dosen=Dosen::where('Id_dosen',$Id_dosen)
                        ->firstOrFail();
        return response()->json($dosen);
    }

    //Update the data by selected ID for the API
    public function update(Request $request,$Id_dosen)
    {
        $request->validate([
            'NID' => 'required|unique:dosen,NID,'.$Id_dosen.',Id_dosen',
            'Nama_depan' => 'required|max:50',
            'Nama_belakang' => 'required|max:50',
            'Alamat' => 'required|max:50',
            'No_telp' => 'required|max:50',
            'Nama_matkul'=>'required|max:50'
        ]);

        $dosen = Dosen::findOrFail($Id_dosen);
        $dosen->update($request->all());
        
        return response()->json(['message'=>'Dosen updated successfully','data'=>$dosen]);
    }

   
    //Delete the data from selected ID
    public function destroy($Id_dosen)
    {
        $dosen=Dosen::findOrFail($Id_dosen);
        $dosen->delete();

        return response()->json(['message'=>'Dosen deleted Successfully'],200);
        
    }

     
}
