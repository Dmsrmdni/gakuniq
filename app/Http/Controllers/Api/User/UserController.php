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
        $users = User::select("id", "profile", "nama_depan", "nama_belakang", "no_telepon", "name", "email", "tanggal_lahir", "jenis_kelamin", "referensi", "label_alamat", "kota_kecamatan", "alamat_lengkap", "saldo", "score", "status")->where('id', auth()->guard('api')->user()->id)->get();
        return response()->json([
            "data" => $users,
            "status" => 200,
        ]);
    }

    // public function updateImage(Request $request, $id)
    // {

    //     //validasi
    //     $validated = $request->validate([
    //         'profile' => ['required'],
    //     ]);

    //     $users = User::findOrFail($id);

    //     if ($request->hasFile('profile')) {
    //         $users->deleteImage(); //menghapus image sebelum di update melalui method deleteImage di model
    //         $image = $request->file('profile');
    //         $name = rand(1000, 9999) . $image->getClientOriginalName();
    //         $image->move('images/users/', $name);
    //         $users->profile = 'images/users/' . $name;
    //     }

    //     return response()->json([
    //         "status" => 201,
    //         "messaage" => "succesfully updated Image",
    //     ]);

    // }

    // Mengedit Data
    public function update(Request $request, $id)
    {
        //validasi
        $validated = $request->validate([
            // 'profile' => ['required'],
            'nama_depan' => ['required'],
            'nama_belakang' => ['required'],
            'no_telepon' => ['required', 'string', 'min:12', 'max:14'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'label_alamat' => ['required'],
            'kota_kecamatan' => ['required'],
            'alamat_lengkap' => ['required'],
        ]);

        $users = User::findOrFail($id);

        if ($request->hasFile('profile')) {
            $users->deleteImage(); //menghapus image sebelum di update melalui method deleteImage di model
            $image = $request->file('profile');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/users/', $name);
            $users->profile = 'images/users/' . $name;
        }

        // $users->profile = $request->profile;
        $users->nama_depan = $request->nama_depan;
        $users->nama_belakang = $request->nama_belakang;
        $users->no_telepon = $request->no_telepon;
        // $users->name = $request->name;
        $users->email = $request->email;
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
        $users = User::select("id", "nama_depan", "nama_belakang", "name")->get();
        return response()->json([
            "data" => $users,
            "status" => 200,
        ]);
    }
}
