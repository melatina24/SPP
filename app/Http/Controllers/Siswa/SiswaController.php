<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Siswa;
use App\Model\User;
use Yajra\Datatables\Datatables;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa=Siswa::all();
        return view('app.Siswa.siswa',['siswa'=>$siswa]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //validasi
        $this->validate($request,[
            'nama'=>'required',
            'nis'=>'required',
            'nisn'=>'required',
            'no_telp',
            'alamat',
            'jenis_kelamin']);
        //insert data ke user table
        $user =new User;
        $user->hak_akses='siswa';
        $user->username=$request->nisn;
        $user->password=bcrypt('password');
        $user->remember_token=str_random(20);
        $user->save();

        //insert data ke siswa table
        $request->request->add(['user_id'=>$user->id]);
        $siswa=Siswa::create($request->all());
        $siswa->save();
        return redirect('/siswa');

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
        
        Siswa::where('user_id',$id)->delete();
        User::where('id',$id)->delete();
        return redirect('/siswa');

    }
}
