<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeratorOne = $_POST["numeratorOne"];
    $denominatorOne = $_POST["denominatorOne"];
    $numeratorTwo = $_POST["numeratorTwo"];
    $denominatorTwo = $_POST["denominatorTwo"];
    $Operator = $_POST["Operator"];

    if ($denominatorOne == 0 || $denominatorTwo == 0) {
        die("The denominator can not be zero");
    }

    switch ($operation) {
        case "addition":
            $numerator_result = $numeratorOne * $denominatorTwo + $numeratorTwo * $denominatorOne;
            $denominator_result = $denominatorOne * $denominatorTwo;
            break;

        case "subtraction":
            $numerator_result = $numeratorOne * $denominatorTwo - $numeratorTwo * $denominatorOne;
            $denominator_result = $denominatorOne * $denominatorTwo;
            break;

        case "multiplication":
            $numerator_result = $numeratorOne * $numeratorTwo;
            $denominator_result = $denominatorOne * $denominatorTwo;
            break;

        case "division":
            $numerator_result = $numeratorOne * $denominatorTwo;
            $denominator_result = $denominatorOne * $numeratorTwo;
            break;

            default:
                die("Invalid operation");
        }
}