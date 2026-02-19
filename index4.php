<?php
session_start();
$randNumber1 = $_SESSION['randNumber'];
$chosenNumber = $_POST['chosenNumber'];
$start5 = $_SESSION['start5'];
$finish5 = $start5 + 4;
if ($randNumber1 == $chosenNumber) {
    $_SESSION['score'] += 25;
    header('location: index5.php');
}
if ($randNumber1 > $chosenNumber) {
    $start5 = $chosenNumber + 1;
} else {
    $finish5 = $chosenNumber - 1;
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
    <h2>loh</h2>
    <h3>вгадай число</h3>
    <form action="index5.php" method="post">
        <select name="chosenNumber" id="">
            <?php
            for ($a = $start5; $a <= $finish5; $a++) {
                echo "<option value=" . $a . ">" . $a . "</option>";
            }
            ?>
        </select>
        <button type="submit">угадать</button>
    </form>

    <form action="index.php">
        <button type="submit">вернуться</button>
    </form>
</body>

</html>