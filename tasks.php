<?php

echo "Task2<br>";

$l = 1;
$m = 2;
$n = 3;

$k = ($l - $n) / ($l * $n) * $n;

if($k >= 0 && $k <= 1) {
    $x = ($l * $l - $n) / $m;
    $y = $k * ($l - $m) / $l;
} else {
    $x = ($k * $l * $m) / $n;
    $y = $l * $m * $k;
}
echo "<font size='4' face='Helvetica'>k= " . $k . "<br>x = " . $x . "<br>y = " . $y . "</font>";


echo "<br><br>Task3<br>";

$word1 = "BCD";
$word2 = "Acs";
$word3 = "Kas";

function checkIfValid($word1, $word2, $word3) {
    if (empty($word1) || empty($word2) || empty($word3)) {
        return false;
    }
    if (strlen($word1) == 0 || strlen($word2) == 0 || strlen($word3) == 0) {
        return false;
    }

    if (($word1[0] == "A" && (($word2[0] == "B" && $word3[0] == "K") || ($word3[0] == "B" && $word2[0] == "K"))) ||
    ($word2[0] == "A" && (($word1[0] == "B" && $word3[0] == "K") || ($word3[0] == "B" && $word1[0] == "K"))) ||
    ($word3[0] == "A" && (($word1[0] == "B" && $word2[0] == "K") || ($word2[0] == "B" && $word1[0] == "K")))) {
        return strlen($word1) == strlen($word2) && strlen($word1) == strlen($word3);
    }
    return false;
}

if (checkIfValid($word1, $word2, $word3) == false) {
    echo "Words are not valid.";
} else {
    $words = array($word1, $word2, $word3);
    sort($words);
    foreach ($words as $word) {
    echo "<font face='Helvetica'>$word</font>";
}
}

echo "<br><br>Task4";

for ($i = 1; $i <= 10; $i++) {
    $b[$i] = rand(0, 10);
    if ($i <= 7) {
        $d[$i] = rand(1, 10);
    }
}

$A = 10;

$b_sum = array_sum($b);

function array_mul($d) {
    $multi = 1;
    foreach ($d as $number) {
        $multi = $multi * $number;
    }
    return $multi;
}

$d_multi = array_mul($d);


$const_multiplier = ($b_sum - $A) / $d_multi;

$n = array();
for ($i = 1; $i <= 10; $i++) {
    $n[$i] = $const_multiplier * $b[$i];
}
echo "<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "<font face='Helvetica'>n[$i] = $n[$i]</font><br>";
}
?>