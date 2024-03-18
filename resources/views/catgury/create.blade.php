<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/users/create">صفحه اصلی</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/users/list">کاربران</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="/products/create">محصولات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/products/list">لیست محصولات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/orders/create">سفارشات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/orders/list">دسته بندی</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/post/list">پست</a>
        </li>
        </ul>
        <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="/catgury/list" role="button" data-bs-toggle="dropdown">مقالات</a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="/catgury/create">ایجاد</a></li>
  </ul>
</li>

    </div>
  </nav>
    <form action="/catgury/create" method="post">
      @csrf
<input type="text" class="form-control" placeholder="مقالات" name="Write">
<select class="form-select" name="Article">
    <option value="pezashki">پزشکی</option>
    <option value="amozeshi"> آموزشی</option>
    <option value="php">php</option>
</select>
<textarea class="form-control" rows="5" id="comment" name="Descr"></textarea>
<input type="submit" value="send">
</form>
</body>
</html>