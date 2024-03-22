<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit catgury</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
<form action="/catgury/edit/{{ $catgury->id }}" method="post">
  @csrf
    <label for="category_name">نام دسته‌بندی:</label><br>
    <input type="text" id="category_name" name="category_name" value="{{ $catgury->category_name }}"><br><br>

    <label for="description">توضیحات:</label><br>
    <textarea id="description" name="description">{{ $catgury->description }}</textarea><br><br>

    <input type="submit" value="افزودن دسته‌بندی">
</form>
</body>
</html>