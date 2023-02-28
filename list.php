<?php $makanan = array("Rawon","Gado-gado", "Rendang", "Soto", "Sate", "Papeda");?>
<div class="container" id="list">
    <div class="row">
    <?php for($i=0; $i<6; $i++) {?>
        <div class="card m-5" style="width: 18rem;">
            <img src="assets/<?php echo $i + 150?>.jpg" class="card-img-top" alt="makanan" width=100px height=250px>
            <div class="card-body">
                <h5 class="card-title"><?php echo $makanan[$i]?></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, molestias?</p>
            </div>
        </div>
    <?php } ?>
    </div>
</div>