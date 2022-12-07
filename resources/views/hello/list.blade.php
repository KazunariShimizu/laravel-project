<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>速習Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <table class="table">
      <tr>
        <th>No</th>
        <th>書名</th>
        <th>価格</th>
        <th>出版社</th>
        <th>刊行日</th>
        <th></th>
      </tr>
      @foreach($records as $id => $record)
      <tr>
        <td>{{ $id +1 }}</td>
        <td>{{ $record->title }}</td>
        <td>{{ $record->price }}</td>
        <td>{{ $record->publisher }}</td>
        <td>{{ $record->published }}</td>
        <td>
          <a href="/save/{{ $record->id }}/edit">編集</a>
          <a href="/save/{{ $record->id }}">削除</a>
        </td>
      </tr>
      @endforeach
    </table>
  </body>
</html>
