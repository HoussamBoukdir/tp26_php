<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prepa3.php" method="post">
        <label for="">1st number: </label>
        <input type="text" name="x" id=""> <br>
        <label for="">2st number: </label>
        <input type="text" name="y" id=""> <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
$x = $_POST['x'];
$y = $_POST['y'];
$total = null;
//$total = round($x);
//$total = abs($x);
//$total = floor($x);
//$total = ceil($x);
//$total = pow($x, $y);
$total = sqrt($x);
echo $total
?>