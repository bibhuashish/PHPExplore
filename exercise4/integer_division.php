<?php
// Convert $total_minutes to hours and minutes.

$total_minutes = 318;
$minutes = $total_minutes % 60;
//$hour=($total_minutes-$minutes)/60;
$hour=intdiv($total_minutes,60);
echo "Time taken was $hour hours $minutes minutes";
