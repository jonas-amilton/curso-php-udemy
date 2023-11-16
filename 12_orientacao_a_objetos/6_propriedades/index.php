<?php

class User
{
    public $idade = 27;
    public $salario;
}

$jonas = new User;

echo $jonas->idade . '<br>';

$jonas->salario = 1500;

echo $jonas->salario . '<br>';

$rita = new User;

$rita->idade = 25;

echo $rita->idade;
