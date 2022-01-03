<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public function index()
    {
        return view('registrasi.index', [
            'title' => 'Halaman Registrasi',
            'active' => 'registrasi'
        ]);
    }

    public function store(Request $request)
    {
        $datavalidasi = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);


        // $datavalidasi['password'] = bcrypt($datavalidasi['password']);
        $datavalidasi['password'] = Hash::make($datavalidasi['password']);
        User::create($datavalidasi);

        $request->session()->flash('success', 'Registrasi berhasil! silahkan masuk');

        return redirect('/login');
    }
}
