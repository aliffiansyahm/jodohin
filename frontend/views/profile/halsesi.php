<?php
    $session  = Yii::$app->session;
    print_r($session);
    echo $session['login'];
    echo $session['nama'];
    echo $session['id'];
    echo $session['email'];
    echo $session['idkepribadian'];
?>
<h1>ternyata kalo di print_r $session emang gk keluar keliatanya gk ada tapi di echo ada</h1>
