
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Comparison Tool</title>
        <style>
            <?php include "style.css" ?>
        </style>
    </head>
    
    <body>
        <div class="container">
            <h2>Comparison Tool</h2>
            
            <form method="post" action="">
                <input type="number" name="num1" placeholder="Enter the 1st number" required><br>
                <input type="number" name="num2" placeholder="Enter the 2nd number" required><br>

                <button type="submit" name="calculate" value="Calculate">Compare</button>
            </form>
            
            <div id="result">
                <?php
                    if (isset($_POST['calculate'])) {
                        
                        //Get inputs from the form                       
                        $number1 = $_POST['num1'];
                        $number2 = $_POST['num2'];

                        //Compare 2 numbers with ternary operator                        
                        $result = ($number1 > $number2) ? //Compare 1st number with 2nd
                        "$number1 (1st number) is larger than $number2 (2nd  number)." : //True Part- 1st number is larger than 2nd
                        (($number2 > $number1) ? "$number2 (2nd number) is larger than $number1 (1st number)." : //False Part- (Compare 2nd number with 1st) ? True Part- 2nd number is larger than 1st
                        "Both numbers are same!"); //False Part- Same Number

                        //Show output
                        echo $result;
                    }
                ?>
            </div>
        </div>
    </body>
</html>