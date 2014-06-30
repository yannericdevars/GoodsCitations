<?php

require_once '../Sources.php';
require_once '../Autor.php';

//print_r(Sources::getCitations());

$aCitations = Sources::getCitations();

$autor = $aCitations[array_rand($aCitations)];

print(json_encode($autor));

