<?php
class Date {
 
    public static $date_format1 = 'F jS, Y';
    public static $date_format2 = 'Y/m/d H:i:s';
    public function format_date($unix_timestamp) {
        echo date(self::$date_format1, $unix_timestamp), "\n";
        echo date(self::$date_format2, $unix_timestamp);
    }
}
 
echo Date::format_date(time());
?>