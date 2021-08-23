<?php
include 'layout/header.php';
include 'data/info.php';
?>
<script src="js/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('a#home').css("border-top", "0.25px solid #D90404").css("border-width", "1px").css("color", "#D90404").css("text-shadow", "0px 2px 4px rgba(0, 0, 0, 0.25)");
    });
</script>
<nav>
    <div id="rect-fundo">
    </div>
    <div id="rect-frente">
        <img src="img/section/800px-Brigadeiro.jpg" alt="Foto-de-brigadeiro-de-chocolate" id="brigadeiro" />
        <img src="img/section/Estrelas.png" alt="Foto-de-5-Estrelas" id="estrelas-1" />

        <img src="img/section/paçoca.jpg" alt="Foto-de-brigadeiro-de-paçoca" id="pacoca" id="estrelas-2" />
        <img src="img/section/Estrelas.png" alt="Foto-de-5-Estrelas" id="estrelas-2" />

        <img src="img/section/beijinho.jpg" alt="Foto-de-brigadeiro-de-beijinho" id="beijinho" />
        <img src="img/section/Estrelas.png" alt="Foto-de-5-Estrelas" id="estrelas-3" />

    </div>
</nav>

<main>
    <div id="main-rect-fundo">
        <div id="main-rect-frente">
            <section>
                <header>
                    <h1>Quem somos</h1>
                </header>
                <p style="line-height: 20px;">A fábrica de brigadeiros Lucky Sugar atua no
                    mercado de doces desde 1997</p>
                <a href="https://localhost/mapa/21114086-5_JonatanRenan/pages/quem-somos.php">
                    <button type="submit" value="Ver mais"><span>Ver mais</span></button>
                </a>

                <div class="amostras">
                    <img src="img/main/index/Brigadeiro.jpg" alt="Foto-de-Brigadeiro" id="brigadeiro-2">
                </div>
            </section>



            <section>
                <header>
                    <h1>Onde estamos localizados</h1>
                </header>

                <p style="line-height: 20px;">
                    Estamos localizados no município de <strong>Maringa</strong> do estado de Curitiba - Paraná
                </p>
                <!--
                <section id="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.5313727766566!2d-51.91905498457065!3d-23.441289884742663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e81a413a9c9463%3A0x4e3ee356ad1bd6c3!2sUniCesumar%20-%20Maring%C3%A1!5e0!3m2!1sen!2sbr!4v1628879658720!5m2!1sen!2sbr" width="152" height="125" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </section>
                <-->
                <a href="https://localhost/mapa/21114086-5_JonatanRenan/pages/localizacao.php">
                    <button type="submit" value="Ver mais"><span>Ver Mais</span></button>
                </a>

                <div class="amostras">
                    <img src="img/main/index/casadinho.jpg" alt="Foto-de-Casadinho" id="casadinho">
                </div>
            </section>



            <section>
                <header>
                    <h1>Contato</h1>
                </header>

                <p style="line-height: 20px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore voluptas recusandae explicabo beatae sequi quidem, quibusdam in asperiores mollitia, quaerat at maxime sit inventore. Odio quisquam quam eveniet eaque ipsum?</p>
                
                <a href="https://localhost/mapa/21114086-5_JonatanRenan/pages/contato.php">
                <button type="submit" value="Ver mais"><span>Ver mais</span></button>
                    </a>

                <div class="amostras">
                    <img src="img/main/index/Cajuzinho-Vegano.jpg" alt="Foto-de-Cajuzinho" id="cajuzinho">
                </div>
            </section>
        </div>
    </div>

</main>
<?php

include 'layout/footer.php';
?>