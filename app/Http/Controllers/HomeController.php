<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = DB::select('select * from olahraga');
        return view('jenis',['title'=>"Jenis","data_jenis"=>$users]);
    }
    public function add_jenis(Request $request)
    {
        DB::insert('INSERT INTO olahraga (nama_olahraga,jenis_olahraga,jumlah_pemain) VALUES(?,?,?)',[$request->nama_olahraga,$request->jenis_olahraga,$request->jumlah_pemain]);
        return redirect(route('jenis'));
    }
    public function delete_jenis(Request $request){
        DB::delete('DELETE FROM olahraga WHERE id=?',[$request->del]);
        return redirect(route('jenis'));
    }
    public function edit_jenis(Request $request){
        DB::update('UPDATE olahraga SET nama_olahraga=?,jenis_olahraga=?,jumlah_pemain=? WHERE id=?' ,[$request->nama_olahraga,$request->jenis_olahraga,$request->jumlah_pemain,$request->del]);
        return redirect(route('jenis'));
    }
    public function atlet()
    {
        $users = DB::select('select *,atlet.id AS id from atlet JOIN olahraga ON atlet.id_jenis = olahraga.id');
        $data = DB::select('select * from olahraga');
        return view('atlet',['title'=>"Atlet","data_jenis"=>$users,"data"=>$data]);
    }
    public function add_atlet(Request $request)
    {
        DB::insert('INSERT INTO atlet (nama,id_jenis,jenis_kelamin,alamat) VALUES(?,?,?,?)',[$request->nama_atlet,$request->id_jenis,$request->jenis_kelamis,$request->alamat]);
        return redirect(route('atlet'));
    }
    public function delete_atlet(Request $request){
        DB::delete('DELETE FROM atlet WHERE id=?',[$request->del]);
        return redirect(route('atlet'));
    }
    public function edit_atlet(Request $request){
        DB::update('UPDATE atlet SET nama=?,id_jenis=?,jenis_kelamin=?,alamat=? WHERE id=?' ,[$request->nama_atlet,$request->id_jenis,$request->jenis_kelamin,$request->alamat,$request->del]);
        print_r($request->del);
        return redirect(route('atlet'));
    }
}
