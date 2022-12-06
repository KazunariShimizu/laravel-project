@extends('layouts.base')
@section('title','共通レイアウトの基本')
@section('main')
<table class="table">
    <tr>
        <th>書名</th>
        <th>価格</th>
        <th>出版社</th>
        <th>刊行日</th>
    </tr>
    @each('subviews.book',$records,'record','subviews.empty')
</table>
@endsection
