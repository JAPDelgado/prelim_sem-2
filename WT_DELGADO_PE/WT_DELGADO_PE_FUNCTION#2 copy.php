<?php
    $correctanswer = $_POST['guess'];
    $wronganswer = "";
        function random($fin,$correctanswer)
        {
            for ($int = 1 ; $int <=10; $int++)
            {
                $wronganswer =  rand(1,10);
                if ($correctanswer == $wronganswer)
                {
                    $fin = "Good guess! Matched number is " . $correctanswer . "<br>";
                } else { 
                    $fin = "Sorry! Didn`t match with the number." . $wronganswer . "<br>";
                }
                echo $fin;
            }
        }
    echo "Your Guess Number: " . $correctanswer . "<br>";
    echo "Generated Numbers: " . $wronganswer . "<br>";
    $fin =  random($wronganswer,$correctanswer);
?>