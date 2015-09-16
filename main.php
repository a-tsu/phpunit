<?php
include_once("shisoku.inc");

// test viewing
$ans = new shisoku(6,2);
echo $ans->add()."\n";
echo $ans->sub()."\n";
echo $ans->mul()."\n";
echo $ans->div()."\n";
?>
