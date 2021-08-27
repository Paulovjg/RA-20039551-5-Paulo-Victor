<?php
    include 'data/products.php'
?>
<head>
    <title>Donna Doces | Brigadeiro</title>
</head>
<main>
    <div class="container p-3 mb-0 bg-dark text-light">
        <div class="container-fluid d-flex justify-content-between px-5 py-5">
            <div>   
                <div>
                    <h1 class="display-5 fw-bold"><?php echo $arr['1']['name'] ?></h1>
                    <p class="col-md-8 fs-4"><?php echo $arr['1']['about'] ?></p>
                    <p>__________________________________________________</p><br>
                </div>
                <div class="mt-5">
                    <p class="mb-0">à venda por apenas</p>
                    <p class="display-1">$<?php echo $arr['1']['price'] ?><span class="fs-6">/UN</span></p>
                    <button type="button" class="btn btn-success btn-lg me-2">Comprar</button>
                    <button type="button" class="btn btn-outline-success btn-lg">Experimente Grátis</button>
                </div>
            </div>
            <img src="./img/brigadeiro2.png" width="700px" alt="brigadeiro"> 
        </div> 
    </div> 
    <div class="container p-5 pt-0 pb-5">    
        <div class="container">
            <h1>Você sabia?</h1> <br>
            <p>
                Jokes apart, brigadeiro is a candy with an interesting story. <br>
                Right after WW2, while Rio de Janeiro was still Brazil’s capital, the country was busy with the reelection of the new president.
                One of the candidates, Brigadier Eduardo Gomes, besides being quite charming, was considered a handsome man by the female voters, who were finally allowed to vote in 1932.
                Brigadier Eduardo Gomes, the brigadeiro
                Flyer of Eduardo Gomes. 1945 Brazil Presidential Campaign
                To show their candidate support, these voters prepared sweets to serve in rallies and public meetings.
                Mind you, brigadeiro was named after the candidate’s title, brigadier, but in Portuguese.
                But because it was a post-war period, the country was still rationing many ingredients and products.
                And instead of using milk and sugar, as in most desserts, Heloísa Nabuco de Olivera–the 
                creator of brigadeiro–used sweetened condensed milk to prepare this delicious Brazilian sweet.
            </p>
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