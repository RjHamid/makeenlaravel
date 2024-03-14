<!DOCTYPE html >
<html lang="en" dir="rtl"
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>creat user</title>
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
<h3>ثبت نام </h3>
    <form action="/users/create" method="post">
    @csrf
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">نام :</label>
            <input type="text" class="form-control" id="name" name="FirstName" placeholder="نام  را وارد کنید" >
          </div>
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">نام خانوادگی:</label>
          <input type="text" class="form-control" id="name" name="LastName" placeholder="نام خانوادگی را وارد کنید" >
        </div>
        <div class="mb-3 mt-3">
          <label for="email" class="form-label">ایمیل:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="ایمیل وارد کنید" >
        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">پسوورد:</label>
          <input type="password" class="form-control" id="pwd" name="password" placeholder="پسوورد را وارد کنید">
        </div>
        <div class="form-check mb-3">
        </div>
        <button type="submit" class="btn btn-primary">ثبت نام</button>
      </form>
</body>
</html>
