<?php //print_r($dataSkor) ?>
<?php
$kepribadian = array("Sanguinis", "Koleris", "Melankolis", "Plegmatis");
// echo "\nSanguin, Koleris, Melankolis atau Plegmatis";
// echo "\nKepribadian anda adalah ".$kepribadian[$_SESSION['idkepribadian']];
// echo "\nKepribadian anda adalah ".$kepribadian[$tipe]
?>

<!-- <a href="../profile/index" class="btn btn-primary btn-lg">Lengkapi pofile</a> -->
<div class="container">
    <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h3 class="title"><?php echo $kepribadian[$_SESSION['idkepribadian']] ?></h3>
                </div>

                <div class="ui-block-content">
                    <h2> Macam - macam kepribadian Sanguinis, Koleris, Melankolis, Plegmatis </h2>
                    <a href="../profile/index" class="btn btn-primary btn-lg">Lengkapi pofile</a>
                </div>
            </div> 
        </div>
    </div>
</div>