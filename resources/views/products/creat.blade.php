<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creat product</title>
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
        </ul>
    </div>
  </nav>
<form action="/products/create" method="post">
  @csrf
      <div class="mb-3 mt-3">
        <label for="name" class="form-label">اسم محصول :</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="اسم محصول ">
      </div>
      <div class="mb-3 mt-3">
        <label for="name" class="form-label">قیمت :</label>
        <input type="number" class="form-control" id="name" name="price" placeholder="قیمت  را وارد کنید">
      </div>
      <button type="submit" class="btn btn-primary">ارسال</button>
    </form>
</body>
</html>