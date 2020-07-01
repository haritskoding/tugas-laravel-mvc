<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function form(){
        return view('form');
    }

    public function signUp(){
        return view('signup');
    }

    public function signUp_post(Request $request){
        // dd($request->all());
        $f_nama = $request["f_name"];
        $l_nama = $request["l_name"];
        // $alamat = $request["alamat"];
        return "<h1>Selamat Datang $f_nama $l_nama</h1><h2>Terimakasih sudah bergabung di sanberbook. Social media kita bersama.</h2>";
    }


    public function sapa(Request $request){
       // var_dump($request);
       // dd($request["alamat"]);
       dd($request["alamat"]);
        return "halo";
    }


    public function sapa_post(Request $request){
        // dd($request->all());
        $nama = $request["nama"];
        $alamat = $request["alamat"];
        return "<h1>Selamat Datang $nama </h1><h2>Terimakasih sudah bergabung di sanberbook. Social media kita bersama.</h2>";
    }
}
