<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\Jenis;

class BarangController extends Controller
{
    public function index(){
        $data=Barang::with('jenis')->get();
        return view('barang.index',['data'=>$data]);
    }
    public function detail($id){
            $data = DB::table('barang')
                    ->join('jenis', 'jenis.id_jenis', '=', 'barang.id_jenis')
                    ->where('barang.id_jenis', $id)->get();
                    
    
            //tampilkan view barang dan kirim datanya ke view tersebut
            return view('barang.detail')->with('data', $data);
    }
    public function create()
    {
        $jenis=Jenis::all();
        return view('barang.create',compact('jenis'));
    }
    public function store(Request $request)
    {
            DB::table('barang')->insert([
            'barang_id' => $request->id_barang,
            'id_jenis' => $request->id_jenis,
            'nama_barang' => $request->nama,
            'harga_barang' => $request->harga,
            'stok' => $request->stok
            ]);
            DB::table('jenis')->insert([
                'id_jenis' => $request->id_jenis,
                'nama_jenis'=> $request->nama_jenis
            ]);
            return redirect('/barang');
    }
        public function edit($id)
    {
	    $data = DB::table('barang')
                    ->join('jenis', 'jenis.id_jenis', '=', 'barang.id_jenis')
                    ->where('barang.id_jenis', $id)->get();

	    return view('barang.edit',['data' => $data]);
    }
    public function update(Request $request)
    {
	DB::table('barang')->where('id_jenis',$request->id_jenis)->update([
		'barang_id' => $request->id_barang,
        'id_jenis' => $request->id_jenis,
        'nama_barang' => $request->nama,
        'harga_barang' => $request->harga,
        'stok' => $request->stok
	]);
    DB::table('jenis')->where('id_jenis',$request->id_jenis)->update([
        'id_jenis' => $request->id_jenis,
        'nama_jenis' => $request->nama_jenis
	]);
	return redirect('/barang');
    }

    public function destroy($id)
    {
	DB::table('barang')->where('id_jenis',$id)->delete();
	DB::table('jenis')->where('id_jenis',$id)->delete();
	return redirect('/barang');
    }
}
