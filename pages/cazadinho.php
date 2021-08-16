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
            color: "#FFFFFF"
        })
        $('li#A').css({
                color: "#FFFFFF"
            })
        $('li#D').css({
            color: "#D90404"
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
                        Cazadinho
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<div id="main-rect-fundo">
    <div id="main-rect-frente">
        <img src="../img/main/produtos/Cazadinho/cazadinho1.jpg" alt="Cajuzinho-1" id="cazadinho1" class="cazadinhos" />
        <img src="../img/main/produtos/Cazadinho/cazadinho2.jpg" alt="Cajuzinho-2" id="cazadinho2" class="cazadinhos" />
        <img src="../img/main/produtos/Cazadinho/cazadinho3.jpg" alt="Cajuzinho-3" id="cazadinho3" class="cazadinhos" />
        <img src="../img/main/produtos/Cazadinho/cazadinho4.jpg" alt="Cajuzinho-4" id="cazadinho4" class="cazadinhos" />
        <img src="../img/main/produtos/Cazadinho/cazadinho5.jpg" alt="Cajuzinho-5" id="cazadinho5" class="cazadinhos" />
        <img src="../img/main/produtos/Cazadinho/cazadinho6.jpg" alt="Cajuzinho-6" id="cazadinho6" class="cazadinhos" />
    </div>
</div>

<?php
include '../layout/footer.php';
?>