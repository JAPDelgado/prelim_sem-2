<?php
    //variable Declaration/initialized value for guessed number
    $guess = $_POST['guess'];
    $answer = "";

        //function for the random
        function random($result,$guess){

            //For loop to Generate numbers from 1 to 10.
            for ($int = 1 ; $int <=10; $int++){
                //the code that generates random number
                $answer =  rand(1,10);

                //If-Else Condition 
                if ($guess == $answer){
                    //if statement that will be shown if condition is met.
                    $result = "Good guess! Matched number is " . $guess . "<br>";

                } else { //else statement what will be shown if if condition is not met.
                    $result = "Sorry! Didn`t match with the number." . $answer . "<br>";

                }
                //Display Result
                echo $result;
            }
        }

        //output to display in Problem 2
        echo "Your Guess Number: " . $guess . "<br>";
        echo "Generated Numbers: " . $answer ."<br>";
        //Display Function for the Random
        $result =  random($answer,$guess);
?>