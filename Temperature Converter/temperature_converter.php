
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Temperature Converter</title>
        <style>
            <?php include "style.css" ?>
        </style>
    </head>

    <body>
        <div class="container">
            <h2>Temperature Converter</h2>
            <form method="post" action="">
                <input type="number" name="num" placeholder="Enter number" required><br>

                <select name="operation">
                    <option value="cel_to_fah">Clecius to Fahrenheit</option>
                    <option value="fah_to_cel">Fahrenheit to Clecius</option>
                </select><br>

                <button type="submit" name="calculate" value="Calculate">Convert</button>
            </form>
            
            <div id="result">
                <?php
                    if (isset($_POST['calculate'])) {
                        
                        // Get input from user
                        $temperature = $_POST["num"];
                        $operation = $_POST["operation"];

                        if ($operation === "cel_to_fah") {
                            $celsius = ($temperature * (9 / 5)) + 32;
                            echo "$temperature degree Celsius = $celsius degree Fahrenheit"; // Display output for Clecius to Fahrenheit
                        } else if ($operation === "fah_to_cel") {
                            $fahrenheit = (($temperature - 32) * (5 / 9));
                            echo "$temperature degree Fahrenheit = $fahrenheit degree Celsius"; // Display output for Fahrenheit to Clecius
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>