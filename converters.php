<?php

function CelciusToFahrenheit($number) {
    return $number * 1.8 + 32;
}
function FahrenheitToCelcius($number) {
    return ($number - 32) / 1.8;
}

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

function CurrencyConverter($from, $to, $value) {
    if (!array_key_exists(strtoupper($from), $exchangeRates)) return false;
    // if (!array_key_exists($to, array_column($exchangeRates, $from))) return false;
    if (!array_key_exists(strtoupper($to), $exchangeRates[strtoupper($from)])) return false;

    return $value * $exchangeRates[strtoupper($to)][strtoupper($from)];
}

?>