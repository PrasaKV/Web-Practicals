<?php
function getDayOfWeek($dayNumber) {
    switch ($dayNumber) {
        case 1:
            return "Monday";
        case 2:
            return "Tuesday";
        case 3:
            return "Wednesday";
        case 4:
            return "Thursday";
        case 5:
            return "Friday";
        case 6:
            return "Saturday";
        case 7:
            return "Sunday";
        default:
            return "Invalid number";
    }
}

// Example usage
$dayNumber = 3; // Change this number to get the corresponding day of the week
$dayOfWeek = getDayOfWeek($dayNumber);

echo "Number: " . $dayNumber . "<br>";
echo "Day of the Week: " . $dayOfWeek . "<br>";
?>