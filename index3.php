<?php
session_start();
$randNumber1 = $_SESSION['randNumber'];
$start10 = $_SESSION['start10'];
$middle = $start10 + 5;
var_dump($randNumber1);
if ($randNumber1 >= $middle) {
    $start = ($start10 + 5);
    $finish = ($start10 + 9);
} else {
    $start = $start10;
    $finish = ($start10 + 4);
}
$_SESSION['start5'] = $start;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>loh</h2>
    <form action="index4.php" method="post">
        <select name="chosenNumber" id="">
            <?php
            for ($a = $start; $a <= $finish; $a++) {
                echo "<option value=" . $a . ">" . $a . "</option>";
            }
            ?>
        </select>
        <button type="submit">zxcvbn</button>
    </form>
</body>

</html>