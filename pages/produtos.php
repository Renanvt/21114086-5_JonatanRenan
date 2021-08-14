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
                    Brigadeiro de Paçoca
                </li>
                <li id="B">
                    Beijinho
                </li>
                <li id="C">
                    Cajuzinho Vegano
                </li>
                <li id="D">
                    Cazadinho
                </li>
            </ul>
        </nav>
    </div>
</div>

<div id="main-rect-fundo">
    <div id="main-rect-frente">
        <img src="../img/main/produtos/Brigadeiro-de-pacoca/pacoca1.jpg" alt="Paçoca-1" id="pacoca1" class="pacocas" />
        <img src="../img/main/produtos/Brigadeiro-de-pacoca/pacoca2.jpg" alt="Paçoca-2" id="pacoca2" class="pacocas" />
        <img src="../img/main/produtos/Brigadeiro-de-pacoca/pacoca3.jpg" alt="Paçoca-3" id="pacoca3" class="pacocas" />
        <img src="../img/main/produtos/Brigadeiro-de-pacoca/pacoca4.jpg" alt="Paçoca-4" id="pacoca4" class="pacocas" />
        <img src="../img/main/produtos/Brigadeiro-de-pacoca/pacoca5.jpg" alt="Paçoca-5" id="pacoca5" class="pacocas" />
        <img src="../img/main/produtos/Brigadeiro-de-pacoca/pacoca6.jpg" alt="Paçoca-6" id="pacoca6" class="pacocas" />
    </div>
</div>

<?php
include '../layout/footer.php';
?>