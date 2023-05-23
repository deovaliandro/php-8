<?php

class ParentClass
{
    private function test(): void
    {
    }
}

class ExtendClass extends ParentClass
{
    public function test(string $name): string
    {
        return $name;
    }
}