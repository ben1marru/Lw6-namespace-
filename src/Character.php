<?php

namespace MyApp;

class Character
{
    protected string $name;
    protected int $health;

    public function __construct(string $name, int $health = 100)
    {
        $this->name = $name;
        $this->health = $health;
    }

    public function attack(): void
    {
        echo "{$this->name} атакует!\n";
    }
}
