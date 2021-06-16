<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\laporan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = laporan::with('jenis','pelapor')->where('id_pelapor', Auth::User()->id)->where('status','hilang')->get();
        $data2 = laporan::with('jenis','pelapor')->where('id_pelapor', Auth::User()->id)->where('status','temu')->get();
        $data3 = laporan::with('jenis','pelapor')->where('id_pelapor', Auth::User()->id)->where('status','ditemukan')->get();
        $data4 = laporan::with('jenis','pelapor')->where('id_pelapor', Auth::User()->id)->where('status','dicocokkan')->get();
        return view('home', compact('data','data2','data3','data4'));
    }
}
