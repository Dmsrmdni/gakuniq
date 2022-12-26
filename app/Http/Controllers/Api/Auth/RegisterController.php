<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'nama_depan' => ['required', 'string', 'max:255'],
            'nama_belakang' => ['required', 'string', 'max:255'],
            'no_telepon' => ['required', 'string', 'min:12', 'max:14'],
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'tanggal_lahir' => ['required'],
            'jenis_kelamin' => ['required'],
            // 'referensi' => ['required'],
            'label_alamat' => ['required'],
            'kota_kecamatan' => ['required'],
            'alamat_lengkap' => ['required'],
        ]);

        $users = new User();
        $users->nama_depan = $request->nama_depan;
        $users->nama_belakang = $request->nama_belakang;
        $users->no_telepon = $request->no_telepon;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->tanggal_lahir = $request->tanggal_lahir;
        $users->jenis_kelamin = $request->jenis_kelamin;
        $users->referensi = $request->referensi;
        $users->label_alamat = $request->label_alamat;
        $users->kota_kecamatan = $request->kota_kecamatan;
        $users->alamat_lengkap = $request->alamat_lengkap;
        $users->save();

        $token = Auth::login($users);

        return response()->json([
            "status" => 201,
            'data' => $users,
            "messaage" => "succesfully created Users",
        ]);
    }
}
