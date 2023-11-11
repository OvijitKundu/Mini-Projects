
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Weather Report</title>
        <style>
            <?php include "style.css" ?>
        </style>
    </head>
    
    <body>
        <div class="container">
            <h2>Weather Report</h2>
        
            <form method="post" action="">
                
                <h6>
                    <p>
                        Frezzing: (Temperature <= 0) Degree Celcius<br>
                        Cool: (0 < Temperature <= 15) Degree Celcius<br>
                        Warm: (15 < Temperature <= 45) Degree Celcius
                    </p>
                </h6>

                <input type="number" name="num" placeholder="Enter temperature in degree celcius" required><br>

                <button type="submit" name="calculate" value="Calculate">Report</button>
            </form>
            
            <div id="result">

                <?php
                    if (isset($_POST['calculate'])) {
                        
                        //Get the temperature from user
                        $temperature = $_POST['num'];

                        //Check weather
                        if ($temperature <= 0) {
                            printf("%d (degree Celcius) <p>It's Freezing!</p>", $temperature); // Output for Freezing

                        } else if ($temperature > 0 && $temperature <= 15) {
                            printf("%d (degree Celcius) <p>It's Cool!</p>", $temperature); // Output for Cool

                        } else if ($temperature > 15 && $temperature <= 45) {
                            printf("%d (degree Celcius) <p>It's Warm!</p>", $temperature); // Output for Warm

                        } else {
                            echo "Please enter the temperature from above list!"; // Default
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>