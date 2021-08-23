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
            $('li#A').css({
                color: "#FFFFFF"
            }),
            $('li#C').css({
                color: "#D90404"
            }),
            $('li#B').css({
                color: "#FFFFFF"
            }),
            $('div#rect-frente-prod1').css({
                background: "rgb(133 104 104)"
            }),
            $('div#rect-frente-prod2').css({
                background: "rgb(133 104 104)"
            }),
            $('div#rect-frente-prod3').css({
                background: "rgb(133 104 104)"
            }),
            $('div#rect-frente-prod4').css({
                background: "rgb(133 104 104)"
            }),
            $('div#rect-frente-prod5').css({
                background: "rgb(133 104 104)"
            }),
            $('div#rect-frente-prod6').css({
                background: "rgb(133 104 104)"
            }),
            $('h2#Produto1').css({
                color: "#FFFFFF"
            }),
            $('h2#Produto2').css({
                color: "#FFFFFF"
            }),
            $('h2#Produto3').css({
                color: "#FFFFFF"
            }),
            $('h2#Produto4').css({
                color: "#FFFFFF"
            }),
            $('h2#Produto5').css({
                color: "#FFFFFF"
            }),
            $('h2#Produto6').css({
                color: "#FFFFFF"
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
        <?php
        if (array_key_exists(3, $prods)) {
            if (isset($prods[3]['Cajuzinho tradicional'])) {
                echo "<h2 id='Produto1'>Cajuzinho tradicional</h2>";
                echo "<span id='prod-uni-1'>" . $prods[3]["Cajuzinho tradicional"]["Unidades"] . " unidades" . "</span>";
                echo "<span id='prod-preco-1'> R$ " . $prods[3]["Cajuzinho tradicional"]["Preço"] . "</span>";
            } else {
                echo "<span id='prod-error-1'>Produto não encontrado</span>";
            }
        } else {
            echo "<span id='prod-error-1'>Produto não encontrado</span>";
        }
        ?>
        <img src="../img/main/produtos/Cajuzinho-Vegano/Cajuzinho2.jpg" alt="Cajuzinho-2" id="cajuzinho2" class="cajuzinhos" />
        <div id='info-prod-group-1'>
            <?php
            if (array_key_exists(3, $prods)) {
                if (isset($prods[3]['Cajuzinho que não vai ao fogo'])) {
                    echo "<h2 id='Produto2'>Beijinho tradicional</h2>";
                    echo "<span id='prod-uni-2'>" . $prods[3]["Cajuzinho que não vai ao fogo"]["Unidades"] . " unidades" . "</span>";
                    echo "<span id='prod-preco-2'> R$ " . $prods[3]["Cajuzinho que não vai ao fogo"]["Preço"] . "</span>";
                } else {
                    echo "<span id='prod-error-2'>Produto não encontrado</span>";
                }
            } else {
                echo "<span id='prod-error-2'>Produto não encontrado</span>";
            }
            ?>
        </div>

        <img src="../img/main/produtos/Cajuzinho-Vegano/Cajuzinho3.jpg" alt="Cajuzinho-3" id="cajuzinho3" class="cajuzinhos" />

        <div id='info-prod-group-2'>
            <?php
            if (array_key_exists(3, $prods)) {
                if (isset($prods[3]['Cajuzinho de pasta de amendoim'])) {
                    echo "<h2 id='Produto3'>Cajuzinho de pasta de amendoim</h2>";
                    echo "<span id='prod-uni-3'>" . $prods[3]["Cajuzinho de pasta de amendoim"]["Unidades"] . " unidades" . "</span>";
                    echo "<span id='prod-preco-3'> R$ " . $prods[3]["Cajuzinho de pasta de amendoim"]["Preço"] . "</span>";
                } else {
                    echo "<span id='prod-error-3'>Produto não encontrado</span>";
                }
            } else {
                echo "<span id='prod-error-3'>Produto não encontrado</span>";
            }
            ?>
        </div>
        
        <img src="../img/main/produtos/Cajuzinho-Vegano/Cajuzinho4.jpg" alt="Cajuzinho-4" id="cajuzinho4" class="cajuzinhos" />
        <div id='info-prod-group-3'>
            <?php
            if (array_key_exists(3, $prods)) {
                if (isset($prods[3]['Cajuzinho de colher e de micro-ondas'])) {
                    echo "<h2 id='Produto4'>Cajuzinho de colher e de micro-ondas</h2>";
                    echo "<span id='prod-uni-4'>" . $prods[3]["Cajuzinho de colher e de micro-ondas"]["Unidades"] . " unidades" . "</span>";
                    echo "<span id='prod-preco-4'> R$ " . $prods[3]["Cajuzinho de colher e de micro-ondas"]["Preço"] . "</span>";
                } else {
                    echo "<span id='prod-error-4'>Produto não encontrado</span>";
                }
            } else {
                echo "<span id='prod-error-4'>Produto não encontrado</span>";
            }
            ?>
        </div>

        <img src="../img/main/produtos/Cajuzinho-Vegano/Cajuzinho5.jpg" alt="Cajuzinho-5" id="cajuzinho5" class="cajuzinhos" />
        <div id='info-prod-group-4'>
            <?php
            if (array_key_exists(3, $prods)) {
                if (isset($prods[3]['Cajuzinho fit'])) {
                    echo "<h2 id='Produto5'>Cajuzinho fit</h2>";
                    echo "<span id='prod-uni-5'>" . $prods[3]["Cajuzinho fit"]["Unidades"] . " unidades" . "</span>";
                    echo "<span id='prod-preco-5'> R$ " . $prods[3]["Cajuzinho fit"]["Preço"] . "</span>";
                } else {
                    echo "<span id='prod-error-5'>Produto não encontrado</span>";
                }
            } else {
                echo "<span id='prod-error-5'>Produto não encontrado</span>";
            }
            ?>
        </div>
        <img src="../img/main/produtos/Cajuzinho-Vegano/Cajuzinho6.jpg" alt="Cajuzinho-6" id="cajuzinho6" class="cajuzinhos" />
        <div id='info-prod-group-5'>
            <?php
            if (array_key_exists(3, $prods)) {
                if (isset($prods[3]['Cajuzinho com whey'])) {
                    echo "<h2 id='Produto6'>Cajuzinho com whey</h2>";
                    echo "<span id='prod-uni-6'>" . $prods[3]["Cajuzinho com whey"]["Unidades"] . " unidades" . "</span>";
                    echo "<span id='prod-preco-6'> R$ " . $prods[3]["Cajuzinho com whey"]["Preço"] . "</span>";
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