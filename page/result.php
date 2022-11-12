<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả khai báo</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <form >

      <label for="fname">Họ và tên</label>
      <input type="text" id="fname" value=" <?php  echo $_GET['name'] ?>" name="name" placeholder="Họ và tên .." disabled >

      <label for="lname">Mã số sinh viên</label>
      <input type="text" id="lname" name="mssv" value=" echo <?php $_GET['mssv'] ?> " placeholder="Mã số sinh viên.." disabled >

      <label for="lname">Số vacxin Covid đã tiêm</label>
      <input type="text" id="lname" name="number_vacxin" value=" <?php echo $_GET['vacxin'] ?>"  placeholder="Số vacxin Covid đã tiêm .." disabled>

    </form>
  </div>

</body>


</html>