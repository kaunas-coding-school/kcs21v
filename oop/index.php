<?php declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use KCS\Entity\Car;

$automobilis = new Car();
$automobilis->spalva = 'raudona';
$automobilis->greitis = '50km/h';

echo $automobilis->gautiSpalva() . '< br>';
$automobilis->vaziuoti();
$automobilis->vaziuoti();
echo '<br>Rida: ' . $automobilis->gautiRida();
