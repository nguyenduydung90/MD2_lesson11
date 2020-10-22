<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <textarea name="array"></textarea>
    <button type="submit">Run</button>

</form>
</body>
</html>

<?php

$listViettel = [];
$listVina = [];
$listMobi = [];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $arr = $_REQUEST['array'];
    $newArr = explode(",", $arr);

    $viettel = ['086', '096', '097', '098', '032', '033', '034', '035', '036', '037', '038', '039'];
    $vina = ['088', '091', '094', '083', '084', '085', '081', '082'];
    $mobi = ['089', '090', '093', '070', '079', '077', '076', '078'];

    for ($i = 0; $i < count($newArr); $i++) {
        $num = substr($newArr[$i], 0, 3);
        if (in_array($num, $viettel)){
        array_push($listViettel, $newArr[$i]);

    } else
        if (in_array($num, $vina)) {
            array_push($listVina, $newArr[$i]);

        } else if (in_array($num, $mobi)) {
            array_push($listMobi, $newArr[$i]);
        }


    }
}

$viettel1 = implode(",", $listViettel);
$vina1 = implode(",", $listVina);
$mobi1 = implode(",", $listMobi);
echo "Các số thuộc Viettel: " . $viettel1 . "<br>";
echo "Các số thuộc Vina: " . $vina1 . "<br>";
echo "Các số thuộc Mobile: " . $mobi1 . "<br>";



