<main class="pagina-cadastro" id="noticia">
    <!-- <?php   echo "<pre>" ;
        print_r($this->dados); 
        echo "</pre>";?> -->
    <form action="process.php" method="post" enctype="multipart/form-data" class="formulario">
        <h1 class="formulario__h1">Edite a Notícia</h1> 
        <input type="text" name="titulo" placeholder="Título" id="campo-titulo-noticia" value="<?=$this->dados[0]['titulonoticia']?>" required>
        <div id="titulo-noticia-mensagem"></div>
        <select name="fk_categoria" placeholder="Selecione a categoria" id="campo-categoria-noticia" required>
            <option value="vazio" selected>Selecione a categoria</option>
            <?php
                for($i=1; $i < count($this->dados); $i++)
                {?>
                    <option value="<?=$this->dados[$i]['idcategoria']?>">
                    <?php
                        echo $this->dados[$i]['nomecategoria'];
                    ?>
                    </option>
                <?php
                }
            ?>
        </select>
        <div id="categoria-noticia-mensagem"></div>
        <label for="arquivo">
            <img src="Midias/img-database/<?=$this->dados[0]['imgnoticias']?>" alt=""> Selecione uma imagem
        </label>
        <input type="file" name="arquivo" id="arquivo" value="<?=$this->dados[0]['imgnoticias']?>" required>
        <div id="imagem-noticia-mensagem"></div>
        <textarea class="text-area" name="corpo" cols="30" rows="10" placeholder="Corpo da notícia" id="campo-corpo-noticia" required><?=$this->dados[0]['conteudonoticia']?></textarea>
        <div id="corpo-noticia-mensagem"></div>
        <div class="container__reset-submit">
            <a href="../deletarNoticia/<?= $this->dados[0]['idnoticia']?>" class="button" id="input-deletar">Deletar</a>
            <input type="submit" value="Salvar" class="button" id="input-salvar">
        </div>
    </form>
    <script src="./Scripts/validarCadastroNoticia.js"></script>
</main>
