<?php

include '../layout/header.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<script src="../js/jquery-3.6.0.min.js"></script>
<script language="javascript">
    $(document).ready(function() {
        $('header#rect-main').css({
                background: "url(../img/header/mulhercomendochocolate.jpg) no-repeat 0px 54px",
                height: "369px",
            }),
            $('li#B').css({
                color: "#D90404"
            })
        $('li#A').css({
            color: "#FFFFFF"
        })
    });
</script>

<img src="../img/header/lucky_sugar-red_transparent.png" alt="Logo" id="Logo" />
<h1 id="principal">Categorias</h1>

<div id="prod-rect-fundo">
    <div id="prod-rect-frente">
        <nav>
            <ul>
                <li id="A">
                    <a href="https://localhost/mapa/21114086-5_JonatanRenan/pages/produtos.php">
                        Brigadeiro de Paçoca
                    </a>
                </li>
                <li id="B">
                    <a href="https://localhost/mapa/21114086-5_JonatanRenan/pages/beijinho.php">
                        Beijinho
                    </a>
                </li>
                <li id="C">
                    <a href="https://localhost/mapa/21114086-5_JonatanRenan/pages/cajuzinho.php">
                        Cajuzinho Vegano
                    </a>
                </li>
                <li id="D">
                    <a href="https://localhost/mapa/21114086-5_JonatanRenan/pages/cazadinho.php">
                        Cazadinho
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<div id="main-rect-fundo">
    <div id="main-rect-frente">
        <img src="../img/main/produtos/beijinho/beijinho1.jpg" alt="Beijinho-1" id="beijinho1" class="beijinhos" />
        <img src="../img/main/produtos/beijinho/beijinho2.jpg" alt="Beijinho-2" id="beijinho2" class="beijinhos" />
        <img src="../img/main/produtos/beijinho/beijinho3.jpg" alt="Beijinho-3" id="beijinho3" class="beijinhos" />
        <img src="../img/main/produtos/beijinho/beijinho4.jpg" alt="Beijinho-4" id="beijinho4" class="beijinhos" />
        <img src="../img/main/produtos/beijinho/beijinho5.jpg" alt="Beijinho-5" id="beijinho5" class="beijinhos" />
        <img src="../img/main/produtos/beijinho/beijinho6.jpg" alt="Beijinho-6" id="beijinho6" class="beijinhos" />
    </div>
</div>

<?php
include '../layout/footer.php';
?>