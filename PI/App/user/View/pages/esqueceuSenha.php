<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueceu sua Senha</title>
    <link rel="stylesheet" href="../../../../public/css/esqueceuSenha.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container-esqueceu">
        <div class="forms-esqueceu">
            <form action="">
                <a href="../../../../home.php" class="back-link"><i class='bx bx-chevron-left'></i> Voltar</a>
                <h1 class="tit">Esqueceu sua senha?</h1>
                <p class="descrit">Não se preocupe, isso acontece com todos nós. Digite seu e-mail abaixo para recuperar sua senha.</p>
                
                <div class="input-box-esqueceu">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Digite seu email" required>
                    <i class='bx bxs-envelop'></i>
                </div>

                <button type="submit" class="btn-esqueceu"><a class="botaolinkar" href="codVerificacao.php">Continuar</a></button>
                <div class="linha">
                    <p class="linha-1"></p>
                    <p class="p1"> ou faça login com </p>
                    <p class="linha-2"></p>
                </div>
                <button type="button" class="bt google"><img src="../../../../public/assets/img/Google.png" alt=""> Google</button>
                
            </form>
        </div>
        <div class="image-container-esqueceu">
            <img src="../../../../public/assets/img/imagem.png" alt="Imagem de Recuperação">
        </div>
    </div>
</body>
</html>
