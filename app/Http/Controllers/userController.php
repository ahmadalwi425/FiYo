<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class userController extends Controller
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

    public function filling(Request $request){
            $this->validate($request, [
                'NIK'   => 'required',
                'alamat'     => 'required',
                'foto'   => 'required|image|mimes:png,jpg,jpeg',
                'identitas' => 'required|image|mimes:png,jpg,jpeg'
            ]);
            $image = $request->file('foto');
            // $image->storeAs('public/storage/img', Carbon::now()->toDateTimeString());
            $user = User::with('level')->where('id', Auth::User()->id)->first();
            if($user->foto && file_exists(storage_path('app/public/' , $user->foto))) {
                Storage::delete('public/' . $user->foto);
            }
            $image_name1 = $request->file('foto')->store('foto','public');
            $image2 = $request->file('identitas');
            // $image->storeAs('public/storage/img', Carbon::now()->toDateTimeString());
            if($user->identitas && file_exists(storage_path('app/public/' , $user->identitas))) {
                Storage::delete('public/' . $user->identitas);
            }
            $image_name2 = $request->file('identitas')->store('img','public');
            $user->NIK = $request->get('NIK');
            $user->alamat = $request->get('alamat');
            $user->foto = $image_name1;
            $user->identitas = $image_name2;
            $user->status = "filled";
            $user->save();
            return redirect('home');
        
    }
}
