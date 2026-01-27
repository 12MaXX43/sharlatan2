<?php
$randNumber = rand(1, 100);
$range = explode('-', $_POST['number']);
if ($range[0] <= $randNumber && $range[1] >= $randNumber) {
    echo 'jh';
} else {
    echo 'loh';
}
if (intval($randNumber / 10) * 10 == $randNumber) { //провіряє нолік в кінці
    $start = intval($randNumber / 10) * 10 - 9;
    $finish = intval($randNumber / 10) * 10;
} else { //нема ноліка в кінці
    $start = intval($randNumber / 10) * 10 + 1;
    $finish = (intval($randNumber / 10) + 1) * 10;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" id="numb">
        <select name="number">
            <?php
            for ($a = 1; $a <= 10; $a++) {
                echo "<option value=" . $a . ">" . $a . "</option>";
            }
            ?>
        </select>
    </form>
</body>

</html>