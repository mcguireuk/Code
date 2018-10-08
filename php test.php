<?php 

$frequency = "Other - First Wednesday in the Month etc";

if(strpbrk($frequency, "other")){
        $frequency = "Other";
    }
echo $frequency;
?>