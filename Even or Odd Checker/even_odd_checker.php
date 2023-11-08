
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EVEN or ODD Checker</title>
        <style>
            <?php include "style.css" ?>
        </style>
    </head>

    <body>
        <div class="container">
            <h2>EVEN or ODD Checker</h2>
            
            <form method="post" action="">
                <input type="number" name="num" placeholder="Enter the number" required><br>

                <button type="submit" name="calculate" value="Calculate">Check</button>
            </form>
            
            <div id="result">
                <?php
                    if (isset($_POST['calculate'])) {
                        
                        //Get the number from user
                        $number = $_POST['num'];

                        //Check whether the number is even or odd
                        if ($number % 2 == 0) {
                            echo "$number is an EVEN number!";
                        } else {
                            echo "$number is an ODD number!";
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>