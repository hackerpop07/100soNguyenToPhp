<?php
$number = $_POST["input"];
$count = 1;
for ($i = 2; ; $i++) {
    $flap = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $flap = false;
        }
    }

    if ($count > $number) {
        break;
    }
    if ($flap) {
        $count++;
        echo $i . " ";
    }
}
?>
<!doctype html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="number" placeholder="number" name="input">
    <input type="submit" value="onclick">
</form>

</body>
</html>

