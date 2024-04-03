<?php

require_once 'class_hewan.php';

$darat1 = new darat("kucing", "kuning", "melahirkan");
$darat2 = new darat("ayam", "coklat", "bertelur");
$air1 = new air("ikan", "merah", "bertelur" );
$air2 = new air("lumba lumba", "abu abu", "melahirkan");

echo 'Hewan yang hidup di darat <br>';
$darat1->getInfoDarat();
echo '<br>';
$darat2->getInfoDarat();
echo '<br><br>';

echo 'Hewan yang hidup di air <br>';
$air1->getInfoAir();
echo '<br>';
$air2->getInfoAir();
echo '<br><br>';



?>