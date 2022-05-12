<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\perjalanan;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function dashboard (){
        return view ("pages.dashboard");
    }
    public function index(){
        $data = DB::table('inputdatas')
            ->join('users', 'users.id', '=', 'inputdatas.id_user')
            ->select('inputdatas.tanggal','inputdatas.jam','inputdatas.lokasi','inputdatas.suhu')
            ->where('users.name','=',auth()->user()->name)
            ->paginate(5)
            ->withQueryString();

        return view ('pages.dashboard',['data'=>$data]);
    }
    
    public function urutkanPerjalanan(Request $request)
    {
        $orderBy = $request->orderBy;
        $sortBy = $request->sortBy;

        if (auth()->user()) {
            $data = DB::table('inputdatas')
                ->join('users', 'users.id', '=', 'inputdatas.id_user')
                ->select('inputdatas.tanggal', 'inputdatas.lokasi', 'inputdatas.suhu', 'inputdatas.jam')
                ->where('users.id', '=', auth()->user()->id)
                ->orderBy('inputdatas.' . $orderBy, $sortBy)
                ->paginate(5)
                ->withQueryString();

            return view('pages.dashboard', ['data' => $data]);
        }

        return view('pages.dashboard');
    }
}