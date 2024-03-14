<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list users</title>
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
<div class="container mt-3">
        <h2>کاربران</h2>
     
        <table class="table table-hover">
          <thead>
            <tr>
              <th>نام</th>
              <th>نام خانوادگی</th>
              <th>ایمیل</th>
              <th>پسوورد</th>
              <th>ویرایش,حدف</th>
            </tr>
            </thead>
            @foreach ($users as $users )
          <tbody>
              <td>{{ $users->id }}</td>
              <td>{{ $users->FirstName }}</td>
              <td>{{ $users->LastName }}</td>
              <td>{{ $users->email }}</td>
              <td>{{ $users->password }}</td>
                <td><a href="/users/edit/{{ $users->id }}"><button type="submit">ویرایش</button></a></td>
                <td><form action="/users/delete/{{ $users->id }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form></td>
          </tbody>
        </table>
        @endforeach
      </div>
      
</body>
</html>