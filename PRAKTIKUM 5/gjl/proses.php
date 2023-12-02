<?php
        if(isset($_POST['submit']))
        {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jurusan = $_POST['jurusan'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            echo "<span class='success'>Data submitted with <b>POST method</b></span><br/>";
            echo "Nim: " . $nim . "<br/>";
            echo "Nama: " . $nama . "<br/>";
            echo "Jurusan: " . $jurusan . "<br/>";
            echo "Alamat: " . $alamat . "<br/>";
            echo "Gender: " . $gender . "<br/>";
            echo "Email: " . $email . "<br/>";
            echo "Password: " . $password . "<br/>";
        }
        ?>