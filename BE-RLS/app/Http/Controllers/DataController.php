<?php

namespace App\Http\Controllers;
use App\Data;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DataController extends Controller
{
    //

    public function getData(){
        $datas = Data::orderBy("id","ASC")->get();
        $dat = [];
        foreach($datas as $key => $v){
            $dat[$key]['x'] = $v->x; 
            $dat[$key]['y'] = $v->y; 
            foreach($v->temp()->get() as $v2){
                $dat[$key]['descr'][] = $v2->deskripsi;
            }; 
        }
        // dd($datas[0]->temp());
        // dd($datas->temp()->get());
        return response()->json($dat);
    }
    public function getDataAll(){
        $data = Data::get(['x','y']);
        return response()->json($data);
    }
    public function addData(Request $req){
        $data = new Data();
        $data -> x = $req->x;
        $data -> y = $req->y;
        $data -> save();
        return response()->json(["message" => "sukses"]);
    }
}
