
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR</title>
</head>
<body>
<?php
require_once('phpqrcode/qrlib.php');

$path = 'images/';

$qrcode = $path . time() . ".png";

$data = array(
    'name' => $_POST['name'],
    'mssv' => $_POST['mssv'],
    'vacxin' => $_POST['number_vacxin'],
);
$queryStringData = http_build_query($data) . "\n";

$path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
$path .=$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]);  

$url =  $path.'/result.php?'.$queryStringData;

QRcode::png($url, $qrcode, 'H', 4, 4);

echo "<img src='" . $qrcode . "'>";
      
?>
</body>
</html>

