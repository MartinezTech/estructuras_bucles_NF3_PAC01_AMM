<?php

$yesterday        = date("l", mktime(0, 0, 0, date("m")  , date("d")-1, date("Y")));
$previous_month  = date("F", mktime(0, 0, 0, date("m")-1, date("d"),   date("Y")));
$days_remaining = date('t') - date('j');
$months_remaining = 12 - date('m');

?>