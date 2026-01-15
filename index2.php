<?php
    $randNumber = rand(1, 100);
    $range = explode( '-', $_POST['number']);
    var_dump($randNumber, $range[1] );
    if($range[0] <= $randNumber && $range[1] >= $randNumber){
        echo 'jh';
    }else{
        echo 'loh';
    }
    // $start
    if(intval($randNumber / 10) * 10 == $randNumber){
        $finish = intval($randNumber / 10) * 10;
    }else{
        $finish = (intval($randNumber / 10) + 1) * 10;
    }
    var_dump($finish);
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