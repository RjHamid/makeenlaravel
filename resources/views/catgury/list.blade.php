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
          <a class="nav-link" href="/post/create">پست</a>
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
<div class="container mt-3">
        <h2>مقالات</h2>         
        <table class="table table-hover">
          <thead>
            <tr>
              <th>مقالات</th>
             
            </tr>
          </thead>
          @foreach ($catgury as $catgury )
          <tbody>   
            <td>{{ $catgury->id }}</td>
            <td>{{ $catgury->Write }}</td>
            <td>{{ $catgury->Article }}</td>
            <td>{{ $catgury->Descr }}</td>
            <td> <a href="/catgury/edit/{{ $catgury->id }}"><button type="submit">ویرایش</button></a></td>
            <td><form action="/catgury/delete/{{ $catgury->id }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form></td>
        </tbody>
        @endforeach
</body>
</html>