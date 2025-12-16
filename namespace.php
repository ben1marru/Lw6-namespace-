<?php
require_once __DIR__ . '/vendor/autoload.php';

use MyApp\Character;
use MyApp\Warrior;
use MyApp\Mage;
use MyApp\Archer;

// Создаем массив персонажей разного класса
$characters = [
    new Warrior("Рагнар"),
    new Mage("Мерлин"),
    new Archer("Леголас"),
    new Character("Простой персонаж")
];

// Вызываем метод attack для каждого персонажа
foreach ($characters as $character) {
    $character->attack();
}