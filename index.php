<?php

// Array con tutte le lettere minuscole
$lowercaseLetters = range('a', 'z');

// Array con tutte le lettere minuscole
$uppercaseLetters = range('A', 'Z');

// Array con i simboli
$symbols = [
    '!',
    '$',
    '%',
    '^',
    '&',
    '#',
    '*',
    '§'
];

// Array finale con tutti i caratteri da usare per le password
$characters = array_merge($lowercaseLetters, $uppercaseLetters, $symbols);

var_dump($characters);

?>
