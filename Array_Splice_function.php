<?php

$colours = ['red','blue','orange','yellow'];

$cars = ['audi','corolla','bmw'];

array_splice($colours,3, count($colours),$cars);

echo "<pre>";
print_r($colours);
echo "</pre>";


?>