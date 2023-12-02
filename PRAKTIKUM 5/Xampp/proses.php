
<?php 
if(isset($_POST['fnama']))
{
    $fnama = $_POST['fnama'];
    $lalamat = $_POST['lalamat'];
   echo "<span class='surcces>Dengan <b>Metode post </b></span><br>";
   echo "Nama" : "0$fnama. "<br/>Alamat;

}
if(isset ($_get ['fnama']))
{
            $fnama = $_get['fnama'];
            $lalamat = $get ['lalamat'];
   echo "<span class='surcces>Dengan <b>Metode post </b></span><br>";
   echo "Nama": "0$fnama. "<br/>Alamat ;)
}
?>