
    <main class="pagina-principal">
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
        <section class="cards-noticias">
            <div class="noticia-item">
                <div class="noticia-categoria">categoria</div>
                <img class= "noticia-imagem" src="https://source.unsplash.com/user/willianjusten/1800x801" alt="">
                <div class="noticia-informacoes">
                    <h1 class="noticia-titulo">Título notícia</h1>
                    <p class="noticia-paragrafo">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, 
                        omnis reprehenderit quia sit repudiandae quam neque temporibus explicabo!
                        Aliquam ullam quam odit rerum ipsam eum officiis ex laborum. Molestiae, odio?
                        
                    </p>
                    <a class="noticia-editar" href="#">EDITAR</a>
                </div>
            </div>
            <?php
                for($i=0; $i < count($this->dados); $i++)
                {?>
                    <div class="noticia-item">
                        <div class="noticia-categoria"><?php echo $this->dados[$i]['nomecategoria']?></div>
                        <img class="noticia-imagem" src="
                        <?php 
                            echo 'Midias/img-database/'.$this->dados[$i]['imgnoticias'];
                        ?>" alt="">
                        <div class="noticia-informacoes">
                            <h1 class="noticia-titulo"><?php echo $this->dados[$i]['titulonoticia']?></h1>
                            <p class="noticia-paragrafo"><?php echo $this->dados[$i]['conteudonoticia']?></p>
                            <a class="noticia-editar" href="#">EDITAR</a>
                        </div>
                    </div>
                <?php    
                }
            ?>
            <!-- <div class="noticia-item">
                <div class="noticia-categoria">CATEGORIA</div>
                <img class= "noticia-imagem" src="https://source.unsplash.com/user/willianjusten/1800x802" alt="">
                <div class="noticia-informacoes">
                    <h1 class="noticia-titulo">Título notícia</h1>
                    <p class="noticia-paragrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. In eius maxime repellat, eligendi officiis atque, ipsa iste suscipit odio cum ut, itaque nobis vitae eveniet pariatur quo blanditiis esse a!</p>

                    <a class="noticia-editar" href="#">EDITAR</a>
                </div>
            </div>
            <div class="noticia-item">
                <div class="noticia-categoria">CATEGORIA</div>
                <img class= "noticia-imagem" src="https://source.unsplash.com/user/willianjusten/1800x810" alt="">
                <div class="noticia-informacoes">
                    <h1 class="noticia-titulo">Título notícia</h1>
                    <p class="noticia-paragrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. In eius maxime repellat, eligendi officiis atque, ipsa iste suscipit odio cum ut, itaque nobis vitae eveniet pariatur quo blanditiis esse a!</p>

                    <a class="noticia-editar" href="#">EDITAR</a>
                </div>
            </div>
            <div class="noticia-item">
                <div class="noticia-categoria">CATEGORIA</div>
                <img class= "noticia-imagem" src="https://source.unsplash.com/user/willianjusten/1800x803" alt="">
                <div class="noticia-informacoes">
                    <h1 class="noticia-titulo">Título notícia</h1>
                    <p class="noticia-paragrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. In eius maxime repellat, eligendi officiis atque, ipsa iste suscipit odio cum ut, itaque nobis vitae eveniet pariatur quo blanditiis esse a!</p>

                    <a class="noticia-editar" href="#">EDITAR</a>
                </div>
            </div>
            <div class="noticia-item">
                <div class="noticia-categoria">CATEGORIA</div>
                <img class= "noticia-imagem" src="https://source.unsplash.com/user/willianjusten/1800x804" alt="">
                <div class="noticia-informacoes">
                    <h1 class="noticia-titulo">Título notícia</h1>
                    <p class="noticia-paragrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. In eius maxime repellat, eligendi officiis atque, ipsa iste suscipit odio cum ut, itaque nobis vitae eveniet pariatur quo blanditiis esse a!</p>

                    <a class="noticia-editar" href="#">EDITAR</a>
                </div>
            </div>
            <div class="noticia-item">
                <div class="noticia-categoria">CATEGORIA</div>
                <img class= "noticia-imagem" src="https://source.unsplash.com/user/willianjusten/1800x805" alt="">
                <div class="noticia-informacoes">
                    <h1 class="noticia-titulo">Título notícia</h1>
                    <p class="noticia-paragrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. In eius maxime repellat, eligendi officiis atque, ipsa iste suscipit odio cum ut, itaque nobis vitae eveniet pariatur quo blanditiis esse a!</p>

                    <a class="noticia-editar" href="#">EDITAR</a>
                </div>
            </div>
            <div class="noticia-item">
                <div class="noticia-categoria">CATEGORIA</div>
                <img class= "noticia-imagem" src="https://source.unsplash.com/user/willianjusten/1800x806" alt="">
                <div class="noticia-informacoes">
                    <h1 class="noticia-titulo">Título notícia</h1>
                    <p class="noticia-paragrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. In eius maxime repellat, eligendi officiis atque, ipsa iste suscipit odio cum ut, itaque nobis vitae eveniet pariatur quo blanditiis esse a!</p>
                    <a class="noticia-editar" href="#">EDITAR</a>
                </div>
            </div>
            <div class="noticia-item">
                <div class="noticia-categoria">CATEGORIA</div>
                <img class= "noticia-imagem" src="https://source.unsplash.com/user/willianjusten/1800x807" alt="">
                <div class="noticia-informacoes">
                    <h1 class="noticia-titulo">Título notícia</h1>
                    <p class="noticia-paragrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. In eius maxime repellat, eligendi officiis atque, ipsa iste suscipit odio cum ut, itaque nobis vitae eveniet pariatur quo blanditiis esse a!</p>
                    <a class="noticia-editar" href="#">EDITAR</a>
                </div>
            </div> -->            
        </section>
        <!-- <section class="container-noticia">
        <div class="noticia__item">
            <p class="noticia__item-categoria">categoria</p>
            <div class="noticia__item-imagem">
                <img src="Midias/img/foto-generica.png" alt="">
            </div>
            <div class="noticia__item-texto">
                <h1 class="noticia__item-teTítulo notíciaharetra, mauris</h1>
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
                        <h1 class="noticia__item-teTítulo notícia?php echo $this->dados[$i]['titulonoticia']?></h1>
                        <p class="noticia__item-texto__paragrafo"><?php echo $this->dados[$i]['conteudonoticia']?></p>
                        <a class="noticia__item-texto__link-acessar" href="#">acessar</a>
                    </div>
                </div>
            <?php    
            }
        ?>
</section> -->
    </main>

    
