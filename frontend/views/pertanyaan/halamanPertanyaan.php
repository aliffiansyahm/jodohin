<div class="container"> 
    <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"> 
            <div class="ui-block">
                <div class="ui-block-content">
                    <h3 class="title">FIND YOUR PERSONALITY</h3>
                </div>
            </div>

            <form action="hitung" method="get">
            <?php $nomer = 0; ?>
            <?php foreach ($dataPertanyaan as $nilai) { ?>
                <div class="ui-block">
                    <div class="ui-block-content">
                        
                            <span>
                                <table>
                                    <tr>
                                        <h6><?php echo $nilai["PERTANYAAN"]?></h6>
                                    </tr>
                                    <?php for ($i=1; $i < 5 ; $i++) { ?>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jawaban<?php echo $nomer;?>" value="<?php echo $i; ?>"><?php echo $nilai["PILIHAN$i"]; ?>
                                            </label>
                                        </div>
                                    <?php } ?>
                                    </tr>
                                    <?php $nomer++; ?>
                                    
                                </table>
                            </span>
                    </div>
                </div>
            <?php }?>
            <div class="ui-block-content">
                <input type="submit" value="Submit" class="btn btn-secondary btn-lg">
            </div>
            </form>

        </div>
    </div>
</div>