<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Berita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <form action="{{ url('update') }}" method="POST">
    {{ @csrf_field() }}
    <h3>Edit Berita</h3>
        <input type="hidden" name="id"  value="{{ $categories->id }}">
    Title: <br>
        <input name="title" type="text"  class="form-control form-controll-sm" value="{{ $categories->title }}"><br>
    Picture:<br>
    <input name="picture" type="file" accept="image/png, image/jpg"  value="{{ $categories->picture }}" ><br>
    content:<br>
    <textarea class="form-control" name="content">{{ $categories->content }}</textarea><br><br>
        <input type="submit" value="Simpan">
    </form>
    </div>      
</body>