<?php

require_once "../vendor/autoload.php";

use Triangle\Triangle;

$A = $_POST['A'];
$B = $_POST['B'];
$C = $_POST['C'];

$t = new Triangle($A,$B,$C);

echo json_encode($t->getType());