<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtrlController extends Controller
{
    //
    public function form(){
        return view('ctrl.form',['result'=>'']);
    }
    public function result(Request $req)
    {
        $name = $req->name;
        return view('ctrl.form',[
            'result'=>'こんにちは、'.$name.'さん！'
        ]);
    }
    public function upload()
    {
        return view('ctrl.upload',['result'=>'']);
    }
    public function uploadfile(Request $req){
        //bファイルが指定されているかを判定
        if(!$req->hasFile('upfile')){
            return 'ファイルを指定してください';
        }
        $file=$req->upfile;
        if(!$file->isValid()){
            return 'アップロードに失敗しました';
        }
        $name = $file->getClientOriginalName();
        $file->storeAs('files',$name);
        return view('ctrl.upload',[
            'result'=>$name.'をアップロードしました。'
        ]);
    }
}
