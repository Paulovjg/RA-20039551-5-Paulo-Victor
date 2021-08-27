<?php
    include 'data/products.php';
?>
<main>
    <div class="row">
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
            <a href="#" ><img src="./img/homebg.png" class="img-responsive"></a>
            <h1 class="title display-5 fw-bold">Você é bem-vindo aqui!<small>Dê uma olhada e fique à vontade para explorar <br> ____________________________</small></h1>
        </div>
    </div>
    <div class="container marketing">
        <div class="row pb-5">
            <h2 class="featurette-heading fs-1">É tudo para você!</h2>
            <p class="lead mb-5">Abaixo preparamos para você alguns de nossos doces mais populares, esperamos que goste!</p>
            <hr class="featurette-divider mb-5">
        <div>
        </div>
        <div class="col-lg-4">
            <img src="<?php echo $arr['1']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['1']['name'] ?>">
            <h2 class="mt-3"><?php echo $arr['1']['name'] ?></h2>
            <p><?php echo $arr['1']['description'] ?></p>
            <p><a class="btn btn-outline-danger" href="?i=product1">Dê uma olhada</a></p>
        </div>
        <div class="col-lg-4">
            <img src="<?php echo $arr['2']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['2']['name'] ?>">
            <h2 class="mt-3"><?php echo $arr['2']['name'] ?></h2>
            <p><?php echo $arr['2']['description'] ?></p>
            <p><a class="btn btn-outline-danger" href="?i=product2">Dê uma olhada</a></p>
        </div>
        <div class="col-lg-4">
            <img src="<?php echo $arr['3']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['3']['name'] ?>">
            <h2 class="mt-3"><?php echo $arr['3']['name'] ?></h2>
            <p><?php echo $arr['3']['description'] ?></p>
            <p><a class="btn btn-outline-danger" href="?i=product3">Dê uma olhada</a></p>
        </div>
        <div class="col-lg-4 mt-5">
            <img src="<?php echo $arr['4']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['4']['name'] ?>">
            <h2 class="mt-3"><?php echo $arr['4']['name'] ?></h2>
            <p><?php echo $arr['4']['description'] ?></p>
            <p><a class="btn btn-outline-danger" href="?i=product4">Dê uma olhada</a></p>
        </div>
        <div class="col-lg-4 mt-5">
            <img src="<?php echo $arr['5']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['5']['name'] ?>">
            <h2 class="mt-3"><?php echo $arr['5']['name'] ?></h2>
            <p><?php echo $arr['5']['description'] ?></p>
            <p><a class="btn btn-outline-danger" href="?i=product5">Dê uma olhada</a></p>
        </div>
        <div class="col-lg-4 mt-5">
            <img src="<?php echo $arr['6']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['6']['name'] ?>">
            <h2 class="mt-3"><?php echo $arr['6']['name'] ?></h2>
            <p><?php echo $arr['6']['description'] ?></p>
            <p><a class="btn btn-outline-secondary" href="#" disabled>Dê uma olhada</a></p>
        </div>
    </div>
    <div class="container my-5">
        <h2 class="featurette-heading">Notícias em breve ...<span class="text-muted">espere um pouco mais</span></h2>
        <p class="lead">Estamos nos preparando com mais cuidado sobre o que você vai gostar muito ... açúcar! :D</p>
    </div>
</main>