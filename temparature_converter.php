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

        <h1>Temparature converter</h1>
        <form method="POST" action="">
            <input type="number" name="temperature" placeholder="Enter the temperature" required><br>
            <br>
            <button type="submit">Submit</button>
        </form>
        <br>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST["temperature"])) {
                $celsius = $_POST["temperature"];
                $fahrenheit = ($celsius * 9 / 5) + 32;
                echo $celsius . " degrees Celsius is " . $fahrenheit . " degrees Fahrenheit.";
            }
        }
        ?>
    </div>
</body>

</html>