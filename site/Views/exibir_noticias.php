
    <main class="pagina-principal">

        <!-- COLOCAR O CARROSSEL DO HOME AQUI -->
        <section class="pagina-principal__texto-imagem">
            <div class="texto-imagem__texto">
                <h1>Curabitur molestie</h1>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, sint autem voluptas nam 
                    laudantium possimus quos ipsum? Dolorum reiciendis 

                    illo sed quis enim nesciunt ducimus impedit, obcaecati quas temporibus eligendi?<br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, sint autem voluptas nam 
                    laudantium possimus quos ipsum? Dolorum reiciendis 
                    illo sed quis enim nesciunt ducimus impedit, obcaecati quas temporibus eligendi?
                </p>
            </div>
            <div class="texto-imagem__imagem">
                <img src="Midias/img/img-principal.png" alt="Imagem cabeçalho">
            </div>
        </section>

        <!-- NOTÍCIAS CARREGADAS DO BANCO DE DADOS -->
        <section class="container-noticia">
        <div class="noticia__item">
                <p class="noticia__item-categoria">categoria</p>
                <div class="noticia__item-imagem">
                    <img src="Midias/img/foto-generica.png" alt="">
                </div>
                <div class="noticia__item-texto">
                    <h1 class="noticia__item-texto__titulo">Pharetra, mauris</h1>
                    <p class="noticia__item-texto__paragrafo">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis esse sunt culpa porro nostrum 
                        eius adipisci, unde distinctio laboriosam blanditiis cumque quis dolor?
                    </p>
                    <a class="noticia__item-texto__link-acessar" href="#">acessar</a>
                </div>
            </div>
        <?php
            for($i=0; $i < count($this->dados); $i++)
            {?>
                
                <div class="noticia__item">
                    <p class="noticia__item-categoria"><?php echo $this->dados[$i]['nomecategoria']?></p>
                    <div class="noticia__item-imagem">
                        <img src="
                        <?php
                            echo 'Midias/img-database/'.$this->dados[$i]['imgnoticias'];
                        ?>" alt="">
                    </div>
                    <div class="noticia__item-texto">
                        <h1 class="noticia__item-texto__titulo"><?php echo $this->dados[$i]['titulonoticia']?></h1>
                        <p class="noticia__item-texto__paragrafo"><?php echo $this->dados[$i]['conteudonoticia']?></p>
                        <a class="noticia__item-texto__link-acessar" href="#">acessar</a>
                    </div>
                </div>
            <?php    
            }
        ?>
        </section>
    </main>

    
