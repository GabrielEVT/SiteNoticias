<main class="pagina-cadastro" id="noticia">
    <form action="process.php" method="post" enctype="multipart/form-data" class="formulario">
        <h1 class="formulario__h1">Cadastro de Notícias</h1> 
        <input type="text" name="titulo" placeholder="Título" required>
        <select name="fk_categoria" placeholder="Selecione a categoria" required>
            <option value="" selected disabled hidden>Selecione a categoria</option>
            <?php
                for($i=0; $i < count($this->dados); $i++)
                {?>
                    <option value="<?php echo $this->dados[$i]['idcategoria'];?>">
                    <?php
                        echo $this->dados[$i]['nomecategoria'];
                    ?>
                    </option>
                <?php
                }
            ?>
        </select>
        <label for="arquivo">
            <img src="Midias/img/seleciona-imagem-icone.png" alt=""> Selecione uma imagem
        </label>
        <input type="file" name="arquivo" id="arquivo" required>
        <textarea class="text-area" name="corpo" cols="30" rows="10" placeholder="Corpo da notícia" required></textarea>
        <div class="container__reset-submit">
            <input type="reset" value="Limpar" class="button" id="input-limpar">
            <input type="submit" value="Salvar" class="button" id="input-salvar">
        </div>
    </form>
</main>
