<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit user</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
<h3>ادیت </h3>
    <form action="" method="post">
    @csrf
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">نام :</label>
            <input type="text" class="form-control" id="name" name="FirstName" placeholder="نام  را وارد کنید" value="{{ $users->FirstName }}" >
          </div>
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">نام خانوادگی:</label>
          <input type="text" class="form-control" id="name" name="LastName"placeholder="نام خانوادگی را وارد کنید" value="{{ $users->LastName }}" >
        </div>
        <div class="mb-3 mt-3">
          <label for="email" class="form-label">ایمیل:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="ایمیل وارد کنید" value="{{ $users->email }}" >
        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">پسوورد:</label>
          <input type="password" class="form-control" id="pwd" name="password" placeholder="پسوورد را وارد کنید" value="{{ $users->password }}">
        </div>
        <div class="form-check mb-3">
        </div>
        <button type="submit" class="btn btn-primary"> ویرایش</button>
      </form>
</body>
</html>