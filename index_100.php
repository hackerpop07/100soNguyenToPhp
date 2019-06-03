<?php
for ($i = 1; $i < 100; $i++) {
    $flap = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $flap = false;
        }
    }
    if ($flap) {
        echo $i." ";
    }
}
?>