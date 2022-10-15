<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Detail_trx;

class DetailTrxController extends Controller
{
    public function index(){
        $data=Detail_trx::get();
        return view('detail_trx.index',['data'=>$data]);
    }
    public function create()
    {
        return view('detail_trx.create');
    }
    public function store(Request $request)
    {
            DB::table('detail_trx')->insert([
            'id_dt' => $request->id_dt,
            'id_transaksi' => $request->id_transaksi,
            'id_barang' => $request->id_barang,
            'jml' => $request->jml,
            'total' => $request->total
            ]);
            return redirect('/detailtrx');
    }
        public function edit($id)
    {
	    $data = DB::table('detail_trx')->where('id',$id)->get();
	    return view('detail_trx.edit',['data' => $data]);
    }
    public function update(Request $request)
    {
	DB::table('detail_trx')->where('id',$request->id)->update([
        'id_dt' => $request->id_dt,
        'id_transaksi' => $request->id_transaksi,
        'id_barang' => $request->id_barang,
        'jml' => $request->jml,
        'total' => $request->total
	]);
	return redirect('/detailtrx');
    }

    public function destroy($id)
    {
	DB::table('detail_trx')->where('id',$id)->delete();
	return redirect('/detailtrx');
    }

}
