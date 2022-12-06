<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class ViewController extends Controller
{
    //
    public function escape()
    {
        return view('view.escape',[
            'msg'=>'<img src ="https://wings.msn.to/image/wings.jpg" title="ロゴ" />
            <p>WINGSへようこそ</p>'
        ]);
    }
    public function if()
    {
        return view('view.if',[
           'random' => random_int(0,100) 
        ]);
    }
    public function master()
    {
        return view('view.master',[
            'msg'=>'こんにちは、世界！',
        ]);
    }
    public function comp()
    {
        $data = [
            'title'=>'こんにちは、世界！'
        ];
        return view('view.comp',$data);
    }
    public function list()
    {
        $data=[
            'records'=>Book::all()
        ];
        return view('view.list',$data);
    }
}
