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