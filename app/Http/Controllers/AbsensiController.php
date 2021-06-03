<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Absensi;
use App\User;

class AbsensiController extends Controller
{
    /**
     * Mensubmit absensi
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submit(Request $request)
    {
        // Validasi
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|min:4',
            'password' => 'required|string|min:4',
            'instansi' => 'required|max:255',
            'jurusan' => 'required|max:255',
            'kelas' => 'required|max:255',
        ], validation_messages());
        
        // Mengecek jika ada error
        if($validator->fails()){
            // Kembali ke halaman sebelumnya dan menampilkan pesan error
            return redirect()->back()->withErrors($validator->errors())->withInput($request->only([
                'username',
                'instansi',
                'jurusan',
                'kelas',
            ]));
        }
        // Jika tidak ada error
        else{
            // Cek username dan password
            $check = false;
            $user = User::where('username','=',$request->username)->orWhere('email','=',$request->username)->first();
            if($user){
                $check = Hash::check($request->password, $user->password);
            }
            
            if($check){
                // Simpan absensi
                $absensi = new Absensi;
                $absensi->id_user = $user->id_user;
                $absensi->instansi = $request->instansi;
                $absensi->jurusan = $request->jurusan;
                $absensi->kelas = $request->kelas;
                $absensi->absensi_at = date('Y-m-d H:i:s');
                $absensi->save();

                // Redirect
                return redirect('/absensi')->with(['message' => 'Berhasil melakukan absensi.']);
            }
            else
                return redirect('/absensi')->with(['message' => 'Username dan password tidak cocok.']);

        }
    }
}
