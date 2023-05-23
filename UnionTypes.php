<?php

function unionTypes(array|string $data): array|string
{
    if (is_array($data)) {
        return $data;
    } elseif (is_string($data)) {
        return $data;
    } else {
        return "Nothing";
    }
}

var_dump(unionTypes([12]));
var_dump(unionTypes("Bellow"));

// generic?