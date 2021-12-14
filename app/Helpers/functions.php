<?php

/**
 * format quote string
 * @param string $quote
 * @return string
 */
function formatQuote($quote)
{
    return '"' . $quote . '"';
}

/**
 * format quote source
 * @param string $source
 * @return string
 */
function formatSource($source)
{
    return "~{$source}";
}