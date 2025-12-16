<?php
namespace MyApp;

class Warrior extends Character {
    public function attack(): void {
        echo "Воин {$this->name} наносит удар мечом!\n";
    }
}