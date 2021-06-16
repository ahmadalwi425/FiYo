<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cocok;
use App\Models\laporan;

class cocokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cocokpage()
    {
        $data = laporan::with('jenis','pelapor')->where('status','hilang')->get();
        $data2 = laporan::with('jenis','pelapor')->where('status','temu')->get();
        return view('cocok', compact('data','data2'));
    }

    public function list()
    {
        $data = laporan::with('jenis','pelapor')->where('status','hilang')->get();
        $data2 = laporan::with('jenis','pelapor')->where('status','temu')->get();
        return view('listlaporan', compact('data','data2'));
    }

    public function listhilang()
    {
        $data = laporan::with('jenis','pelapor')->where('status','hilang')->get();
        return view('listhilang', compact('data'));
    }
    public function listtemu()
    {
        $data = laporan::with('jenis','pelapor')->where('status','temu')->get();
        return view('listtemu', compact('data'));
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
    public function cocok(Request $request)
    {
        $data = cocok::create([
            'id_kehilangan' => $request->get('id_kehilangan'),
            'id_ketemu' => $request->get('id_ketemu'),
            'status' => "paired",
        ]);
        $lap1 = laporan::where('id',$request->get('id_kehilangan'))->first();
        $lap1->status = "ditemukan";
        $lap1->save();

        $lap2 = laporan::where('id',$request->get('id_ketemu'))->first();
        $lap2->status = "dicocokkan";
        $lap2->save();

        return redirect('cocok');
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
