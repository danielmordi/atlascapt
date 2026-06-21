<?php

if (!function_exists('currency_converter')) {
    function currency_converter($amount)
    {
        $fmt = new \NumberFormatter(app()->getLocale(), \NumberFormatter::CURRENCY);
        // Strip the currency symbol and convert to a numeric value
        $sourceValue = (float)$amount;
        return $fmt->formatCurrency($sourceValue, 'USD');
    }
}
