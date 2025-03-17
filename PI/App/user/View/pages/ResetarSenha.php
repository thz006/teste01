<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refazer Senha</title>
    <script src="../../../../public/js/resetarSenha.js" defer></script>
    <link rel="stylesheet" href="../../../../public/css/ResetarSenha.Css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-resetar">
        <div class="forms-resetar">
            <form action="">
                <a href="#" class="voltar"><i class='bx bx-chevron-left'></i>< Voltar</a>
                <h1 class="titulo">Refazer Senha</h1>
                <p class="sutitulo">Sua conta irá ser resetada. Por favor, digite uma nova senha para sua conta.</p>
                
                <div class="input-group w50">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha." required>
                    <i class="bi bi-eye-fill" id="btn-senha1" onclick="mostraSenha('senha', 'btn-senha1')"></i>
                </div>
                <div class="input-group w50">
                    <label for="confirmar_senha">Confirmar Senha</label>
                    <input type="password" name="confirmar_senha" id="confirmar_senha" placeholder="Confirme sua senha" required>
                    <i class="bi bi-eye-fill" id="btn-senha2" onclick="mostraSenha('confirmar_senha', 'btn-senha2')"></i>
                </div>
                
                <button type="submit" class="Btn">Enviar Senha</button>
            </form>
        </div>
        <div class="image-container-resetar">
            <img src="../../../../public/assets/img/Rectangle 20 (1).png" alt="Imagem refazer senha">
        </div>
    </div>

</body>
</html>
