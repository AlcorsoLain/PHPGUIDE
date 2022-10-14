<?php
/* 
if mark are 60% or more, first division
if 45% to 59%, second division
if 33% to 44%, third division
if less 33%, fail
*/
$calif = "";
const calif = 34;
if (calif >= 60) {$calif = "First division";}
if(calif >= 45 && calif <= 59) {$calif = "Second division";}
if(calif >= 33 && calif <= 44) {$calif = "Third division";}
if(calif < 33) {$calif = "Fail";}
echo $calif;