<?php
/*
    Y - The year
    m - The month
    d - The day
    D - The day of the week in short. If the day is 'Sunday', this gives 'Sun'
    l - The day of the week in full.  If the day is 'Sunday', this gives 'Sunday'
    h - The hour
    i - The minute
    s - The second
    a - AM/PM
*/

echo date('Y'); //2024
echo '</br>';

echo date('y'); //24
echo '</br>';

echo date('Y', 936345600); //1993. 936345600 is an epoch time
echo '</br>';

echo date('Y', strtotime('1991-10-01')); //1991. strtotime('1991-10-01') will gives an epoch time
echo '</br>';

echo date('m'); //03
echo '</br>';

echo date('M'); //Mar
echo '</br>';

echo date('d'); //10
echo '</br>';

echo date('D'); //Sun
echo '</br>';

echo date('l'); //Sunday
echo '</br>';

echo date('h'); //11
echo '</br>';

echo date('i'); //16
echo '</br>';

echo date('s'); //15
echo '</br>';

echo date('a'); //am
echo '</br>';

echo date('Y-m-d h:i:s a'); //2024-03-10 11:18:22 am
echo '</br>';
