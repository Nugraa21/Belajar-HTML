<!DOCTYPE html>
<html>
<head>
    <title>Ludang-225510017</title>
    <script>
        function validateForm() {
            var nama = document.forms["myForm"]["fname"].value;
            var Alamat = document.forms["myForm"]["Alamat"].value;
            var Email = document.forms["myForm"]["Email"].value;
            var Telepon = document.forms["myForm"]["nomorhp"].value;
            var Kelamin = document.forms["myForm"]["JKelamin"].value;

            if (nama === "" || Alamat === "" || Email === "" || Telepon === "" || Kelamin === "") {
                alert("Masukkan semua informasi");
                return false;
            }
        }
    </script>
</head>
<body>
    <form name="myForm" action="process_form.php" onsubmit="return validateForm()" method="post">
        Name: 
        <br>
        <input type="text" name="fname">
        <br>
        Alamat: 
        <br>
        <input type="text" name="Alamat">
        <br>
        Email: 
        <br>
        <input type="text" name="Email">
        <br>
        Nomor HP: 
        <br>
        <input type="text" name="nomorhp">
        <br>
        Jenis Kelamin: 
        <br>
        <input type="text" name="JKelamin">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
