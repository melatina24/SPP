<?php

namespace App\Http\Controllers\Petugas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Petugas;
use App\Model\User;
class PetugasController extends Controller
{
    public function index()
    {
    	$petugas=Petugas::all();
    	return view('app.Petugas.petugas',['petugas'=>$petugas]);
    }
    public function create(Request $request)
    {
    	$user=new User;
    	$user->hak_akses=$request->hak_akses;
    	$user->username=$request->nama;
    	$user->password=bcrypt('password');
    	$user->remember_token=str_random(20);
    	$user->save();

    	$request->request->add(['user_id'=>$user->id]);
    	$petugas=Petugas::create($request->all());
    	$petugas->save();
    	return redirect('/petugas');
    }
    public function edit($id)
    {
       return view('app.Petugas.edit');
    }

    public function destroy($id)
    {
        Petugas::where('user_id',$id)->delete();
        User::find($id)->delete();
        return redirect('/petugas');
    }
}