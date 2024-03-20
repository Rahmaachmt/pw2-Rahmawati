<?php

    require_once 'class_kendaraan.php';

    // object
    $motor = new Motor('motor', 'bensin', 2);
    $submarine = new submarine('submarine', 'solar', 1000);


    //echo motor 
    echo 'info motor:<br>';
    $motor->getInfoMotor();
    echo '<br>';

     //echo motor 
     echo 'info kapal selam:<br>';
     $submarine->getInfosubmarine();
     echo '<br>';


?>
 

