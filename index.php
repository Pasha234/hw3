<?php

use Pasha234\TimeDiff\TimeDiff;

require "vendor/autoload.php";

$timediff = new TimeDiff(
    DateTime::createFromFormat('Y-m-d H:i:s', "2025-02-23 16:00:00")
);

echo $timediff->get('2025-02-22 16:00:00') . "\n";