<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit post</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
    
<form action="/post/edit/{{ $post->id }}" method="post">
     @csrf
  <input type="text" class="form-control" placeholder="مقالات" name="Write" value="{{ $post->Write }}">
  <select class="form-select" name="Article">
    <option value="pezashki" {{ $post->Article == 'pezashki' ? 'selected' : '' }}>پزشکی</option>
    <option value="amozeshi" {{ $post->Article == 'amozeshi' ? 'selected' : '' }}>آموزشی</option>
    <option value="php" {{ $post->Article == 'php' ? 'selected' : '' }}>php</option>
</select>

<textarea class="form-control"  id="comment" name="Descr" >{{ $post->Descr }}</textarea>
<input type="submit" value="send">
      </form>
</body>
</html>