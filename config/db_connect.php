<?php

$usuario_bd = 'root';
$senha_bd = '123456';
$nome_db = 'colegio';

$pdo = new PDO("mysql: host=127.0.0.1; port=3306; dbname=$nome_db", "$usuario_bd", "$senha_bd");