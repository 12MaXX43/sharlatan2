<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>шарлатан2</h1>
    <form action="index2.php" method="post">
        <select name="number">
            <?php
            for ($a = 1,$b = 10; $a <= 100; $a+=10, $b+=10) {
                echo "<option value=" . $a . -$b . ">" . $a . -$b . "</option>";
            }
            ?>
        </select>
        <button type="submit">qwerty</button>
    </form>
</body>
</html>