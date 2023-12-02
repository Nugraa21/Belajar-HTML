<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ludang-225510017</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        h2 {
            color: #333;
        }

        #formData {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
    </style>
    <script>
        function validateForm() {
            // Your existing JavaScript validation function
        }
    </script>
</head>

<body>
    <form name="myForm" action="process_form.php" onsubmit="return validateForm()" method="post">
        <h2>Form</h2>
        Name: <br>
        <input type="text" name="fname">
        <br>
        Alamat: <br>
        <input type="text" name="Alamat">
        <br>
        Email: <br>
        <input type="text" name="Email">
        <br>
        Nomor HP: <br>
        <input type="text" name="nomorhp">
        <br>
        Jenis Kelamin: <br>
        <input type="text" name="JKelamin">
        <br>
        <input type="submit" value="Submit">
    </form>

    <div id="formData">
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
    </div>
</body>

</html>