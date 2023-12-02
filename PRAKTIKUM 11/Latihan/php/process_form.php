<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>
</head>
<body>
    <h2>Form Data:</h2>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["fname"];
            $alamat = $_POST["Alamat"];
            $email = $_POST["Email"];
            $telepon = $_POST["nomorhp"];
            $kelamin = $_POST["JKelamin"];

            echo "Name: $nama <br>";
            echo "Alamat: $alamat <br>";
            echo "Email: $email <br>";
            echo "Nomor HP: $telepon <br>";
            echo "Jenis Kelamin: $kelamin <br>";
        }
    ?>
</body>
</html>
