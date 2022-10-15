<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaksi;
use App\Models\Username;
use App\Models\Barang;
use App\Models\Detail_trx;

class TransaksiController extends Controller
{
    public function index(){
        $data = DB::table('transaksi')
        ->join('username', 'username.id_user', '=', 'transaksi.id_user')
        ->get();
        return view('transaksi.index')->with('data', $data);
    }
    public function detail($id){
        $data = DB::table('transaksi')
                ->join('detail_trx', 'detail_trx.id_transaksi', '=', 'transaksi.id_transaksi')
                ->join('username', 'username.id_user', '=', 'transaksi.id_user')
                ->join('barang', 'barang.barang_id', '=', 'transaksi.barang_id')
                ->where('transaksi.id_transaksi', $id)->get();
                

        //tampilkan view barang dan kirim datanya ke view tersebut
        return view('transaksi.detail')->with('data', $data);
    }
    public function create()
    {
        $barang=Barang::all();
        $username=Username::all();
        return view('transaksi.create',compact('barang','username'));
    }
    public function store(Request $request)
    {
        DB::table('transaksi')->insert([
            'barang_id' => $request->id_barang,
            'id_transaksi' => $request->id_transaksi,
            'tgl_trx' => $request->tgl_trx,
            'id_user' => $request->id_user,
            'harga' => $request->harga,
            'total_bayar' => $request->total_bayar,
            'bayar' => $request->bayar
        ]);
        DB::table('detail_trx')->insert([
            'barang_id' => $request->id_barang,
            'id_dt' => $request->id_dt,
            'id_transaksi' => $request->id_transaksi,
            'jml' => $request->jml,
            'total' => $request->total
        ]);
            return redirect('/transaksi');
    }
        public function edit($id)
    {
	    $data = DB::table('transaksi')
                    ->join('detail_trx', 'detail_trx.id_transaksi', '=', 'transaksi.id_transaksi')
                    ->join('barang', 'barang.barang_id', '=', 'transaksi.barang_id')
                    ->join('username', 'username.id_user', '=', 'transaksi.id_user')
                    ->where('detail_trx.id_transaksi', $id)->get();
                    $barang=Barang::all();
                    $username=Username::all();
	    return view('transaksi.edit',['data' => $data], compact('barang','username'));
    }
    public function update(Request $request)
    {
        DB::table('transaksi')->where('id_transaksi',$request->id_transaksi)->update([
            'barang_id' => $request->id_barang,
            'tgl_trx' => $request->tgl_trx,
            'id_user' => $request->id_user,
            'harga' => $request->harga,
            'total_bayar' => $request->total_bayar,
            'bayar' => $request->bayar
	    ]);
        DB::table('detail_trx')->where('id_transaksi',$request->id_transaksi)->update([
            'barang_id' => $request->id_barang,
            'id_dt' => $request->id_dt,
            'id_transaksi' => $request->id_transaksi,
            'jml' => $request->jml,
            'total' => $request->total
        ]);
	return redirect('/transaksi');
    }

    public function destroy($id)
    {
	DB::table('transaksi')->where('id_transaksi',$id)->delete();
    DB::table('detail_trx')->where('id_transaksi',$id)->delete();
	return redirect('/transaksi');
    }

}
