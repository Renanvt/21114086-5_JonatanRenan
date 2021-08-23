<!DOCTYPE html>
<html lang="pt-br">
<?php

include '../layout/header.php';
include '../data/info.php';
?>

<script src="../js/jquery-3.6.0.min.js"></script>
<script language="javascript">
    $(document).ready(function() {
        $('header#rect-main').css({
                background: "url(../img/header/woman-mouth-teeth-sweets.jpg) no-repeat 0px 20px;",
                height: "290px",
            }),
            $('main#corpo').css({
                background: "#E5E5E5",
                height: "2682px"
            }),
            $('a#quemsomos').css("border-top", "0.25px solid #D90404").css("border-width", "1px").css("color", "#D90404").css("text-shadow", "0px 2px 4px rgba(0, 0, 0, 0.25)");
    });
</script>

<h1 id="about">Sobre nós</h1>
<div id="rect-right-gradient">

</div>
<img src="../img/header/lucky_sugar-red_transparent.png" alt="Logo" id="logo-about">
<h3 id="since">Desde 1997</h3>
<div id="rect-left">

</div>
<div id="rect-center-info">

</div>
<h2 id="history">Nossa história</h2>
<p id="p-history">
    <?php
    echo $about["Nossa história"];
    ?>
</p>
<h2 id="local">Onde estamos localizados</h2>
<p id=p-local>
    <?php
    echo $about["Onde estamos localizados"];
    ?>
</p>
<div id=circle1></div>
<div id=circle2></div>
<div id=circle3></div>

<img src="../img/main/quem-somos/equipamentos-para-montar-uma-fabrica-de-doces.png" alt="Fabrica-de-doces" id="fabrica1">
<img src="../img/main/quem-somos/Fabrica-de-Doces-Caseiros-1200x900.png" alt="Fabrica-de-fazer-doces2" id="fabrica2">
<img src="../img/main/quem-somos/como-fazer-doces-para-vender-voce-sabe-o-que-precisa.png" alt="Fabrica-de-fazer-doces3" id="fabrica3">

<img src="../img/main/quem-somos/right-quotation-mark.png" alt="Quotation-mark" id="quotation">

<img src="../img/main/quem-somos/Estrelas.png" alt="Estrelas" id="estrelas-quem-somos">

<p id="info-quem-somos">
    <?php
    echo $about["Diferencial"];
    ?>
</p>

<h1 id="pathers">Patrocinadores</h1>

<img src="../img/main/quem-somos/logo-unicesumar.png" alt="Unicesumar-logo" id="logo-unicesumar">
<img src="../img/main/quem-somos/WALMART-LOGO 1.png" alt="Walmart-logo" id="logo-walmart">
<img src="../img/main/quem-somos/logo-o-amigao.png" alt="Amigao-logo" id="logo-o-amigao">

<div id="rect-fixed-footer"></div>
<?php
include '../layout/footer.php';
?>