<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máy tính điện tử</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

    $number1 = "";
    $number2 = "";
    $calculator ="";
    if(isset($_POST["id1"]) && isset($_POST["id2"]) && isset($_POST["calculator"])){
        $number1 = $_POST["id1"];
        $number2 = $_POST["id2"];
        $calculator = $_POST["calculator"];
        $check = true;
    }
    // if(is_numeric($number1) && is_numeric($number2))
    //{
        switch ($calculator) {
            case "+":
                $result = $number1 + $number2;
                break;
            case "-":
                $result = $number1 - $number2;
                break;
            case "*":
            case "x":
            case ".":
                $result = $number1 * $number2;
            break;
            case "/":
            case ":":
                $result = $number1 / $number2;
                break;
            case "%":
                $result = $number1 % $number2;
                break;
            default:
                $result = "Phép toán không tồn tại!";
                break;
        }
    // //}   else {
    //     $result = "Không thể tính được đâu nha :3";
    //     $check = false;
    // }
?>

    <div class="content">
        <h1 class="heading">
            Máy tính điện tử
        </h1>
        <form action="" method="post" name="main-form">
            <div class="row">
                <span class="row__heading">Số thứ nhất</span>
                <input type="text" name="id1" class="input__text" value ="<?php echo $number1; ?>">
            </div>

            <div class="row">
                <span class="row__heading">Phép toán</span>
                <input type="text" name="calculator" class="input__text" value ="<?php echo $calculator; ?>">
            </div>

            <div class="row">
                <span class="row__heading">Số thứ hai</span>
                <input type="text" name="id2" class="input__text" value ="<?php echo $number2; ?>" >
            </div>

            <div class="row" class="button__sending">
                <input type="submit" value="Xem kết quả" name="submit" class="input__button">
            </div>

            <div class="row">
                <p class="result">
                    <?php
                        // if ($check == true){
                            if(isset($_POST["id1"]) && isset($_POST["id2"]) && isset($_POST["calculator"])){
                                echo "Kết quả" . " " . $number1 . " " . $calculator . " " . $number2 ." " ."=" . " " . $result;}
                        // //}
                        // else {
                        //     echo $result;
                        // }
                    ?>
                </p>
            </div>
        </form>
    </div>
</body>
</html>