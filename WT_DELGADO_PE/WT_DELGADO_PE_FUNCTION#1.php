<?php
    $StudName = $_POST['StudName'];
    $PGrade = $_POST['Preliminary Grade'];
    $MGrade = $_POST['Midterm Grade'];
    $PFGrade = $_POST['Prefinal Grade'];

    echo "STUDENT NAME: " . $StudName . "<br>";
    echo "PRELIM GRADE: " . $PGrade . "<br>";
    echo "MIDTERM GRADE: " . $MGrade . "<br>";
    echo "PRE-FINAL GRADE: " . $PFGrade . "<br>";

    function FinGradeCal($PGrade,$MGrade,$PFGrade) {
        $fingrade = ($PGrade * .3) + ($MGrade * .3) + ($PFGrade * .4);
        return $fingrade;
    }
    $FinalGrade = FinGradeCal($PGrade,$MGrade,$PFGrade);
    function Remarks($Grades)
    {
       if ($Grades < 60){
            $result = "Failed";
            if ($Grades >= 60 && $Grades <= 79) {
                $result = "Passed";
                if ($Grades >= 80 && $Grades <= 89) {
                     $result = "Average Grade";
                    if ($Grades >= 90) {
                        $result = "High Grade";
                    } 
                }
            } 
        } 
        return  " Your Grade : " . $result;
    }

    echo Remarks($FinalGrade);
?>
