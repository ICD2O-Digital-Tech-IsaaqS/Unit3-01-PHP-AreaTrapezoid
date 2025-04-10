<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Area of a Trapezoid, with PHP">
        <meta name="keywords" content="Immaculata, ICD2O">
        <meta name="author" content="Isaaq Simon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io (10)/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io (10)/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io (10)/favicon-16x16.png">
        <link rel="manifest" href="./favicon_io (10)/site.webmanifest">
        <link rel="stylesheet" href="./css/style.css">
        <title>Trapezoid Area Calculator</title>
    </head>
    <body>

       <form method="post">
            <h2>Trapezoid Area Calculator</h2>
            <label for="a">Base a:</label>
            <input type="number" name="a" id="a" step="any" required>

            <label for="b">Base b:</label>
            <input type="number" name="b" id="b" step="any" required>

            <label for="h">Height h:</label>
            <input type="number" name="h" id="h" step="any" required>

            <input type="submit" value="Calculate Area">
       </form>

        <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = floatval($_POST["a"]);
            $b = floatval($_POST["b"]);
            $h = floatval($_POST["h"]);

            $area = (($a + $b) / 2) * $h;
          $roundedArea = round($area, 2);

            echo "<p style='text-align:center; font-size: 18px;'>The area of the trapezoid is <strong>$roundedArea</strong> cm square units.</p>";
        }
        ?>

    </body>
</html>