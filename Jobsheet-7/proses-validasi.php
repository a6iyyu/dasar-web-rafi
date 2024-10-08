<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $errors = array();

    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    if (empty($password)) {
        $errors[] = "Password harus diisi.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password harus minimal 8 karakter.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br />";
        }
    } else {
        echo "Data berhasil dikirim dengan nama $nama, email $email, dan password yang valid.";
    }
}
?>
