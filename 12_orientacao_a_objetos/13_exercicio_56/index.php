<?php

class Humano
{

    public $nome;
    public $idade;

    public function falar()
    {
        echo 'Olá pessoal<br>';
    }
}

class Professor extends Humano
{

    public function lecionar()
    {
        echo 'Aula de ciencia da computação<br>';
    }
}


$aluno = new Humano;

$aluno->nome = 'Jonas';

$aluno->idade = 27;

$professor = new Professor;

$professor->nome = 'Matheus';

$professor->idade = 29;

$aluno->falar();

$professor->lecionar();

$professor->falar();

echo $professor->idade . '<br>';

echo $professor->nome . '<br>';

echo $aluno->idade . '<br>';

echo $aluno->nome . '<br>';
