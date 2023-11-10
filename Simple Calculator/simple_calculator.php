
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Simple Calculator</title>
        <style>
            <?php include "style.css" ?>
        </style>
    </head>
    
    <body>
        <div class="container">
            <h2>Simple Calculator</h2>
            
            <form method="post" action="">
                <input type="number" name="num1" placeholder="Enter first number" required><br>
                <input type="number" name="num2" placeholder="Enter second number" required><br>

                <select name="operation">
                    <option value="add">Addition</option>
                    <option value="subtract">Subtraction</option>
                    <option value="multiply">Multiplication</option>
                    <option value="divide">Division</option>
                </select><br>

                <button type="submit" name="calculate" value="Calculate">Calculate</button>
            </form>
            
            <div id="result">
                <?php
                    if (isset($_POST['calculate'])) {
                        
                        // Get inputs from the form
                        $num1 = $_POST["num1"];
                        $num2 = $_POST["num2"];
                        $operation = $_POST["operation"];

                        if ($operation === "add") {
                            $result = $num1 + $num2;
                            echo "The result of Addition: <p>$num1 + $num2 = $result</p>"; //Addition
                        } else if ($operation === "subtract") {
                            $result = $num1 - $num2;
                            echo "The result of Subtraction: <p>$num1 - $num2 = $result</p>"; //Subtraction
                        } else if ($operation === "multiply") {
                            $result = $num1 * $num2;
                            echo "The result of Multiplication: <p>$num1 * $num2 = $result</p>"; //Multiplication
                        } else if ($operation === "divide") {
                            if ($num2 != 0) {
                                $result = $num1 / $num2;
                                echo "The result of Division: <p>$num1 + $num2 = $result</p>"; //Division
                            } else {
                                echo "Cannot divide by zero.";
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>