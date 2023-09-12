<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGPA</title>
    <style>
        <?php include 'style.css' ?>
    </style>
</head>

<body>
    <div class="container">
        <h2>GPA Calculation</h2>
        <form method="POST" action="">
            <input type="number" name="number1" class="form-control" placeholder="Enter the number" required>
            <input type="number" name="number2" class="form-control" placeholder="Enter the number" required>
            <input type="number" name="number3" class="form-control" placeholder="Enter the number" required>
            <button type="submit">Generate</button>
        </form>
        <br>

        <div id="">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $number1 = $_POST['number1'];
                $number2 = $_POST['number2'];
                $number3 = $_POST['number3'];
                $result = ($number1 + $number2 + $number3) / 3;

                if ($result >= 80) {
                    echo "<h3>Grade: A+</h3>";
                } else if ($result >= 70) {
                    echo "<h3>Grade: A</h3>";
                } else if ($result >= 60) {
                    echo "<h3>Grade: A-</h3>";
                } else if ($result >= 50) {
                    echo "<h3>Grade: B</h3>";
                } else if ($result >= 40) {
                    echo "<h3>Grade: C</h3>";
                } else if ($result >= 33) {
                    echo "<h3>Grade: D</h3>";
                } else {
                    echo "<h3>Grade: F</h3>";
                }
            }
            ?>

        </div>
    </div>

</body>

</html>