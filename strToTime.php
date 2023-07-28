<?php
 $myBirthDay = strtotime('2:00am  17th September 2004');
 echo date('d/m/Y h:i:sa', $myBirthDay);

 /*Unix timestamp is a long integer containing the number of seconds
between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.*/
$timeStamp = mktime(2, 14, 54, 9, 17, 2004);

//SET TIME ZONE TO PAKISTAN

date_default_timezone_set('Asia/Karachi');
echo date('h:i:sa');

?>