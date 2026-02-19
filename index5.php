<?php
session_start();
$_SESSION['score'];
$randNumber1 = $_SESSION['randNumber'];
$chosenNumber = $_POST['chosenNumber'];
if ($randNumber1 == $chosenNumber) {
    $_SESSION['score'] += 12;
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
    <h2>наконєцто</h2>
    <p><?= $_SESSION['score']; ?> балів</p>
    <form action="index.php">
        <button type="submit">вернуться</button>
    </form>
</body>

</html>