<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list product</title>
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
          <a class="nav-link" href="/orders/list"> لیست سفارشات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/catgury/create">ایجاد دسته‌بندی</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/catgury/list">دسته‌بندی</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/post/create">ایجاد پست</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/post/list">پست</a>
        </li>
        </ul>
 
    </div>
  </nav>
<div class="container mt-3">
            <h2>محصولات </h2>         
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>نام محصول</th>
                  <th>قیمت</th>
                </tr>
              </thead>
       @foreach ($products as $products )
       
              <tbody>
              <td>{{ $products->id }}</td>
              <td>{{ $products->name }}</td>
              <td>{{ $products->price }}</td>
              <td><a href="/products/edit/{{ $products->id }}"><button type="submit">ویرایش</button></a></td>
              <td><form action="/products/delete/{{ $products->id }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form></td>
          </tbody>
          @endforeach
      </div>
</body>
</html>