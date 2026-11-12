<?php

declare(strict_types=1);

// Chaque fonction retourne une valeur : l'affichage se fait dans test.php.

function additionner(float $a, float $b): float
{
    return $a + $b;
}

function soustraire(float $a, float $b): float
{
    return $a - $b;
}

function multiplier(float $a, float $b): float
{
    return $a * $b;
}

function diviser(float $a, float $b): float
{
    // On refuse la division par zéro avant de calculer, pour éviter une DivisionByZeroError.
    if ($b == 0) {
        throw new InvalidArgumentException("Division par zéro impossible");
    }

    return $a / $b;
}
