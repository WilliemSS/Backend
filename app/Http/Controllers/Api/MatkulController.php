<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
     //Get the data for the API
    public function index()
    {
        $matkuls=Matkul::all();
        return response()->json($matkuls);
    }

      //Store or create data for the API
    public function store(Request $request)
    {
        $request->validate([
            'Kd_matkul' => 'required|unique:matkul',
            'Nama_matkul' => 'required|max:50',
            'SKS' => 'required|integer',
            'Jurusan' => 'required|max:3',
        ]);

        $matkul = Matkul::create([
            'Kd_matkul'=>$request->Kd_matkul,
            'Nama_matkul' => $request->Nama_matkul,
            'SKS' => $request->SKS,
            'Jurusan' => $request->Jurusan,
        ]);

        return response()->json(['message' => 'Matkul created successfully', 'data' => $matkul], 201);
    }

      //Show the data by selected ID for the API
    public function show($Id_matkul)
    {
        $matkul=Matkul::where('Id_matkul',$Id_matkul)
                        ->firstOrFail();
        return response()->json($matkul);
    }

    //Update the data by selected ID for the API
    public function update(Request $request,$Id_matkul)
    {
        $request->validate([
            'Kd_matkul' => 'required|unique:matkul,Kd_matkul,'.$Id_matkul.',Id_matkul',
            'Nama_matkul' => 'required|max:50',
            'SKS' => 'required|integer',
            'Jurusan' => 'required|max:3',
        ]);

        $matkul = Matkul::findOrFail($Id_matkul);
        $matkul->update($request->all());
        
        return response()->json(['message'=>'Matkul updated successfully','data'=>$matkul]);
    }

    //Delete the data from selected ID
    public function destroy($Id_matkul)
    {
        $matkul=Matkul::findOrFail($Id_matkul);
        $matkul->delete();

        return response()->json(['message'=>'Matkul deleted Successfully'],200);
        
    }

}