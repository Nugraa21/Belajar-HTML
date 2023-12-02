<?php
if(isset($_POST['submit']))
{
    $fnama = $_POST['fnama'];
    $lalamat = $_POST['lalamat'];
    $no = $_POST['no'];
    $tgl = $_POST['tgl'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $jenis = $_POST['jenis'];
    $password = $_POST['password'];
    echo "<span class='success'>Dengan <b>METODE POST<b></span><br/>";
    echo "Nama : ".$fnama."<br/>";
    echo "NIM : ".$nim."<br/>";
    echo "E-mail : ".$email."<br/>";
    echo "Password : ".$password."<br/>";
    echo "Jenis Kelamin : ".$jenis."<br/>";
    echo "Jurusan : ".$jurusan."<br/>";
    echo "Alamat : ".$lalamat."<br/>";
    echo "No Hp: ".$no."<br/>";
    echo "Tanggal Lahir : ".$tgl."<br/>";
}
//-----------------------------------------------------------------------
if(isset($_POST['submit']))
{
    $fnama = $_GET['fnama'];
    $lalamat = $_GET['lalamat'];
    $no = $_GET['no'];
    $tgl = $_GET['tgl'];
    $nim = $_GET['nim'];
    $email = $_GET['email'];
    $jurusan = $_GET['jurusan'];
    $jenis = $_GET['jenis'];
    $password = $_GET['password'];
    echo "<span class='success'>Dengan <b>METODE POST<b></span><br/>";
    echo "Nama : ".$fnama."<br/>";
    echo "NIM : ".$nim."<br/>";
    echo "E-mail : ".$email."<br/>";
    echo "Password : ".$password."<br/>";
    echo "Jenis Kelamin : ".$jenis."<br/>";
    echo "Jurusan : ".$jurusan."<br/>";
    echo "Alamat : ".$lalamat."<br/>";
    echo "No Hp: ".$no."<br/>";
    echo "Tanggal Lahir : ".$tgl."<br/>";
}
?>