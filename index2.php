<?php
session_start();
$randNumber = rand(1, 100);
$_SESSION['randNumber'] = $randNumber;
$range = explode('-', $_POST['number']);
if ($range[0] <= $randNumber && $range[1] >= $randNumber) {
    echo 'jh';
} else {
    echo '<h2>loh</h2>';
}
if (intval($randNumber / 10) * 10 == $randNumber) { //провіряє нолік в кінці
    $start = intval($randNumber / 10) * 10 - 9;
    $finish = intval($randNumber / 10) * 10;
} else { //нема ноліка в кінці
    $start = intval($randNumber / 10) * 10 + 1;
    $finish = (intval($randNumber / 10) + 1) * 10;
}
var_dump($randNumber);
$_SESSION['start'] = $start;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index3.php" method="post" id="numb">
        <select name="number">
            <?php
            for ($a = $start; $a <= $finish; $a++) {
                echo "<option value=" . $a . ">" . $a . "</option>";
            }
            ?>
        </select>
        <button type="submit">asdfgh</button>
    </form>
</body>

</html>