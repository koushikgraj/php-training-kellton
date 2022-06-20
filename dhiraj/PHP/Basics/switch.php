
    <?php
$weekday = 3;
$a="It's  ";
switch($weekday):
    case 1:     echo " $a MONDAY";      break;
    case 2:     echo "$a TUESDAY";      break;
    case 3:     echo "$a WEDNESDAY";    break;
    case 4:     echo "$a THURSDAY";     break;
    case 5:     echo "$a FRIDAY";       break;
    case 6:     echo  "$a SATURDAY";    break;
    case 7:     echo "$a SUNDAY";       break;
    default:    echo "Entre valid date";
endswitch;
?>
