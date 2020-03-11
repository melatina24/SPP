<?php

namespace App\Http\Controllers\Jurusan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\jurusan;
class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan=jurusan::All();
        // dd($jurusan);
        return view('app.Jurusan.jurusan',['jurusan'=>$jurusan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       jurusan::create($request->all());
       return redirect('/jurusan');
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
        $data=Jurusan::find($id);
        return view('app.Jurusan.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate(
            $request,[
                'nama'=>'required',
                'singkatan'=>'required']);
        $jurusan =Jurusan::find($request->id);
        $jurusan->nama=$request->nama;
        $jurusan->singkatan=$request->singkatan;
        $jurusan->save();
        return redirect('/jurusan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan=jurusan::find($id);
        $jurusan->delete();
        return redirect('/jurusan');
    }
}
