<?php

declare(strict_types=1);

require_once __DIR__ . '/fonctions.php';

echo "12 + 8 = " . additionner(12, 8) . PHP_EOL;
echo "12 - 8 = " . soustraire(12, 8) . PHP_EOL;
echo "12 * 8 = " . multiplier(12, 8) . PHP_EOL;
echo "12 / 8 = " . diviser(12, 8) . PHP_EOL;

// Test de la division par zéro : l'exception est interceptée, le script continue.
try {
    echo "10 / 0 = " . diviser(10, 0) . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Erreur : " . $e->getMessage() . PHP_EOL;
}
