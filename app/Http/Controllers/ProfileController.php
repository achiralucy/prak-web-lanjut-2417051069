<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
       public function profile($Nama = "", $NPM = "", $Kelas = "")
    {
        $data = [
            'Nama' => $Nama,
            'NPM' => $NPM,
            'Kelas' => $Kelas
        ];
        return view('profile', $data);
    }
}
