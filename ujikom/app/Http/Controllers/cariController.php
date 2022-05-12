<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class cariController extends Controller
{
    // public function cari(Request $request) {
    //     if (!empty($request->input('lokasi'))&& empty($request->input('suhu'))&& empty($request->input('tanggal'))&& empty($request->input('jam'))){
    //         $cari=$request->lokasi;
    //         $data = User::join('inputdatas', 'inputdatas.id_user', '=', 'users.id')
    //         ->where(function ($query) use($cari) {
    //             $query->where('users.name', auth()->user()->name)
    //                 ->where('inputdatas.lokasi',$cari);
    //         })->paginate(5);
    //         if ($data) {
    //             return view('pages.dashboard',['data'=>$data])->with('alert','Data di temukan');
    //         }else{
    //             abort(404);
    //         }
    //     }elseif(empty($request->input('kota'))&& !empty($request->input('suhu'))&& empty($request->input('tanggal'))&& empty($request->input('jam'))){
    //         $cari=$request->suhu;
    //         $data = User::join('inputdatas', 'inputdatas.id_user', '=', 'users.id')
    //         ->where(function ($query) use($cari) {
    //             $query->where('users.name', auth()->user()->name)
    //                 ->where('inputdatas.suhu',$cari);
    //         })->paginate(5);
    //         if ($data) {
    //             return view('pages.dashboard',['data'=>$data])->with('alert','Data di temukan');
    //         }else{
    //             abort(404);
    //         }
    //     }elseif(empty($request->input('kota'))&& empty($request->input('suhu'))&& !empty($request->input('tanggal'))&& empty($request->input('jam'))){
    //         $cari=$request->tanggal;
    //         $data = User::join('inputdatas', 'inputdatas.id_user', '=', 'users.id')
    //         ->where(function ($query) use($cari) {
    //             $query->where('users.name', auth()->user()->name)
    //                 ->where('inputdatas.tanggal',$cari);
    //         })->paginate(5);
    //         if ($data) {
    //             return view('pages.dashboard',['data'=>$data])->with('alert','Data di temukan');
    //         }else{
    //             abort(404);
    //         }
    //     }elseif(empty($request->input('kota'))&& empty($request->input('suhu'))&& empty($request->input('tanggal'))&& !empty($request->input('jam'))){
    //         $cari=$request->jam;
    //         $data = User::join('inputdatas', 'inputdatas.id_user', '=', 'users.id')
    //         ->where(function ($query) use($cari) {
    //             $query->where('users.name', auth()->user()->name)
    //                 ->where('inputdatas.jam',$cari);
    //         })->paginate(5);
    //         if ($data) {
    //             return view('pages.dashboard',['data'=>$data])->with('alert','Data di temukan');
    //         }else{
    //             return redirect('/dashboard')->with('alert', 'data tidak di temukan');
    //         }
    //     }else {
    //         $data = DB::table("inputdatas")
    //         ->join('users', 'users.id', '=', 'inputdatas.id_user')
    //         ->select('inputdatas.tanggal','inputdatas.jam','inputdatas.lokasi', 'inputdatas.suhu')
    //         ->where('users.name', '=',auth()->user()->name)
    //         ->paginate(5);
    //         return view('pages.dashboard',['data'=>$data]);
    //     }
    // }
    public function cari(Request $request)
    {
        $input = '';
        $keyword = '';

        if ($request->input("jam")) {
            $input = 'jam';
            $keyword = $request->jam;
        } elseif ($request->input("lokasi")) {
            $input = 'lokasi';
            $keyword = $request->lokasi;
        } elseif ($request->input("tanggal")) {
            $input = 'tanggal';
            $keyword = $request->tanggal;
        } elseif ($request->input("suhu")) {
            $input = 'suhu';
            $keyword = $request->suhu;
        } else {
            $input = '';
            $keyword = '';
        }

        if ($input && $keyword) {
            $data = User::join('inputdatas', 'inputdatas.id_user', '=', 'users.id')
                ->where(
                    function ($query) use ($keyword, $input) {
                        $query->where('users.name', auth()->user()->name)
                            ->where('inputdatas.' . $input, 'LIKE', '%' . $keyword . '%');
                    }
                )->paginate(5)->withQueryString();

            return view('pages.dashboard', ['data' => $data]);
        } else {
            return view('pages.dashboard');
        }
    }
}