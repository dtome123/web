<?php
 /* $date= getdate();
 $dateint = mktime(0, 0, 0, $date['mday'],$date['mon'],$date['year']);
 $date2= date('Y/m/d', $date); */
$date= date('Y-m-d'); 
$date=date_create($date);
date_modify($date, "+7 days");
echo date_format($date, "d/m/Y");
    
 ?>