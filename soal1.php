<?php

function cekKata($string) {
    $length = 0;

    while (isset($string[$length])) {
        $length++;
    }

    $cekKata = true;
    $i = 0;
    while ($i < $length / 2) {
        if ($string[$i] !== $string[$length - $i - 1]) {
            $cekKata = false;
            break;
        }
        $i++;
    }
    return $cekKata;
}

$kata1 = "A";
$kata2 = "ABA";
$kata3 = "DEV";
$kata4 = "KODOK";
$kata5 = "RUMAH";

echo cekKata($kata1) ? "TRUE\n" : "FALSE\n";
echo cekKata($kata2) ? "TRUE\n" : "FALSE\n";
echo cekKata($kata3) ? "TRUE\n" : "FALSE\n";
echo cekKata($kata4) ? "TRUE\n" : "FALSE\n";
echo cekKata($kata5) ? "TRUE\n" : "FALSE\n";

?>
