<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Counting vowels
    $vowelCount = preg_match_all('/[aeiouAEIOU]/', $string);
    
    // Reverse string
    $reversedString = strrev($string);
    
    // Printing original and modified strings along with vowel counts
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>

<?php
// /* $strings = ["Hello", "World", "PHP", "Programming"];

// foreach ($strings as $string) {
//     // Counting vowels manually
//     $vowelCount = 0;
//     $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

//     for ($i = 0; $i < strlen($string); $i++) {
//         if (in_array($string[$i], $vowels)) {
//             $vowelCount++;
//         }
//     }
    
//     // Reverse string
//     $reversedString = strrev($string);
    
//     // Printing original and modified strings along with vowel counts
//     echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
// } */
?>

