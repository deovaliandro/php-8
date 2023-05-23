<?php

int:
$value = 90;

$firstResult = match ($value) {
    90 => "A",
    80 => "B",
    70 => "C",
    60 => "D",
    default => "E"
};

$result = match (true) {
    $value >= 90 => "A",
    $value >= 80 => "B",
    $value >= 70 => "C",
    $value >= 60 => "D",
    default => "E"
};