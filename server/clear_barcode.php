<?php
// Overwrite the storage file to clear the barcode
$filePath = __DIR__ . '/barcode_storage.php';
file_put_contents($filePath, "");
echo "Barcode cleared.";
