<?php

function CelciusToFahrenheit($number) {
    return $number * 1.8 + 32;
}
function FahrenheitToCelcius($number) {
    return ($number - 32) / 1.8;
}

function CurrencyConverter($from, $to, $value) {
    $exchangeRates = array(
        "USD" => array(
            "GBP" => 0.82,
            "EUR" => 0.95
        ),
        "GBP" => array(
            "USD" => 1.21,
            "EUR" => 1.16
        ),
        "EUR" => array(
            "USD" => 1.05,
            "GBP" => 0.87
        )
    );
    
    if (!isset($exchangeRates[strtoupper($from)])) return false;
    if (!isset($exchangeRates[strtoupper($from)][strtoupper($to)])) return false;

    return $value * $exchangeRates[strtoupper($from)][strtoupper($to)];
}

?>