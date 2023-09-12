<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison</title>
    <style>
    <?php include 'style.css'?>
    </style>
</head>

<body>


    <div class="container">

        <h1>Comparison Tool</h1>
        <form method="POST" action="">
            <input type="number" name="num1" placeholder="Enter the First number" required><br>
            <input type="number" name="num2" placeholder="Enter the Last namber" required><br>

            <br>
            <button type="submit">Submit</button>
        </form>
        <br>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $result = ($num1 > $num2) ? $num1 : $num2;
            echo "<p>The larger number is: $result</p>";
        }
        ?>
    </div>
</body>

</html>