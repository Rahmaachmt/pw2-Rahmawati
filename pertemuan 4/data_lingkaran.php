<?php
    require_once 'class_lingkaran.php';

    echo "nilai PHI " . lingkaran::PHI;


    $lingkaran1 = new lingkaran(7);
    $lingkaran2 = new lingkaran(68);

    echo '<br>luas lingkaran 1 = ' . $lingkaran1->getLuas() . ' cm';
    echo '<br>keliling lingkaran 1 = ' . $lingkaran1->getLuas() . ' cm';


?>