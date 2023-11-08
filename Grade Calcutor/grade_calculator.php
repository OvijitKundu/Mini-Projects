
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Grade Calculator</title>
        <style>
            <?php include "style.css" ?>
        </style>
    </head>
    
    <body>
        <div class="container">
            <h2>Grade Calculator</h2>            
            <form method="post" action="">

                <h6>
                    <p>
                        Grade A: Average score is above 80%<br>
                        Grade B: Average score is above 70%<br>
                        Grade C: Average score is above 60%<br>
                        Grade D: Average score is above 50%<br>
                        Grade F: Average score is below 50%<br>
                    </p>
                </h6>

                <input type="number" name="score1" placeholder="1st Test Score" required><br>
                <input type="number" name="score2" placeholder="2nd Test Score" required><br>
                <input type="number" name="score3" placeholder="3rd Test Score" required><br>

                <button type="submit" name="calculate" value="Calculate">Calculate</button>
            </form>

            <div id="result">
                <?php
                    if (isset($_POST['calculate'])) {
                        
                        // Get tests scores from user
                        $score1 = $_POST['score1'];
                        $score2 = $_POST['score2'];
                        $score3 = $_POST['score3'];

                        // Calculate the average
                        $average = ($score1 + $score2 + $score3) / 3;

                        // Determine the grade
                        if ($average >= 80) {
                            $grade = 'A';
                        } else if ($average >= 70) {
                            $grade = 'B';
                        } else if ($average >= 60) {
                            $grade = 'C';
                        } else if ($average >= 50) {
                            $grade = 'D';
                        } else {
                            $grade = 'F';
                        }

                        // Display the average and grade
                        echo "<p>Average Score: $average</p>";
                        echo "<p>Grade: $grade</p>";
                    }
                ?>
            </div>
        </div>
    </body>
</html>