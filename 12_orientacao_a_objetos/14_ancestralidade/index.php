<?php

class Humano
{
}

class Animal
{
}

class Professor extends Humano
{
}

$pedro = new Professor;

$pandora = new Animal;

$marcos = new Humano;

if ($marcos instanceof Humano) {
    echo 'Marcos é humano<br>';
} else {
    echo 'Marcos não é humano<br>';
}

if ($pandora instanceof Humano) {
    echo 'Pandora é humano<br>';
} else {
    echo 'Pandora não é humano<br>';
}

if ($pedro instanceof Professor) {
    echo 'Pedro é professor<br>';
} else {
    echo 'Pedro não é professor<br>';
}

if ($pedro instanceof Humano) {
    echo 'Pedro é humano<br>';
} else {
    echo 'Pedro não é humano<br>';
}
