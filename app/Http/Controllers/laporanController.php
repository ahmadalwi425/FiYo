<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\jenis_barang;
use Carbon\Carbon;
use App\Models\laporan;
class laporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function temu()
    {
            $data = jenis_barang::all();
            return view('laporan.temu', compact('data'));
    }

    public function hilang()
    {
        if(Auth::User()->status == "unverified"){
            $data = User::with('level')->find(Auth::User()->id)->first();
            return view('formfill');
        }else{
            $data = jenis_barang::all();
            return view('laporan.hilang', compact('data'));
        }
    }

    public function laporhilang(Request $request)
    {
        $image2 = $request->file('foto');
        $image_name2 = $request->file('foto')->store('hilang','public');
        $data = laporan::create([
            'nama' => $request->get('nama'),
            'id_jenis' => $request->get('id_jenis'),
            'foto' => $image_name2,
            'lokasi' => $request->get('lokasi'),
            'deskripsi' => $request->get('deskripsi'),
            'tanggal_hilang' => $request->get('tanggal_hilang'),
            'tanggal_laporan' => Carbon::now()->toDateString(),
            'status' => "hilang",
            'id_pelapor' => Auth::User()->id,
        ]);
        return redirect('home');
    }

    public function laportemu(Request $request)
    {
        $image2 = $request->file('foto');
        $image_name2 = $request->file('foto')->store('hilang','public');
        $data = laporan::create([
            'nama' => $request->get('nama'),
            'id_jenis' => $request->get('id_jenis'),
            'foto' => $image_name2,
            'lokasi' => $request->get('lokasi'),
            'deskripsi' => $request->get('deskripsi'),
            'tanggal_hilang' => $request->get('tanggal_hilang'),
            'tanggal_laporan' => Carbon::now()->toDateString(),
            'status' => "temu",
            'id_pelapor' => Auth::User()->id,
        ]);
        return redirect('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
