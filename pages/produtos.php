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
        })
        $('a#prod').css("border-top", "0.25px solid #D90404").css("border-width", "1px").css("color", "#D90404").css("text-shadow", "0px 2px 4px rgba(0, 0, 0, 0.25)");
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
        <div id="pacoca-group1">
            <div id='rect-fundo-prod1'></div>
            <div id='rect-traz-prod1'></div>
            <div id='rect-frente-prod1'></div>
            <div id='circle-preco1'></div>
        </div>
        <!-- PRODUTO 2-->
        <div id="pacoca-group2">
            <div id='rect-fundo-prod2'></div>
            <div id='rect-traz-prod2'></div>
            <div id='rect-frente-prod2'></div>
            <div id='circle-preco2'></div>
        </div>
        <!-- PRODUTO 3-->
        <div id="pacoca-group3">
            <div id='rect-fundo-prod3'></div>
            <div id='rect-traz-prod3'></div>
            <div id='rect-frente-prod3'></div>
            <div id='circle-preco3'></div>
        </div>
        <!-- PRODUTO 4-->
        <div id="pacoca-group4">
            <div id='rect-fundo-prod4'></div>
            <div id='rect-traz-prod4'></div>
            <div id='rect-frente-prod4'></div>
            <div id='circle-preco4'></div>
        </div>
        <!-- PRODUTO 5-->
        <div id="pacoca-group5">
            <div id='rect-fundo-prod5'></div>
            <div id='rect-traz-prod5'></div>
            <div id='rect-frente-prod5'></div>
            <div id='circle-preco5'></div>
        </div>
        <!-- PRODUTO 6-->
        <div id="pacoca-group6">
            <div id='rect-fundo-prod6'></div>
            <div id='rect-traz-prod6'></div>
            <div id='rect-frente-prod6'></div>
            <div id='circle-preco6'></div>
        </div>

        <?php
        //var_dump($prods);

        echo "<img src='../img/main/produtos/Brigadeiro-de-pacoca/pacoca1.jpg' alt='Paçoca-1' id='pacoca1' class='pacocas' />";


        if (array_key_exists(1, $prods)) {
            if (isset($prods[1]['Brigadeiro de paçoca tradicional'])) {
                echo "<h2 id='Produto1'>Brigadeiro de paçoca</br> tradicional</h2>";
                echo "<span id='prod-uni-1'>" . $prods[1]["Brigadeiro de paçoca tradicional"]["Unidades"] . " unidades" . "</span>";
                echo "<span id='prod-preco-1'> R$ " . $prods[1]["Brigadeiro de paçoca tradicional"]["Preço"] . "</span>";
            } else {
                echo "<span id='prod-error-1'>Produto não encontrado</span>";
            }
        } else {
            echo "<span id='pacoca-error-1'>Produto não encontrado</span>";
        }

        echo "<img src='../img/main/produtos/Brigadeiro-de-pacoca/pacoca2.jpg' alt='Paçoca-2' id='pacoca2' class='pacocas' />";

        echo "<div id='info-prod-group-1'>";
        if (array_key_exists(1, $prods)) {
            if (isset($prods[1]['Brigadeiro de paçoca crocante'])) {
                echo "<h2 id='Produto2'>Brigadeiro de paçoca</br> crocante</h2>";
                echo "<span id='prod-uni-2'>" . $prods[1]["Brigadeiro de paçoca crocante"]["Unidades"] . " unidades" . "</span>";
                echo "<span id='prod-preco-2'> R$ " . $prods[1]["Brigadeiro de paçoca crocante"]["Preço"] . "</span>";
            } else {
                echo "<span id='prod-error-2'>Produto não encontrado!</span>";
            }
        } else {
            echo "<span id='prod-error-2'>Produto não encontrado!</span>";
        }

        echo "</div>";

        echo "<img src='../img/main/produtos/Brigadeiro-de-pacoca/pacoca3.jpg' alt='Paçoca-3' id='pacoca3' class='pacocas' />";

        echo "<div id='info-prod-group-2'>";
        if (array_key_exists(1, $prods)) {
            if (isset($prods[1]['Brigadeiro de paçoca com amendoin'])) {
                echo "<h2 id='Produto3'>Brigadeiro de paçoca </br> com amendoin</h2>";
                echo "<span id='prod-uni-3'>" . $prods[1]["Brigadeiro de paçoca com amendoin"]["Unidades"] . " unidades" . "</span>";
                echo "<span id='prod-preco-3'> R$ " . $prods[1]["Brigadeiro de paçoca com amendoin"]["Preço"] . "</span>";
            } else {
                echo "<span id='prod-error-3'>Produto não encontrado!</span>";
            }
        } else {
            echo "<span id='prod-error-3'>Produto não encontrado!</span>";
        }

        echo "</div>";

        echo "<img src='../img/main/produtos/Brigadeiro-de-pacoca/pacoca4.jpg' alt='Paçoca-4' id='pacoca4' class='pacocas' />";

        echo "<div id='info-prod-group-3'>";
        if (array_key_exists(1, $prods)) {
            if (isset($prods[1]['Brigadeiro de paçoca macio'])) {
                echo "<h2 id='Produto4'>Brigadeiro de paçoca </br> macio</h2>";
                echo "<span id='prod-uni-4'>" . $prods[1]["Brigadeiro de paçoca macio"]["Unidades"] . " unidades" . "</span>";
                echo "<span id='prod-preco-4'> R$ " . $prods[1]["Brigadeiro de paçoca macio"]["Preço"] . "</span>";
            } else {
                echo "<span id='prod-error-4'>Produto não encontrado!</span>";
            }
        } else {
            echo "<span id='prod-error-4'>Produto não encontrado!</span>";
        }

        echo "</div>";

        echo "<img src='../img/main/produtos/Brigadeiro-de-pacoca/pacoca5.jpg' alt='Paçoca-5' id='pacoca5' class='pacocas' />";

        echo "<div id='info-prod-group-4'>";
        if (array_key_exists(1, $prods)) {
            if (isset($prods[1]['Pudim de Brigadeiro de paçoca'])) {
                echo "<h2 id='Produto5'>Pudim de Brigadeiro </br> de paçoca</h2>";
                echo "<span id='prod-uni-5'>" . $prods[1]["Pudim de Brigadeiro de paçoca"]["Unidades"] . " unidades" . "</span>";
                echo "<span id='prod-preco-5'> R$ " . $prods[1]["Pudim de Brigadeiro de paçoca"]["Preço"] . "</span>";
            } else {
                echo "<span id='prod-error-5'>Produto não encontrado!</span>";
            }
        } else {
            echo "<span id='prod-error-5'>Produto não encontrado!</span>";
        }

        echo "</div>";

        echo "<img src='../img/main/produtos/Brigadeiro-de-pacoca/pacoca6.jpg' alt='Paçoca-6' id='pacoca6' class='pacocas' />";

        echo "<div id='info-prod-group-5'>";
        if (array_key_exists(1, $prods)) {
            if (isset($prods[1]['Brigadeiro de paçoca no pote'])) {
                echo "<h2 id='Produto6'>Brigadeiro de paçoca</br> no pote</h2>";
                echo "<span id='prod-uni-6'>" . $prods[1]["Brigadeiro de paçoca no pote"]["Unidades"] . " unidades" . "</span>";
                echo "<span id='prod-preco-6'> R$ " . $prods[1]["Brigadeiro de paçoca no pote"]["Preço"] . "</span>";
            } else {
                echo "<span id='prod-error-5'>Produto não encontrado!</span>";
            }
        } else {
            echo "<span id='prod-error-5'>Produto não encontrado!</span>";
        }

        echo "</div>";

        ?>

    </div>
</div>

<?php
include '../layout/footer.php';
?>