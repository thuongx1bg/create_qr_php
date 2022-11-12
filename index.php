


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Khai báo y tế</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <form action="qr.php"  method="POST">

      <label for="fname">Họ và tên</label>
      <input type="text" id="fname" name="name" placeholder="Họ và tên ..">

      <label for="lname">Mã số sinh viên</label>
      <input type="text" id="lname" name="mssv" placeholder="Mã số sinh viên..">

      <label for="lname">Số vacxin Covid đã tiêm</label>
      <input type="text" id="lname" name="number_vacxin" placeholder="Số vacxin Covid đã tiêm ..">

      <input type="submit" value="Submit">

    </form>
  </div>

</body>
</html>