<main class="pagina-cadastro" id="noticia">
    <form action="php/cadastro.php" method="post" class="formulario">
        <h1 class="formulario__h1">Cadastro de Notícias</h1>
        <input type="text" name="titulo" placeholder="Título">
        <select name="categoria" placeholder="Selecione a categoria">
            <option value="" selected disabled hidden>Selecione a categoria</option>
        </select>
        <label for="arquivo">
            <img src="Midias/img/seleciona-imagem-icone.png" alt=""> Selecione uma imagem
        </label>
        <input type="file" name="arquivo" id="arquivo">
        <textarea class="text-area" name="corpo" cols="30" rows="10" placeholder="Corpo da notícia"></textarea>
        <div class="container__reset-submit">
            <input type="reset" value="Limpar" class="button" id="input-limpar">
            <input type="submit" value="Salvar" class="button" id="input-salvar">
    </form>
</main>
