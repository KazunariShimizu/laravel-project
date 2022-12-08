<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Book;
class SaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('save.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //
        $this->validate($req,Book::$rules);
        $b = new Book();
        $b->fill($req->except('_token'))->save();
        return redirect('save/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('save.show',[
            'b'=>Book::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('save.edit',[
            'b'=>Book::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        //
        $this->validate($req,Book::$rules);
        $b = Book::findOrFail($id);
        $b->fill($req->except('_token','_method'))->save();
        return redirect('hello/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $b=Book::findOrFail($id);
        $b->delete();
        return redirect('hello/list');
    }
}
