<?php
session_start();
$randNumber1 = $_SESSION['randNumber']; //41
$chosenNumber = $_POST['chosenNumber']; //42
$start5 = $_SESSION['start5']; //41
$finish5 = $start5 + 4; //45
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
    <form action="index5.php" method="post">
        <select name="" id="">
            <?php
            for ($a = $start5; $a <= $finish5; $a++) {
                echo "<option value=" . $a . ">" . $a . "</option>";
            }
            ?>
        </select>
        <button type="submit">zxcvbn</button>
    </form>

    <form action="index.php">
        <button type="submit">asfsdf</button>
    </form> 
</body>

</html>