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
                color: "#FFFFFF"
            }),
            $('li#A').css({
                color: "#FFFFFF"
            }),
            $('li#D').css({
                color: "#D90404"
            }),
            $('div#rect-frente-prod1').css({
                background: "rgb(253 235 193)"
            }),
            $('div#rect-frente-prod2').css({
                background: "rgb(253 235 193)"
            }),
            $('div#rect-frente-prod3').css({
                background: "rgb(253 235 193)"
            }),
            $('div#rect-frente-prod4').css({
                background: "rgb(253 235 193)"
            }),
            $('div#rect-frente-prod5').css({
                background: "rgb(253 235 193)"
            }),
            $('div#rect-frente-prod6').css({
                background: "rgb(253 235 193)"
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
        <div id="casadinho-group1">
            <div id='rect-fundo-prod1'></div>
            <div id='rect-traz-prod1'></div>
            <div id='rect-frente-prod1'></div>
            <div id='circle-preco1'></div>
        </div>
        <!-- PRODUTO 2-->
        <div id="casadinho-group2">
            <div id='rect-fundo-prod2'></div>
            <div id='rect-traz-prod2'></div>
            <div id='rect-frente-prod2'></div>
            <div id='circle-preco2'></div>
        </div>
        <!-- PRODUTO 3-->
        <div id="casadinho-group3">
            <div id='rect-fundo-prod3'></div>
            <div id='rect-traz-prod3'></div>
            <div id='rect-frente-prod3'></div>
            <div id='circle-preco3'></div>
        </div>
        <!-- PRODUTO 4-->
        <div id="casadinho-group4">
            <div id='rect-fundo-prod4'></div>
            <div id='rect-traz-prod4'></div>
            <div id='rect-frente-prod4'></div>
            <div id='circle-preco4'></div>
        </div>
        <!-- PRODUTO 5-->
        <div id="casadinho-group5">
            <div id='rect-fundo-prod5'></div>
            <div id='rect-traz-prod5'></div>
            <div id='rect-frente-prod5'></div>
            <div id='circle-preco5'></div>
        </div>
        <!-- PRODUTO 6-->
        <div id="casadinho-group6">
            <div id='rect-fundo-prod6'></div>
            <div id='rect-traz-prod6'></div>
            <div id='rect-frente-prod6'></div>
            <div id='circle-preco6'></div>
        </div>

        <img src="../img/main/produtos/Cazadinho/cazadinho1.jpg" alt="Cajuzinho-1" id="cazadinho1" class="cazadinhos" />
        <?php
        if (array_key_exists(4, $prods)) {
            if (isset($prods[4]['Casadinho tradicional'])) {
                echo "<h2 id='Produto1'>Casadinho tradicional</h2>";
                echo "<span id='prod-uni-1'>" . $prods[4]["Casadinho tradicional"]["Unidades"] . " unidades" . "</span>";
                echo "<span id='prod-preco-1'> R$ " . $prods[4]["Casadinho tradicional"]["Preço"] . "</span>";
            } else {
                echo "<span id='prod-error-1'>Produto não encontrado</span>";
            }
        } else {
            echo "<span id='prod-error-1'>Produto não encontrado</span>";
        }
        ?>
        <img src="../img/main/produtos/Cazadinho/cazadinho2.jpg" alt="Cajuzinho-2" id="cazadinho2" class="cazadinhos" />
        <div id='info-prod-group-1'>
            <?php
            if (array_key_exists(4, $prods)) {
                if (isset($prods[4]['Casadinho gorumet'])) {
                    echo "<h2 id='Produto2'>Casadinho gorumet</h2>";
                    echo "<span id='prod-uni-2'>" . $prods[4]["Casadinho gorumet"]["Unidades"] . " unidades" . "</span>";
                    echo "<span id='prod-preco-2'> R$ " . $prods[4]["Casadinho gorumet"]["Preço"] . "</span>";
                } else {
                    echo "<span id='prod-error-2'>Produto não encontrado</span>";
                }
            } else {
                echo "<span id='prod-error-2'>Produto não encontrado</span>";
            }
            ?>
        </div>

        <img src="../img/main/produtos/Cazadinho/cazadinho3.jpg" alt="Cajuzinho-3" id="cazadinho3" class="cazadinhos" />
        <div id='info-prod-group-2'>
            <?php
            if (array_key_exists(4, $prods)) {
                if (isset($prods[4]['Casadinho de goiaba'])) {
                    echo "<h2 id='Produto3'>Casadinho de goiaba</h2>";
                    echo "<span id='prod-uni-3'>" . $prods[4]["Casadinho de goiaba"]["Unidades"] . " unidades" . "</span>";
                    echo "<span id='prod-preco-3'> R$ " . $prods[4]["Casadinho de goiaba"]["Preço"] . "</span>";
                } else {
                    echo "<span id='prod-error-3'>Produto não encontrado</span>";
                }
            } else {
                echo "<span id='prod-error-3'>Produto não encontrado</span>";
            }
            ?>
        </div>
        <img src="../img/main/produtos/Cazadinho/cazadinho4.jpg" alt="Cajuzinho-4" id="cazadinho4" class="cazadinhos" />
        <div id='info-prod-group-3'>
            <?php
            if (array_key_exists(4, $prods)) {
                if (isset($prods[4]['Casadinho de doce de leite'])) {
                    echo "<h2 id='Produto4'>Casadinho de doce de leite</h2>";
                    echo "<span id='prod-uni-4'>" . $prods[4]["Casadinho de doce de leite"]["Unidades"] . " unidades" . "</span>";
                    echo "<span id='prod-preco-4'> R$ " . $prods[4]["Casadinho de doce de leite"]["Preço"] . "</span>";
                } else {
                    echo "<span id='prod-error-4'>Produto não encontrado</span>";
                }
            } else {
                echo "<span id='prod-error-4'>Produto não encontrado</span>";
            }
            ?>
        </div>

        <img src="../img/main/produtos/Cazadinho/cazadinho5.jpg" alt="Cajuzinho-5" id="cazadinho5" class="cazadinhos" />
        <div id='info-prod-group-4'>
            <?php
            if (array_key_exists(4, $prods)) {
                if (isset($prods[4]['Casadinho de leite ninho'])) {
                    echo "<h2 id='Produto5'>Casadinho de leite ninho</h2>";
                    echo "<span id='prod-uni-5'>" . $prods[4]["Casadinho de leite ninho"]["Unidades"] . " unidades" . "</span>";
                    echo "<span id='prod-preco-5'> R$ " . $prods[4]["Casadinho de leite ninho"]["Preço"] . "</span>";
                } else {
                    echo "<span id='prod-error-5'>Produto não encontrado</span>";
                }
            } else {
                echo "<span id='prod-error-5'>Produto não encontrado</span>";
            }
            ?>
        </div>

        <img src="../img/main/produtos/Cazadinho/cazadinho6.jpg" alt="Cajuzinho-6" id="cazadinho6" class="cazadinhos" />
        <div id='info-prod-group-5'>
            <?php
            if (array_key_exists(4, $prods)) {
                if (isset($prods[4]['Casadinho na travessa'])) {
                    echo "<h2 id='Produto6'>Casadinho na travessa</h2>";
                    echo "<span id='prod-uni-6'>" . $prods[4]["Casadinho na travessa"]["Unidades"] . " unidades" . "</span>";
                    echo "<span id='prod-preco-6'> R$ " . $prods[4]["Casadinho na travessa"]["Preço"] . "</span>";
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