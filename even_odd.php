<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison</title>
    <style>
        <?php include 'style.css' ?>
    </style>
</head>

<body>


    <div class="container">

        <h1>Even or odd number checker</h1>
        <form method="POST" action="">
            <input type="number" name="num1" placeholder="Enter the First number" required><br>
            <br>
            <button type="submit">Submit</button>
        </form>
        <br>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $num1 = $_POST["num1"];
            if ($num1 % 2 == 0) {
                echo   $num1 .  " Even Number";
            } else {
                echo   $num1 .  " Odd Number";
            }
        }
        ?>
    </div>
</body>

</html>