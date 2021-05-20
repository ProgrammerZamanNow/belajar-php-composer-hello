<?php

namespace ProgrammerZamanNow\Belajar;

class Customer
{

    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "Guest"): string
    {
        return "Hello $name, My Name is $this->name";
    }
}
