<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../PI/public/css/navbar.css">
    <link rel="stylesheet" href="../PI/public/css/home.css">
    <link rel="stylesheet" href="../PI/public/css/footer.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script defer src="../PI/public/js/home.js"></script>
</head>
<body>
    <?php include __DIR__.'/includes/navbar-home.php'; ?>
    <section class="slider">
        <div class="slider-content">
            <input type="radio" name="btn-radio" id="radio1">
            <input type="radio" name="btn-radio" id="radio2">
            <input type="radio" name="btn-radio" id="radio3">
        

        <div class="slide-box primeiro">
            <a href="#"><img src="public/assets/img/carrossel 1.png" alt="" class="img-desktop"></a>
        </div>
        <div class="slide-box">
            <a href="#"><img src="public/assets/img/carrossel 2.png" alt="" class="img-desktop"></a>
        </div>
        <div class="slide-box">
            <a href="#"><img src="public/assets/img/carrossel 3.png" alt="" class="img-desktop"></a>
        </div>


        <!-- .nav-auto>.auto-btn1*3 -->
        <div class="nav-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
        </div>

        <!-- .nav-manual>label.manual-btn*3 -->
        <div class="nav-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
        </div>

        </div>
    </section>

    <img id="ad-produto" src="public/assets/img/ad-produtos.png" alt="">

    <!-- <div class="container-ad">
        <div class="ad-left">
            <div class="ad-imagem">
                <img src="public/assets/img/fone_de_ouvido_ad.png" alt="">
            </div>
            <div class="ad-text ad-text1">
                <h1>Fone de <br> Ouvido <br><span>Edifier</span></h1>
                <p>Microfone com até 55 <br>Horas de bateria.</p>
            </div>
        </div>
        <div class="ad-right">
            
            <div class="ad-imagem ad-imagem2">
                <img class="img-fix" src="public/assets/img/playstation.png" alt="">
            </div>
            <div class="ad-text ad-text2">
                <h1><span>NOVO</span> Playstation<br> 5 <br></h1>
                <p>Carregamento  rápido com SSD de altíssima velocidade.</p>
            </div>
        </div>
    </div> -->

    <div class="categorias">
        <div class="categorias-content">
            <div class="categorias-text">
                <div class="text">
                    <h1>Categorias</h1>
                </div>
            </div>
            <div class="categorias-card">
                <div class="card card1">
                    <img src="public/assets/img/phone-icon.png" alt="hardware">
                    <p>Hardwares</p>
                </div>
                <div class="card card2">
                    <img src="public/assets/img/perifericos-icon.png" alt="periféricos">
                    <p>Periféricos</p>
                </div>
                <div class="card card3">
                    <img src="public/assets/img/energia-icon.png" alt="periféricos">
                    <p>Energia</p>
                </div>
                <div class="card card4">
                    <img src="public/assets/img/audio-icon.png" alt="periféricos">
                    <p>Aúdio</p>
                </div>
                <div class="card card5">
                    <img src="public/assets/img/computadores-icon.png" alt="periféricos">
                    <p>Computadores</p>
                </div>
                <div class="card card6">
                    <img src="public/assets/img/jogos-icon.png" alt="periféricos">
                    <p>Jogos</p>
                </div>
            </div>
        </div>
    </div>

    <section class="produtos">
        <div class="tabs">
            <button class="tab-button tab-button1">Novos Produtos</button>
            <button class="tab-button" id="opacidade">Mais Vendidos</button>
            <button class="tab-button" id="opacidade">Pacotes em Destaque</button>
        </div>

        
        <div class="produtos-grid">
            <div class="produtos-card">
                <img class="heart" src="public/assets/img/heart_disabled.png" alt="coração" onclick="AtivarCoracao(this)">

                <a href="../PI/App/user/View/pages/Carrinho.php"><img class="add-carrinho" src="public/assets/img/carrinho-card.png" alt=""></a>

                <img class="image-produto" src="public/assets/img/card-produto.png" alt="">
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span class="qnt-avaliacoes">(500+)</span>
                </div>
                <p>Cadeira Gamer</p>
                <p>GAMING Tempest CG500</p>
                <h1>R$900,99</h1>
                <button class="card-botao">Comprar Agora</button>
            </div>
            <div class="produtos-card">
                <img class="heart" src="public/assets/img/heart_disabled.png" alt="coração" onclick="AtivarCoracao(this)">

                <a href="../PI/App/user/View/pages/Carrinho.php"><img class="add-carrinho" src="public/assets/img/carrinho-card.png" alt=""></a>

                <img class="image-produto" src="public/assets/img/card-produto2.png" alt="">
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span class="qnt-avaliacoes">(500+)</span>
                </div>
                <p>Monitor Gamer Curvo</p>
                <p>GAMING MG700 27</p>
                <h1>R$2535,99</h1>
                <button class="card-botao">Comprar Agora</button>
            </div>
            <div class="produtos-card">
                <img class="heart" src="public/assets/img/heart_disabled.png" alt="coração" onclick="AtivarCoracao(this)">

                <a href="../PI/App/user/View/pages/Carrinho.php"><img class="add-carrinho" src="public/assets/img/carrinho-card.png" alt=""></a>

                <img class="image-produto" src="public/assets/img/card-produto2.png" alt="">
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span class="qnt-avaliacoes">(500+)</span>
                </div>
                <p>Monitor Gamer Curvo</p>
                <p>GAMING MG700 27</p>
                <h1>R$2535,99</h1>
                <button class="card-botao">Comprar Agora</button>
            </div>
            <div class="produtos-card">
                <img class="heart" src="public/assets/img/heart_disabled.png" alt="coração" onclick="AtivarCoracao(this)">

                <a href="../PI/App/user/View/pages/Carrinho.php"><img class="add-carrinho" src="public/assets/img/carrinho-card.png" alt=""></a>

                <img class="image-produto" src="public/assets/img/card-produto2.png" alt="">
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span class="qnt-avaliacoes">(500+)</span>
                </div>
                <p>Monitor Gamer Curvo</p>
                <p>GAMING MG700 27</p>
                <h1>R$2535,99</h1>
                <button class="card-botao">Comprar Agora</button>
            </div>
            <div class="produtos-card">
                <img class="heart" src="public/assets/img/heart_disabled.png" alt="coração" onclick="AtivarCoracao(this)">

                <a href="../PI/App/user/View/pages/Carrinho.php"><img class="add-carrinho" src="public/assets/img/carrinho-card.png" alt=""></a>

                <img class="image-produto" src="public/assets/img/card-produto2.png" alt="">
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span class="qnt-avaliacoes">(500+)</span>
                </div>
                <p>Monitor Gamer Curvo</p>
                <p>GAMING MG700 27</p>
                <h1>R$2536,99</h1>
                <button class="card-botao">Comprar Agora</button>
            </div>
            <div class="produtos-card">
                <img class="heart" src="public/assets/img/heart_disabled.png" alt="coração" onclick="AtivarCoracao(this)">

                <a href="../PI/App/user/View/pages/Carrinho.php"><img class="add-carrinho" src="public/assets/img/carrinho-card.png" alt=""></a>

                <img class="image-produto" src="public/assets/img/card-produto2.png" alt="">
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span class="qnt-avaliacoes">(500+)</span>
                </div>
                <p>Monitor Gamer Curvo</p>
                <p>GAMING MG700 27</p>
                <h1>R$2535,99</h1>
                <button class="card-botao">Comprar Agora</button>
            </div>
            <div class="produtos-card">
                <img class="heart" src="public/assets/img/heart_disabled.png" alt="coração" onclick="AtivarCoracao(this)">

                <a href="../PI/App/user/View/pages/Carrinho.php"><img class="add-carrinho" src="public/assets/img/carrinho-card.png" alt=""></a>

                <img class="image-produto" src="public/assets/img/card-produto2.png" alt="">
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span class="qnt-avaliacoes">(500+)</span>
                </div>
                <p>Monitor Gamer Curvo</p>
                <p>GAMING MG700 27</p>
                <h1>R$2535,99</h1>
                <button class="card-botao">Comprar Agora</button>
            </div>
            <div class="produtos-card">
                <img class="heart" src="public/assets/img/heart_disabled.png" alt="coração" onclick="AtivarCoracao(this)">

                <a href="../PI/App/user/View/pages/Carrinho.php"><img class="add-carrinho" src="public/assets/img/carrinho-card.png" alt=""></a>

                <img class="image-produto" src="public/assets/img/card-produto2.png" alt="">
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span class="qnt-avaliacoes">(500+)</span>
                </div>
                <p>Monitor Gamer Curvo</p>
                <p>GAMING MG700 27</p>
                <h1>R$2535,99</h1>
                <button class="card-botao">Comprar Agora</button>
            </div>
        </div>
        <div class="promo-text">
            <p>Produtos com 50% OFF</p>
        </div>

        <div class="produtos-grid">
            <div class="produtos-card">
                <img class="heart" src="public/assets/img/heart_disabled.png" alt="coração" onclick="AtivarCoracao(this)">

                <a href="../PI/App/user/View/pages/Carrinho.php"><img class="add-carrinho" src="public/assets/img/carrinho-card.png" alt=""></a>

                <img class="image-produto" src="public/assets/img/card-produto2.png" alt="">
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span class="qnt-avaliacoes">(500+)</span>
                </div>
                <p>Monitor Gamer Curvo</p>
                <p>GAMING MG700 27</p>
                <h1>R$2535,99</h1>
                <button class="card-botao">Comprar Agora</button>
            </div>
            <div class="produtos-card">
                <img class="heart" src="public/assets/img/heart_disabled.png" alt="coração" onclick="AtivarCoracao(this)">

                <a href="../PI/App/user/View/pages/Carrinho.php"><img class="add-carrinho" src="public/assets/img/carrinho-card.png" alt=""></a>

                <img class="image-produto" src="public/assets/img/card-produto2.png" alt="">
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span class="qnt-avaliacoes">(500+)</span>
                </div>
                <p>Monitor Gamer Curvo</p>
                <p>GAMING MG700 27</p>
                <h1>R$2535,99</h1>
                <button class="card-botao">Comprar Agora</button>
            </div>
            <div class="produtos-card">
                <img class="heart" src="public/assets/img/heart_disabled.png" alt="coração" onclick="AtivarCoracao(this)">

                <a href="../PI/App/user/View/pages/Carrinho.php"><img class="add-carrinho" src="public/assets/img/carrinho-card.png" alt=""></a>

                <img class="image-produto" src="public/assets/img/card-produto2.png" alt="">
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span class="qnt-avaliacoes">(500+)</span>
                </div>
                <p>Monitor Gamer Curvo</p>
                <p>GAMING MG700 27</p>
                <h1>R$2535,99</h1>
                <button class="card-botao">Comprar Agora</button>
            </div>
            <div class="produtos-card">
                <img class="heart" src="public/assets/img/heart_disabled.png" alt="coração" onclick="AtivarCoracao(this)">

                <a href="../PI/App/user/View/pages/Carrinho.php"><img class="add-carrinho" src="public/assets/img/carrinho-card.png" alt=""></a>

                <img class="image-produto" src="public/assets/img/card-produto2.png" alt="">
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span class="qnt-avaliacoes">(500+)</span>
                </div>
                <p>Monitor Gamer Curvo</p>
                <p>GAMING MG700 27</p>
                <h1>R$2535,99</h1>
                <button class="card-botao">Comprar Agora</button>
            </div>
        </div>
    </section>

    </div>
    <!-- Segundo carrossel feito usando Swiper pra ser mais facil. -->
    <!-- <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><a href="#"><img src="public/assets/img/slider-img1.png" alt=""></a></div>
          <div class="swiper-slide"><a href="#"><img src="public/assets/img/slider-img2.png" alt=""></a></div>
          <div class="swiper-slide"><a href="#"><img src="public/assets/img/slider-img3.png" alt=""></a></div>
          <div class="swiper-slide"><a href="#"><img src="public/assets/img/slider-img1.png" alt=""></a></div>
          <div class="swiper-slide"><a href="#"><img src="public/assets/img/slider-img2.png" alt=""></a></div>
          <div class="swiper-slide"><a href="#"><img src="public/assets/img/slider-img3.png" alt=""></a></div>
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div> -->

      <div class="anuncios">
        <a href="App/user/View/pages/task20-kitsetup.php"><img src="public/assets/img/Do seu jeito.png" alt=""></a>
        <a href="App/user/View/pages/do-seu-jeito.php"><img src="public/assets/img/Do seu jeito 2.png" alt=""></a>
        <img src="public/assets/img/Do seu jeito 3.png" alt="">
      </div>

      <section class="produtos produtos2">
        <div class="promo-text">
            <p>Promoções de natal</p>
        </div>
        <div class="produtos-grid">
            <div class="produtos-card">
                <img class="heart" src="public/assets/img/heart_disabled.png" alt="coração" onclick="AtivarCoracao(this)">

                <a href="../PI/App/user/View/pages/Carrinho.php"><img class="add-carrinho" src="public/assets/img/carrinho-card.png" alt=""></a>

                <img class="image-produto" src="public/assets/img/card-produto2.png" alt="">
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span class="qnt-avaliacoes">(500+)</span>
                </div>
                <p>Monitor Gamer Curvo</p>
                <p>GAMING MG700 27</p>
                <h1>R$2535,99</h1>
                <button class="card-botao">Comprar Agora</button>
            </div>
            <div class="produtos-card">
                <img class="heart" src="public/assets/img/heart_disabled.png" alt="coração" onclick="AtivarCoracao(this)">

                <a href="../PI/App/user/View/pages/Carrinho.php"><img class="add-carrinho" src="public/assets/img/carrinho-card.png" alt=""></a>

                <img class="image-produto" src="public/assets/img/card-produto2.png" alt="">
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span class="qnt-avaliacoes">(500+)</span>
                </div>
                <p>Monitor Gamer Curvo</p>
                <p>GAMING MG700 27</p>
                <h1>R$2535,99</h1>
                <button class="card-botao">Comprar Agora</button>
            </div>
            <div class="produtos-card">
                <img class="heart" src="public/assets/img/heart_disabled.png" alt="coração" onclick="AtivarCoracao(this)">

                <a href="../PI/App/user/View/pages/Carrinho.php"><img class="add-carrinho" src="public/assets/img/carrinho-card.png" alt=""></a>

                <img class="image-produto" src="public/assets/img/card-produto2.png" alt="">
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span class="qnt-avaliacoes">(500+)</span>
                </div>
                <p>Monitor Gamer Curvo</p>
                <p>GAMING MG700 27</p>
                <h1>R$2535,99</h1>
                <button class="card-botao">Comprar Agora</button>
            </div>
            <div class="produtos-card">
                <img class="heart" src="public/assets/img/heart_disabled.png" alt="coração" onclick="AtivarCoracao(this)">

                <a href="../PI/App/user/View/pages/Carrinho.php"><img class="add-carrinho" src="public/assets/img/carrinho-card.png" alt=""></a>

                <img class="image-produto" src="public/assets/img/card-produto2.png" alt="">
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span class="qnt-avaliacoes">(500+)</span>
                </div>
                <p>Monitor Gamer Curvo</p>
                <p>GAMING MG700 27</p>
                <h1>R$2535,99</h1>
                <button class="card-botao">Comprar Agora</button>
            </div>
        </div>
      </section>

      <div class="img-anuncio">
        <a href="#"><img src="public/assets/img/banner tweeb carnaval.png" alt="anuncio carnaval"></a>
      </div>

    <button id="voltarAoTopo" title="Voltar ao topo"><i class="fa-solid fa-angle-up"></i></button>
    <?php include __DIR__.'/includes/footer-home.php'; ?>
</body>
</html>