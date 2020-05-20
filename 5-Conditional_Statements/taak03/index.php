<?php
$test1 = 3;
$test2 =6;

if ($test1 == $test2) {
    echo "gelijk";
} else {
    echo "ongelijk";
}
if ($test1 != $test2) {
    echo "gelijk";
} else {
    echo "ongelijk";
}
if ($test1 === $test2) {
    echo "identiek";
} else {
    echo "ongelijk";
}
if ($test1 > $test2) {
    echo "test1 is groter dan test2";
} else {
    echo "ongelijk";
}
if ($test1 < $test2) {
    echo "test1 is kleiner dan test2";
} else {
    echo "ongelijk";
}
if ($test1 >= $test2) {
    echo "test1 is groter of gelijk aan test2";
} else {
    echo "ongelijk";
}
if ($test1 <= $test2) {
    echo "test1 is kleiner of gelijk aan test2";
} else {
    echo "ongelijk";
}
?>