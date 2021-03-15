<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Controller dan View lebih dari 1 Variabel</title>
</head>
<body>
    <h2><?php echo $teks; ?></h2>
    
    <!--memanggil variabel 1-->
    Nama: <?php echo $nama; ?></br>

    <!--memanggil variabel 2-->
    Nim: <?php echo $nim; ?></br>

     <!--memanggil variabel 3-->
    Golongan: <?php echo $golongan; ?></br>

</body>
</html>