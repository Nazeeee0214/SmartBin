<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['barcode'])) {
        $barcode = htmlspecialchars($_POST['barcode'], ENT_QUOTES, 'UTF-8'); // Sanitize input

        // Store the barcode in a text file
        $filePath = __DIR__ . '/barcode_storage.php';
        file_put_contents($filePath, "$barcode");

        echo "Barcode saved successfully.";
    } else {
        echo "No barcode received.";
    }
} else {
    echo "Invalid request method.";
}
