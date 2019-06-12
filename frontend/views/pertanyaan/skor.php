<?php //print_r($dataSkor) ?>
<?php
$kepribadian = array("Sanguinis", "Koleris", "Melankolis", "Plegmatis");
echo "\nSanguin, Koleris, Melankolis atau Plegmatis";
echo "\nKepribadian anda adalah ".$kepribadian[$_SESSION['idkepribadian']];
// echo "\nKepribadian anda adalah ".$kepribadian[$tipe]
?>

<a href="../profile/index" class="btn btn-primary btn-lg">Lengkapi pofile</a>
