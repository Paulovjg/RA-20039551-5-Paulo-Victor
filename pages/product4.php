<?php
    include 'data/products.php'
?>
<head>
    <title>Donna Doce | Doce de abóbora</title>
</head>
<main>
    <div class="container p-3 mb-0 bg-dark text-light">
        <div class="container-fluid d-flex justify-content-between px-5 py-5">
            <div>
                <div>
                    <h1 class="display-5 fw-bold"><?php echo $arr['4']['name'] ?></h1>
                    <p class="col-md-8 fs-4"><?php echo $arr['4']['about'] ?></p>
                    <p>__________________________________________________</p><br>
                </div>
                <div class="mt-5">
                    <p class="mb-0">à venda por apenas</p>
                    <p class="display-1">$<?php echo $arr['4']['price'] ?><span class="fs-6">/UN</span></p>
                    <button type="button" class="btn btn-success btn-lg me-2">Comprar</button>
                    <button type="button" class="btn btn-outline-success btn-lg">Experimente Grátis</button>
                </div>
            </div>
            <img src="./img/docedeabobora2.png" width="700px" alt="Doce de abóbora">
        </div>
        <div class="container p-5 pt-0 pb-5">
            <div class="container">
                <h1>Você sabia?</h1> <br>
                <p>
                    The descendants of Slovaks and Saxons recount that a little red-haired and freckled boy, with very white skin, had found a little girlfriend. Knowing that she was very fond of the jams from the Portuguese's sale, the imported redhead had decided to ask his mother, a stocky and tall Dutch woman, to prepare him a pumpkin candy. The owner did it, but it was pasty and looking like jelly. The redhead, a smart big boy, invented it to scare the candy. There was no other: the candy was scared and hardened. He shaped hearts, he was a present for his girlfriend. And so the redhead presented his suitor with one of the best-known delicacies in the interior of the countryside.
                </p>
            </div>
        </div>    
    </div>
    <div class="container pt-0 mb-4 bg-light rounded-3">
        <div class="container px-5 py-5">
            <h1>Você também pode</h1> <br>
            <p class="">Você está pensando em receber em casa? nós também temos: <br></p>
            <img src="./img/ifood.png" width="250px" alt="ifood" class="mt-3 me-5">
            <img src="./img/uber-eats.png" width="250px" alt="uber-eats" class="mt-3 me-5">
            <img src="./img/rappi.png" width="250px" alt="uber-eats" class="mt-3">
        </div>
    </div>
</main>