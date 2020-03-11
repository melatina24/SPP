<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Kelas;
use App\Model\tahunAjaran;
use App\Model\jurusan;
class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas=Kelas::all();
        $tahunAjaran=tahunAjaran::select('id','label')->get();
        $jurusan=jurusan::select('id','singkatan')->get();

        return view('app.kelas.index_kelas',compact('kelas','tahunAjaran','jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
                 // dd($request->all());
        Kelas::create($request->all());
        return redirect('/kelas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        $kelas=Kelas::find($id);
        $jurusan=jurusan::select('id','singkatan')->get();
        $tahunAjaran=tahunAjaran::select('id','label')->get();

        return view('app.kelas.edit',compact('kelas','jurusan','tahunAjaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    // {$this->validate($request,[
    //             'nama'=>'required',
    //             'singkatan'=>'required']);
    //     $jurusan =Jurusan::find($request->id);
    //     $jurusan->nama=$request->nama;
    //     $jurusan->singkatan=$request->singkatan;
    //     $jurusan->save();
    //     return redirect('/jurusan');

{
       $this->validate($request,[
                'nama_kelas'=>'required',
                'jurusan_id'=>'required',
                'thnajaran_id'=>'required']);

       $kelas=kelas::find($request->id);
       $kelas->nama_kelas=$request->nama_kelas;
       $kelas->jurusan_id=$request->jurusan_id;
       $kelas->thnajaran_id=$request->thnajaran_id;
       $kelas->save();
       return redirect('/kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=kelas::find($id);
        $data->delete();
        return redirect('/kelas');
    }
}
