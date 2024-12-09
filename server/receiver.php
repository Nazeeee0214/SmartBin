<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $barcode = !empty($_POST['barcode']) ? htmlspecialchars($_POST['barcode'], ENT_QUOTES, 'UTF-8') : null;
    $weight = !empty($_POST['weight']) ? htmlspecialchars($_POST['weight'], ENT_QUOTES, 'UTF-8') : null;

    if ($barcode) {
        // Store the barcode in a text file
        $filePathBarcode = __DIR__ . '/barcode_storage.php';
        file_put_contents($filePathBarcode, "$barcode");

        echo "Barcode saved successfully.\n";
    }

    if ($weight) {
        // Store the weight in a text file
        $filePathWeight = __DIR__ . '/weight_storage.php';
        file_put_contents($filePathWeight, "<?php return $weight;");

        echo "Weight saved successfully.\n";
    }

    if (!$barcode && !$weight) {
        echo "No barcode or weight received.";
    }
} else {
    echo "Invalid request method.";
}
