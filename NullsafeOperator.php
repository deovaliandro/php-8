<?php

function getCountry(?string $name): ?string
{
    return $name;
}

echo getCountry(null) . PHP_EOL;