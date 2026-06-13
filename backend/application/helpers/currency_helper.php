<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('monto_a_letras')) {
    function monto_a_letras($number) {
        $formatter = new NumberFormatter('es', NumberFormatter::SPELLOUT);
        $integerPart = floor($number);
        $decimalPart = round(($number - $integerPart) * 100);
        
        $letras = ucfirst($formatter->format($integerPart));
        return $letras . " " . str_pad($decimalPart, 2, "0", STR_PAD_LEFT) . "/100 Bolivianos";
    }
}
