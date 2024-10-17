<?php
$target_directory = "documents/";
if (!file_exists($target_directory)) mkdir($target_directory, 0777, true);

$allowed_extensions = array("jpg", "jpeg", "png", "gif");

if ($_FILES["files"]["name"][0]) {
    $total_files = count($_FILES["files"]["name"]);
    for ($i = 0; $i < $total_files; $i++) {
        $file_name = $_FILES["files"]["name"][$i];
        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $target_file = $target_directory . $file_name;

        if (in_array($file_type, $allowed_extensions)) {
            echo (move_uploaded_file($_FILES["files"]["tmp_name"][$i], $target_file)) ? "File $file_name berhasil diunggah.<br />" : "Gagal mengunggah file $file_name.<br />";
        } else {
            echo "File $file_name bukan gambar yang valid.<br />";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>