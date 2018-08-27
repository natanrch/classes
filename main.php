<?php

require 'Pessoa.php';
require 'Cachorro.php';
require 'Gato.php';

$pessoa = new Pessoa;
$pessoa->anda();

$cachorro = new Cachorro;
$cachorro->late();

$gato = new Gato;
$gato->mia();