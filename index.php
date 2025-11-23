<?php

 $counter = array( 'a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0 );

function countVowels(string $text, array $counter): array {
    $text = strtolower($text);
    for ($i = 0; $i < strlen($text); $i++) {
        $letter = $text[$i];
        if ($letter === 'a') {
            $counter['a']++;
        } elseif ($letter === 'e') {
            $counter['e']++;
        } elseif ($letter === 'i') {
            $counter['i']++;
        } elseif ($letter === 'o') {
            $counter['o']++;
        } elseif ($letter === 'u') {
            $counter['u']++;
        }
    }
    if (array_sum($counter) === 0) throw new Exception("Error: No vowels found");

    return $counter;
}

$sentence = "This is a test text to count only vowels";
$result = countVowels($sentence, $counter);

echo "\nText: $sentence\n";
echo "Vowel count:\n";
foreach ($result as $vowel => $count) {
    echo "$vowel: $count\n";
}

?>

