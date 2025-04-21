<?php

/**
 * Clase de utilidades matemáticas.
 *
 * @package Utilidades
 */
class UtilidadesMatematicas
{
    /**
     * Suma dos números enteros.
     *
     * @param int $a El primer número.
     * @param int $b El segundo número.
     * @return int La suma de los dos números.
     */
    public static function sumar(int $a, int $b): int
    {
        return $a + $b;
    }

    /**
     * Calcula el área de un círculo.
     *
     * @param float $radio El radio del círculo.
     * @return float El área del círculo.
     */
    public static function calcularAreaCirculo(float $radio): float
    {
        return pi() * pow($radio, 2);
    }
}