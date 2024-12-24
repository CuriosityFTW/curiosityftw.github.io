<?php
    $file = 'counter.txt';

    // Read the current count
    $count = file_exists($file) ? (int) file_get_contents($file) : 0;

    // Increment the count
    $count++;

    // Save the new count
    file_put_contents($file, $count);

    echo "Site Visitors: $count";
?>
