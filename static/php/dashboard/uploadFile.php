<?php
// Check if a file was uploaded
if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'static/img/logo/'; // Adjust the upload directory path
    $uploadFile = $uploadDir . basename($_FILES['file']['name']);

    // Move the uploaded file to the desired location
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        echo "File is valid, and was successfully uploaded.";
    } else {
        echo "Upload failed";
    }
} else {
    echo "Upload failed with error code " . $_FILES['file']['error'];
}
?>