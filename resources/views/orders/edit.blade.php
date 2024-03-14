<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit orders</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
<form action="" method="post">
     @csrf
    <div class="mb-3 mt-3">
          <label for="name" class="form-label"> ویرایش سفارشات:</label>
          <input type="text" class="form-control" id="name" name="orders_table" placeholder="نام  را وارد کنید" value="{{ $orders->orders_table }}" >
        </div>
      <div class="mb-3 mt-3">
        <button type="submit" class="btn btn-primary">ثبت نام</button>
      </form>
</body>
</html>