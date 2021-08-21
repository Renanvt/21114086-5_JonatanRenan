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
            $('li#A').css({
                color: "#FFFFFF"
            })
        $('li#C').css({
            color: "#D90404"
        })
        $('li#B').css({
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
                    <a href="https://localhost/mapa/21114086-5_JonatanRenan/pages/produtos.php">Brigadeiro de Paçoca</a>
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
                        Casadinho
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<div id="main-rect-fundo">
    <div id="main-rect-frente">
        <!-- PRODUTO 1-->
        <div id="cajuzinho-group1">
            <div id='rect-fundo-prod1'></div>
            <div id='rect-traz-prod1'></div>
            <div id='rect-frente-prod1'></div>
            <div id='circle-preco1'></div>
        </div>
        <!-- PRODUTO 2-->
        <div id="cajuzinho-group2">
            <div id='rect-fundo-prod2'></div>
            <div id='rect-traz-prod2'></div>
            <div id='rect-frente-prod2'></div>
            <div id='circle-preco2'></div>
        </div>
        <!-- PRODUTO 3-->
        <div id="cajuzinho-group3">
            <div id='rect-fundo-prod3'></div>
            <div id='rect-traz-prod3'></div>
            <div id='rect-frente-prod3'></div>
            <div id='circle-preco3'></div>
        </div>
        <!-- PRODUTO 4-->
        <div id="cajuzinho-group4">
            <div id='rect-fundo-prod4'></div>
            <div id='rect-traz-prod4'></div>
            <div id='rect-frente-prod4'></div>
            <div id='circle-preco4'></div>
        </div>
        <!-- PRODUTO 5-->
        <div id="cajuzinho-group5">
            <div id='rect-fundo-prod5'></div>
            <div id='rect-traz-prod5'></div>
            <div id='rect-frente-prod5'></div>
            <div id='circle-preco5'></div>
        </div>
        <!-- PRODUTO 6-->
        <div id="cajuzinho-group6">
            <div id='rect-fundo-prod6'></div>
            <div id='rect-traz-prod6'></div>
            <div id='rect-frente-prod6'></div>
            <div id='circle-preco6'></div>
        </div>

        <img src="../img/main/produtos/Cajuzinho-Vegano/Cajuzinho1.jpg" alt="Cajuzinho-1" id="cajuzinho1" class="cajuzinhos" />
        <img src="../img/main/produtos/Cajuzinho-Vegano/Cajuzinho2.jpg" alt="Cajuzinho-2" id="cajuzinho2" class="cajuzinhos" />
        <img src="../img/main/produtos/Cajuzinho-Vegano/Cajuzinho3.jpg" alt="Cajuzinho-3" id="cajuzinho3" class="cajuzinhos" />
        <img src="../img/main/produtos/Cajuzinho-Vegano/Cajuzinho4.jpg" alt="Cajuzinho-4" id="cajuzinho4" class="cajuzinhos" />
        <img src="../img/main/produtos/Cajuzinho-Vegano/Cajuzinho5.jpg" alt="Cajuzinho-5" id="cajuzinho5" class="cajuzinhos" />
        <img src="../img/main/produtos/Cajuzinho-Vegano/Cajuzinho6.jpg" alt="Cajuzinho-6" id="cajuzinho6" class="cajuzinhos" />
    </div>
</div>

<?php
include '../layout/footer.php';
?>