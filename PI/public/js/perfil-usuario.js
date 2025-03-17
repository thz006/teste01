
document.addEventListener("DOMContentLoaded", () => {
    const botaoEditarFoto = document.querySelector(".perfil-tweeb-editar-foto");  // Ícone de editar
    const camposInput = document.querySelectorAll(".perfil-tweeb-form input:not(#cpf)");
    const botaoSalvar = document.querySelector(".perfil-tweeb-salvar");
    const botaoCancelar = document.querySelector(".perfil-tweeb-cancelar");
    const header = document.querySelector(".perfil-tweeb-header");  // Seleciona o cabeçalho

    // Inicia desativando os campos
    camposInput.forEach(input => input.setAttribute("disabled", "true"));

    // Oculta botões "Salvar" e "Cancelar" no início
    botaoSalvar.style.display = "none";
    botaoCancelar.style.display = "none";

    // Torna os campos editáveis ao clicar no ícone de editar
    botaoEditarFoto.addEventListener("click", () => {
        camposInput.forEach(input => input.removeAttribute("disabled"));
        
        // Exibe botões de ação
        botaoSalvar.style.display = "inline-block";
        botaoCancelar.style.display = "inline-block";

        // Adiciona a classe para aumentar o margin-top
        header.classList.add("margin-top-aumentado");
    });

    // Simula o envio do formulário ao clicar em "Salvar alteração"
    botaoSalvar.addEventListener("click", (event) => {
        event.preventDefault();
        alert("Alterações salvas com sucesso!");
        camposInput.forEach(input => input.setAttribute("disabled", "true"));
        
        // Esconde os botões novamente
        botaoSalvar.style.display = "none";
        botaoCancelar.style.display = "none";

        // Remove a classe para voltar o margin-top ao normal
        header.classList.remove("margin-top-aumentado");
    });
    
    // Cancela edição e restaura os valores originais ao clicar em "Cancelar"
    botaoCancelar.addEventListener("click", (event) => {
        event.preventDefault();
        camposInput.forEach(input => {
            input.value = input.defaultValue; // Restaura valor original
            input.setAttribute("disabled", "true");
        });

        // Esconde os botões novamente
        botaoSalvar.style.display = "none";
        botaoCancelar.style.display = "none";

        // Remove a classe para voltar o margin-top ao normal
        header.classList.remove("margin-top-aumentado");
    });
});
