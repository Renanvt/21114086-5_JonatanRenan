<?php

include '../layout/header.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<script src="../js/jquery-3.6.0.min.js"></script>
<script language="javascript">
    $(document).ready(function() {
        $('header#rect-main').css({
            background: "url(../img/header/woman-mouth-teeth-sweets.jpg) no-repeat 0px 20px",
            height: "369px",
        }),
        $('a#local').css("border-top", "0.25px solid #D90404").css("border-width", "1px").css("color", "#D90404").css("text-shadow", "0px 2px 4px rgba(0, 0, 0, 0.25)");
    });
</script>


<div id="prod-rect-fundo">
    <div id="prod-rect-frente">
        <nav>
            <ul>
                <li>
                    <a href="https://lucksugar@gmail.com" id="email" target="_blank">
                    <img src="../img/main/contato/gmail_google.png" alt="Gmail-icon" id="gmail">
                    </a>
                    <a href="https://lucksugar@gmail.com" id="email" target="_blank">
                        lucksugar@gmail.com</a>
                </li>
                <li>
                    <a href="https://21940028922" id="tel" target="_blank">
                        <img src="../img/main/contato/Whatsapp_icon.png" alt="Whatsapp-icon" id="whats">
                    </a>
                    <a href="https://21940028922" id="tel" target="_blank">
                        (21) 94002-8922
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<div id="main-rect-fundo">
    <div id="main-rect-frente">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.5315091153984!2d-51.919054984637036!3d-23.44128496305493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e81a413a9c9463%3A0x4e3ee356ad1bd6c3!2sUniCesumar%20-%20Maring%C3%A1!5e0!3m2!1sen!2sbr!4v1629738990751!5m2!1sen!2sbr" width="762" height="780" style="border-radius: 42px; border:1px solid #904142;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>

<?php
include '../layout/footer.php';
?>