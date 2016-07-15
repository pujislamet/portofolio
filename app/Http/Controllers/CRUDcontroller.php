<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

use app\Http\Controllers\Controller;

use Input;
use DB;
use Redirect;
use Session;
use View;

class CRUDcontroller extends Controller
{
    public function addData(){
        $data = array(
            'nama' => Input::get('nama'),
            'alamat' => Input::get('alamat'),
            'no_tel' => Input::get('no_tel')
        );
        DB::table('identitas')->insert($data);
        return Redirect::to('/readData')->with('message', 'berhasil menambah data.');
    }
    public function readData(){
        $data = DB::table('identitas')->get();
        return View::make('read')->with('identitas',$data);
    }
    public function hapusData($id){
        DB::table('identitas')->where('id', '=', $id)->delete();
        return Redirect::to('/readData')->with('message', 'data berhasil dihapus.');
    }
    public function editData(){
        $id = Input::get('id');
        $data = DB::table('identitas')->where('id', '=', $id)->get();
        return View::make('form_edit')->with('identitas',$data);
    }
    public function editPost(){
        $data = array(
            'nama' => Input::get('nama'),
            'alamat' => Input::get('alamat'),
            'no_tel' => Input::get('no_tel')
        );
        $id = Input::get('id');
        DB::table('identitas')->where('id', '=', $id)->update($data);
        return Redirect::to('/readData')->with('message', 'data berhasil diubah.');
    }
}