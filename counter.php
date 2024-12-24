<?php
$file = 'counter.txt'; // Path to counter.txt

// Check if the file exists
if (!file_exists($file)) {
    // Create the file with an initial value of 0
    file_put_contents($file, 0);
}

// Read the current count
$count = (int) file_get_contents($file); // Convert the content to an integer

// Increment the count
$count++;

// Save the updated count back to the file
if (file_put_contents($file, $count) === false) {
    echo "Error: Unable to write to the counter file.";
} else {
    // Display the visitor count
    /*echo $count;*/
    echo "Debug: " . $count;
}
?>
