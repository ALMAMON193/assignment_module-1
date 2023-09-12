<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include 'style.css' ?>
    </style>

</head>

<body>
    <div class="container">
        <h2>Weather report generate</h2>
        <form method="POST" action="">
            <input type="number" name="temp" placeholder="Enter the temparature" required><br>
            <br>
            <button type="submit">Submit</button>
        </form>
        <br>
        <div>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                if (isset($_POST["temp"]) && is_numeric($_POST["temp"])) {
                    $temp = floatval($_POST["temp"]);

                    if ($temp >= 30) {
                        echo "HOT";
                    } elseif ($temp >= 20 && $temp < 30) {
                        echo "WARM";
                    } elseif ($temp >= 10 && $temp < 20) {
                        echo "COOL";
                    } else {
                        echo "COLD";
                    }
                } else {
                    echo "Invalid input. Please enter a valid number.";
                }
            }
            ?>

        </div>
    </div>
</body>

</html>