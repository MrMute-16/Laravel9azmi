<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Username;

class UsernameController extends Controller
{
    public function index(){
        $data=Username::get();
        return view('username.index',['data'=>$data]);
    }
    public function create()
    {
        return view('username.create');
    }
    public function store(Request $request)
    {
        DB::table('username')->insert([
            'id_user' => $request->id_user,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
            'akses' => $request->akses
        ]);
            return redirect('/username');
    }
        public function edit($id)
    {
	    $data = DB::table('username')->where('id',$id)->get();
	    return view('username.edit',['data' => $data]);
    }
    public function update(Request $request)
    {
        DB::table('username')->where('id',$request->id)->update([
            'id_user' => $request->id_user,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
            'akses' => $request->akses
	    ]);
	return redirect('/username');
    }

    public function destroy($id)
    {
	DB::table('username')->where('id',$id)->delete();
	return redirect('/username');
    }
}
