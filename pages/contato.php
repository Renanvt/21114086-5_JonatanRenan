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
        $('a#contact').css("border-top", "0.25px solid #D90404").css("border-width", "1px").css("color", "#D90404").css("text-shadow", "0px 2px 4px rgba(0, 0, 0, 0.25)");
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
    <div id="wufoo-z11oj55z0z2rj6g"> Fill out my <a href="https://renanvt.wufoo.com/forms/z11oj55z0z2rj6g">online form</a>. </div> <script type="text/javascript"> var z11oj55z0z2rj6g; (function(d, t) { var s = d.createElement(t), options = { 'userName':'renanvt', 'formHash':'z11oj55z0z2rj6g', 'autoResize':true, 'height':'574', 'async':true, 'host':'wufoo.com', 'header':'show', 'ssl':true }; s.src = ('https:' == d.location.protocol ?'https://':'http://') + 'secure.wufoo.com/scripts/embed/form.js'; s.onload = s.onreadystatechange = function() { var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return; try { z11oj55z0z2rj6g = new WufooForm(); z11oj55z0z2rj6g.initialize(options); z11oj55z0z2rj6g.display(); } catch (e) { } }; var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr); })(document, 'script'); </script>
    <img src="../img/main/contato/suport.jpg" alt="Suporte" id="suport">
    </div>
</div>

<?php
include '../layout/footer.php';
?>