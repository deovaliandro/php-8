<?php

function testMixed(mixed $data): mixed
{
    if (is_string($data)) {
        return $data;
    } elseif (is_array($data)) {
        return $data;
    } elseif (is_bool($data)) {
        return $data;
    } elseif (is_int($data)) {
        return $data;
    } else {
        return "entahlah";
    }
}

var_dump(testMixed(false));
var_dump(testMixed(12));
var_dump(testMixed("kata"));