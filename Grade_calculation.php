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
            <input type="number" name="number" class="form-control" placeholder="Enter the number" required>
            <button type="submit">Generate</button>
        </form>
        <br>

        <div id="">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $number = $_POST['number'];
                if ($number >= 80) {
                    echo "<h3>Grade: A+</h3>";
                } else if ($number >= 70) {
                    echo "<h3>Grade: A</h3>";
                } else if ($number >= 60) {
                    echo "<h3>Grade: A-</h3>";
                } else if ($number >= 50) {
                    echo "<h3>Grade: B</h3>";
                } else if ($number >= 40) {
                    echo "<h3>Grade: C</h3>";
                } else if ($number >= 33) {
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