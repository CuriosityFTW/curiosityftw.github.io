<?php
// Debugging: Display the current directory to ensure file paths are correct
echo "Debug: Current Directory - " . __DIR__ . "<br>";

// Path to the counter file
$file = 'counter.txt';

// Check if the file exists
if (!file_exists($file)) {
    echo "Error: counter.txt does not exist.<br>";
    exit; // Stop further execution
}

// Read the current count
$count = file_get_contents($file);

// Debugging: Display the raw contents of the file
echo "Debug: File Contents - " . $count . "<br>";

// Convert the content to an integer
$count = (int)$count;

// Debugging: Display the count after conversion
echo "Debug: Converted Count - " . $count . "<br>";

// Increment the count
$count++;

// Save the updated count back to the file
if (file_put_contents($file, $count) === false) {
    echo "Error: Unable to write to counter.txt.<br>";
    exit; // Stop further execution
}

// Debugging: Display the final count
echo "Debug: Updated Count - " . $count . "<br>";

// Display the count to the user
echo $count;
?>
