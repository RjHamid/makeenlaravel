<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit product</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
<form action="" method="post">
@csrf
      <div class="mb-3 mt-3">
        <label for="name" class="form-label">اسم محصول :</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="اسم محصول " value="{{ $products->name }}" >
      </div>
      <div class="mb-3 mt-3">
        <label for="name" class="form-label">قیمت :</label>
        <input type="text" class="form-control" id="name" name="price" placeholder="قیمت  را وارد کنید" value="{{ $products->price }}" >
      </div>
      <button type="submit" class="btn btn-primary">ویرایش</button>
    </form>
</body>
</html>