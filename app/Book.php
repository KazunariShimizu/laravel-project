<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = [ 'isbn','title','price','publisher','published'];
    //a.検証ルールを準備
    public static $rules = [
        'isbn' => 'required',
        'title' => 'required|string|max:20',
        'price' => 'integer|min:0',
        'publisher' => 'required|in:走跳社,テックCode,ジャパンIT,優丸システム,IT Emotion',
        'published' => 'required|date'
    ];
}
