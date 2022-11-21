<?php

namespace App\Http\Controllers\api\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Menampilkan Semua Data
    public function index()
    {
        $users = User::select("id", "nama_depan", "nama_belakang", "no_telepon", "username", "email", "tanggal_lahir", "jenis_kelamin", "referensi", "label_alamat", "kota_kecamatan", "alamat_lengkap", "saldo", "score", "status")->where('id', auth()->guard('api')->user()->id)->get();
        return response()->json([
            "data" => $users,
            "status" => 200,
        ]);
    }

    // Mengedit Data
    public function update(Request $request, $id)
    {
        //validasi
        $validated = $request->validate([
            'nama_depan' => ['required'],
            'nama_belakang' => ['required'],
            'no_telepon' => ['required', 'string', 'min:12', 'max:14'],
            // 'username' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'tanggal_lahir' => ['required'],
            // 'jenis_kelamin' => ['required'],
            // 'referensi' => ['required'],
            'label_alamat' => ['required'],
            'kota_kecamatan' => ['required'],
            'alamat_lengkap' => ['required'],
        ]);

        $users = User::findOrFail($id);

        $users->nama_depan = $request->nama_depan;
        $users->nama_belakang = $request->nama_belakang;
        $users->no_telepon = $request->no_telepon;
        // $users->username = $request->username;
        $users->email = $request->email;
        // $users->tanggal_lahir = $request->tanggal_lahir;
        // $users->jenis_kelamin = $request->jenis_kelamin;
        $users->referensi = $request->referensi;
        $users->label_alamat = $request->label_alamat;
        $users->kota_kecamatan = $request->kota_kecamatan;
        $users->alamat_lengkap = $request->alamat_lengkap;
        $users->save();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully updated Users",
        ]);
    }

    // Mengedit Data
    public function updateStatus(Request $request, $id)
    {
        //validasi
        $validated = $request->validate([
            'status' => ['required'],
        ]);

        $users = User::findOrFail($id);

        $users->status = $request->status;
        $users->save();

        return response()->json([
            "status" => 201,
            "messaage" => "succesfully updated Status Users",
        ]);
    }

    // Menampilkan Semua Data
    public function allData()
    {
        $users = User::select("id", "nama_depan", "nama_belakang", "username")->get();
        return response()->json([
            "data" => $users,
            "status" => 200,
        ]);
    }
}
