<?php

function getSaveFilename($value) {
    return preg_replace('/[^a-zA-Z0-9_ \-+]/s', '-', $value);
}

require('vendor/autoload.php');
require(__DIR__ . '/tests/VerifiedBarcodeTest.php');
$verifiedFiles = VerifiedBarcodeTest::$supportedBarcodes;

$result = [];
$result[] = '# Examples of supported barcodes';
$result[] = 'These are examples of supported barcodes with this library.';
$result[] = '';

foreach ($verifiedFiles as $verifiedFile) {
    $result[] = '### ' . $verifiedFile['type'];
    foreach ($verifiedFile['barcodes'] as $barcode) {
        $result[] = sprintf('![Barcode %s as %s](tests/verified-files/%s.svg)', $barcode, $verifiedFile['type'], getSaveFilename($verifiedFile['type'] . '-' . $barcode));
    }
}

$result[] = '';
$result[] = '*This file is generated by generate-examples.php*';

file_put_contents('examples.md', implode(PHP_EOL . PHP_EOL, $result));