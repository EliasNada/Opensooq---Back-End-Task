<?php
require "helper.php";

// credits for Crisp from Stackoverflow

echo "LEVENSHTEIN DISTANCE CALCULATOR\n";
echo "First Text: \n";
$input = fopen("php://stdin", "r");
$first = fgets($input);
echo "Second Text: \n";
$input = fopen("php://stdin", "r");
$second = fgets($input);
echo "Levenshtein: ".Helper::instantiate('Levenshtein', $first, $second)." operations made \n";

?>