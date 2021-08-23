<?php

include '../layout/header.php';
include '../data/produtos.php';
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
            }),
            $('li#A').css({
                color: "#FFFFFF"
            }),
            $('div#rect-frente-prod1').css({
                background: "rgb(238 222 163)"
            }),
            $('div#rect-frente-prod2').css({
                background: "rgb(238 222 163)"
            }),
            $('div#rect-frente-prod3').css({
                background: "rgb(238 222 163)"
            }),
            $('div#rect-frente-prod4').css({
                background: "rgb(238 222 163)"
            }),
            $('div#rect-frente-prod5').css({
                background: "rgb(238 222 163)"
            }),
            $('div#rect-frente-prod6').css({
                background: "rgb(238 222 163)"
            }),
            $('h2#Produto3').css({
                left: "78px"
            }),
            $('span#prod-uni-3').css({
                left: "120px"
            }),
            $('span#prod-preco-3').css({
                left: "130px"
            }),
            $('h2#Produto6').css({
                left: "78px"
            }),
            $('span#prod-uni-6').css({
                left: "120px"
            }),
            $('span#prod-preco-6').css({
                left: "130px"
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
        <div id="beijinho-group1">
            <div id='rect-fundo-prod1'></div>
            <div id='rect-traz-prod1'></div>
            <div id='rect-frente-prod1'></div>
            <div id='circle-preco1'></div>
        </div>
        <!-- PRODUTO 2-->
        <div id="beijinho-group2">
            <div id='rect-fundo-prod2'></div>
            <div id='rect-traz-prod2'></div>
            <div id='rect-frente-prod2'></div>
            <div id='circle-preco2'></div>
        </div>
        <!-- PRODUTO 3-->
        <div id="beijinho-group3">
            <div id='rect-fundo-prod3'></div>
            <div id='rect-traz-prod3'></div>
            <div id='rect-frente-prod3'></div>
            <div id='circle-preco3'></div>
        </div>
        <!-- PRODUTO 4-->
        <div id="beijinho-group4">
            <div id='rect-fundo-prod4'></div>
            <div id='rect-traz-prod4'></div>
            <div id='rect-frente-prod4'></div>
            <div id='circle-preco4'></div>
        </div>
        <!-- PRODUTO 5-->
        <div id="beijinho-group5">
            <div id='rect-fundo-prod5'></div>
            <div id='rect-traz-prod5'></div>
            <div id='rect-frente-prod5'></div>
            <div id='circle-preco5'></div>
        </div>
        <!-- PRODUTO 6-->
        <div id="beijinho-group6">
            <div id='rect-fundo-prod6'></div>
            <div id='rect-traz-prod6'></div>
            <div id='rect-frente-prod6'></div>
            <div id='circle-preco6'></div>
        </div>

        <img src="../img/main/produtos/beijinho/beijinho1.jpg" alt="Beijinho-1" id="beijinho1" class="beijinhos" />
        <?php
        if (array_key_exists(2, $prods)) {
            if (isset($prods[2]['Beijinho simples'])) {
                echo "<h2 id='Produto1'>Beijinho simples</h2>";
                echo "<span id='prod-uni-1'>" . $prods[2]["Beijinho simples"]["Unidades"] . " unidades" . "</span>";
                echo "<span id='prod-preco-1'> R$ " . $prods[2]["Beijinho simples"]["Preço"] . "</span>";
            } else {
                echo "<span id='prod-error-1'>Produto não encontrado</span>";
            }
        } else {
            echo "<span id='prod-error-1'>Produto não encontrado</span>";
        }
        ?>
        <img src="../img/main/produtos/beijinho/beijinho2.jpg" alt="Beijinho-2" id="beijinho2" class="beijinhos" />

        <div id='info-prod-group-1'>
            <?php
            if (array_key_exists(2, $prods)) {
                if (isset($prods[2]['Beijinho tradicional'])) {
                    echo "<h2 id='Produto2'>Beijinho tradicional</h2>";
                    echo "<span id='prod-uni-2'>" . $prods[2]["Beijinho tradicional"]["Unidades"] . " unidades" . "</span>";
                    echo "<span id='prod-preco-2'> R$ " . $prods[2]["Beijinho tradicional"]["Preço"] . "</span>";
                } else {
                    echo "<span id='prod-error-2'>Produto não encontrado</span>";
                }
            } else {
                echo "<span id='prod-error-2'>Produto não encontrado</span>";
            }
            ?>
        </div>

        <img src="../img/main/produtos/beijinho/beijinho3.jpg" alt="Beijinho-3" id="beijinho3" class="beijinhos" />

        <div id='info-prod-group-2'>
            <?php
            if (array_key_exists(2, $prods)) {
                if (isset($prods[2]['Beijinho do amor'])) {
                    echo "<h2 id='Produto3'>Beijinho do amor</h2>";
                    echo "<span id='prod-uni-3'>" . $prods[2]["Beijinho do amor"]["Unidades"] . " unidades" . "</span>";
                    echo "<span id='prod-preco-3'> R$ " . $prods[2]["Beijinho do amor"]["Preço"] . "</span>";
                } else {
                    echo "<span id='prod-error-3'>Produto não encontrado</span>";
                }
            } else {
                echo "<span id='prod-error-3'>Produto não encontrado</span>";
            }
            ?>
        </div>

        <img src="../img/main/produtos/beijinho/beijinho4.jpg" alt="Beijinho-4" id="beijinho4" class="beijinhos" />

        <div id='info-prod-group-3'>
            <?php
            if (array_key_exists(2, $prods)) {
                if (isset($prods[2]['Beijinho de morango'])) {
                    echo "<h2 id='Produto4'>Beijinho de morango</h2>";
                    echo "<span id='prod-uni-4'>" . $prods[2]["Beijinho de morango"]["Unidades"] . " unidades" . "</span>";
                    echo "<span id='prod-preco-4'> R$ " . $prods[2]["Beijinho de morango"]["Preço"] . "</span>";
                } else {
                    echo "<span id='prod-error-4'>Produto não encontrado</span>";
                }
            } else {
                echo "<span id='prod-error-4'>Produto não encontrado</span>";
            }
            ?>
        </div>
        <img src="../img/main/produtos/beijinho/beijinho5.jpg" alt="Beijinho-5" id="beijinho5" class="beijinhos" />
        <div id='info-prod-group-4'>
            <?php
            if (array_key_exists(2, $prods)) {
                if (isset($prods[2]['Beijinho de arroz com nutela'])) {
                    echo "<h2 id='Produto5'>Beijinho de arroz com nutela</h2>";
                    echo "<span id='prod-uni-5'>" . $prods[2]["Beijinho de arroz com nutela"]["Unidades"] . " unidades" . "</span>";
                    echo "<span id='prod-preco-5'> R$ " . $prods[2]["Beijinho de arroz com nutela"]["Preço"] . "</span>";
                } else {
                    echo "<span id='prod-error-5'>Produto não encontrado</span>";
                }
            } else {
                echo "<span id='prod-error-5'>Produto não encontrado</span>";
            }
            ?>
        </div>
        <img src="../img/main/produtos/beijinho/beijinho6.jpg" alt="Beijinho-6" id="beijinho6" class="beijinhos" />
        <div id='info-prod-group-5'>
            <?php
            if (array_key_exists(2, $prods)) {
                if (isset($prods[2]['Beijinho de coco fresco'])) {
                    echo "<h2 id='Produto6'>Beijinho de coco fresco</h2>";
                    echo "<span id='prod-uni-6'>" . $prods[2]["Beijinho de coco fresco"]["Unidades"] . " unidades" . "</span>";
                    echo "<span id='prod-preco-6'> R$ " . $prods[2]["Beijinho de coco fresco"]["Preço"] . "</span>";
                } else {
                    echo "<span id='prod-error-6'>Produto não encontrado</span>";
                }
            } else {
                echo "<span id='prod-error-6'>Produto não encontrado</span>";
            }
            ?>
        </div>
    </div>
</div>

<?php
include '../layout/footer.php';
?>