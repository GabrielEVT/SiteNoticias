let botaoCadastrarNoticia = document.getElementById('input-salvar')
botaoCadastrarNoticia.addEventListener('click', CadastrarNoticia)

function CadastrarNoticia() {
    let campoTituloNoticia = document.getElementById('campo-titulo-noticia').value
    let mensagemTituloNoticia = document.getElementById('titulo-noticia-mensagem')
    if(campoTituloNoticia.length == 0) {
        mensagemTituloNoticia.setAttribute("class", "validacaoInvalida")
        mensagemTituloNoticia.innerHTML = "Insira o título da notícia"
    } else {
        mensagemTituloNoticia.setAttribute("class", "validacaoSucesso")
        mensagemTituloNoticia.innerHTML = "Ok!"
    }
    let campoCategoriaNoticia = document.getElementById('campo-categoria-noticia').value
    let mensagemCategoriaNoticia = document.getElementById('categoria-noticia-mensagem')
    if(campoCategoriaNoticia == 'vazio'){
        mensagemCategoriaNoticia.setAttribute("class", "validacaoInvalida")
        mensagemCategoriaNoticia.innerHTML = "Selecione uma categoria"
    } else {
        mensagemCategoriaNoticia.setAttribute("class", "validacaoSucesso")
        mensagemCategoriaNoticia.innerHTML = "Ok"
    }
    let campoCorpoNoticia = document.getElementById('campo-corpo-noticia').value
    let mensagemCorpoNoticia = document.getElementById('corpo-noticia-mensagem')
    if(campoCorpoNoticia.length == 0) {
        mensagemCorpoNoticia.setAttribute("class", "validacaoInvalida")
        mensagemCorpoNoticia.innerHTML = "Insira um texto para o corpo da notícia"
    } else if(campoCorpoNoticia.length > 200){
        mensagemCorpoNoticia.setAttribute("class", "validacaoInvalida")
        mensagemCorpoNoticia.innerHTML = "Insira no máximo 200 caracteres"
    } else {
        mensagemCorpoNoticia.setAttribute("class", "validacaoSucesso")
        mensagemCorpoNoticia.innerHTML = "Ok!"
    }
}