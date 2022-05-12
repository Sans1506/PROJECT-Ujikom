<?php

namespace App\Http\Controllers;

use App\Models\Inputdata;
use Illuminate\Http\Request;

class perjalananController extends Controller
{
    public function perjalanan(){
        return view('pages.inputperjalanan');
    }
    public function simpandata(Request $request){
        
        $request->validate([
            'suhu' =>'|required|between:35,38|integer',
            'tanggal'=>'required|before_or_equal:today',
            'jam'=>'required|',
            'lokasi'=>'required|',

        ]);
        $data=[
            'id_user'=>auth()->user()->id,
            'tanggal'=>$request->tanggal,
            'jam'=>$request->jam,
            'lokasi'=>$request->lokasi,
            'suhu'=>$request->suhu
        ];

        // dd($data);
        Inputdata::create($data);
        return redirect('/dashboard')->with('status','Simpan data berhasil!!!');
    }
}