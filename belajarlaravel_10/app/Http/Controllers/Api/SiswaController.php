<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response([
            "message" => "Data Berhasil Ditampilkan!",
            "data" => Siswa::all()
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required',
            'sekolah_id' => 'required|integer',
            'alamat' => 'required|string',
        ]);

        return response([
            "message" => "Data Berhasil Dibuat!",
            "data" => Siswa::create($validator)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $data = [
                "message" => "Data Berhasil Ditampilkan",
                "data" => Siswa::findOrFail($id)
            ];
        } catch (\Throwable $th) {
            $data = [
                "message" => "Data Tidak Ditemukan"
            ];
        }
        return response($data, 200); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required',
            'sekolah_id' => 'required|integer',
            'alamat' => 'required|string',
        ]);

        $data = Siswa::find($id);
        $data->update($validator);

        return response([
            "message" => "Data Berhasil Diubah",
            "data" => $data
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Siswa::find($id)->delete();
        return response([
            "message" => "Data Berhasil Dihapus"
        ], 200);
    }
}
