<?php
 /* 
 show day of week based on number using switch
 you can pass 1 tp 7 number in switch
 1 = Monday
 default = Invalid number
 */
const dayofweek = 0;
$message = "";
// $days = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
switch (dayofweek) {
    case 1:
        $message = "Monday";
        break;
    case 2:
        $message = "Tuesday";
        break;
    case 3:
        $message = "Wednesday";
        break;
    case 4:
        $message = "Thursday";
        break;
    case 5:
        $message = "Friday";
        break;
    case 6:
        $message = "Saturday";
        break;
    case 7:
        $message = "Sunday";
        break;
    default:
    $message = "Invalid number";
        break;
}
echo "Day of the week: ".$message;
echo "<br>";
/* 
try {
    echo "Day of the week: ".$days[dayofweek-1];
} catch () {
    echo "ERROR ADMIN";
}
*/

