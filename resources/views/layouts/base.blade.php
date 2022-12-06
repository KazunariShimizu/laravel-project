<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset = "UTF-8" />
        <!-- a.titleの置き場所 -->
        <title>@yleld('title')</title>
        <!-- Bootstrapのインポート -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <img src="https://wings.msn.to/image/wings.jpg" title="ロゴ" />
        <hr />
        <!-- b.mainコンテンツの置き場所-->
        @section('main')
        <p>既定のコンテンツです。</p>
        @show
        <hr />
        <p>Copyright(c) 1998-2022,WINGS Project. All Right Reserved.</p>
    </body>
</html>