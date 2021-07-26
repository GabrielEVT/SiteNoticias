<main class="pagina-cadastro" id="noticia">
    <form action="cadastro_noticias/cadastrar" method="post" enctype="multipart/form-data" class="formulario">
        <h1 class="formulario__h1">Cadastro de Notícias</h1> 
        <input type="text" name="titulo" placeholder="Título" id="campo-titulo-noticia">
        <div id="titulo-noticia-mensagem"></div>
        <select name="fk_categoria" placeholder="Selecione a categoria" id="campo-categoria-noticia">
            <option value="vazio" selected>Selecione a categoria</option>
            <?php
                for($i=0; $i < count($this->dados); $i++)
                {?>
                    <option value="<?=$this->dados[$i]['idcategoria'];?>">
                    <?=$this->dados[$i]['nomecategoria'];
                    ?>
                    </option>
                <?php
                }
            ?>
        </select>
        <div id="categoria-noticia-mensagem"></div>
        <label for="arquivo">
            <img src="Midias/img/seleciona-imagem-icone.png" alt=""> Selecione uma imagem
        </label>
        <input type="file" name="arquivo" id="arquivo" >
        <div id="imagem-noticia-mensagem"></div>
        <textarea class="text-area" name="corpo" cols="30" rows="10" placeholder="Corpo da notícia" id="campo-corpo-noticia" ></textarea>
        <div id="corpo-noticia-mensagem"></div>
        <div class="container__reset-submit">
            <input type="reset" value="Limpar" class="button" id="input-limpar">
            <input type="submit" value="Salvar" class="button" id="input-salvar">
        </div>
    </form>
    <script src="./Scripts/validarCadastroNoticia.js"></script>
</main>
