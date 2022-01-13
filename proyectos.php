<!DOCTYPE html>
<html>
    <?php
        include "head.html";
        include "menu.html";
    ?>

    <div class="container bodyFooter">
        <div class="row">
            <img src="img/Proyectos.svg" class="col-lg-3 espaciado40" alt="">
        </div>
        <div class="row espaciado40">
            <p class="col-lg-5 offset-lg-1">Despertar y continuar soñando, encontrarse en un universo propio como el que creamos cuando niños, en el que era tan fácil apreciar las cosas sencillas y bellas de la vida.
                Ha pasado el tiempo y esa candidez sigue impregnando cada visión, cada idea, cada emoción...<br><br>¡TE INVITO A CONOCER MI TRABAJO!
            </p>
        </div>
        <div id="btnsfancy" class="row">
            <button type="button" class="btn btn-light col-lg-2" onclick="ProjectsButtons(this)" name="projects">PROYECTOS</button>
            <button type="button" class="btn btn-light col-lg-3 offset-2" onclick="ProjectsButtons(this)" name="portafolio">PORTAFOLIO COMPLETO</button>
            <button type="button" class="btn btn-light col-lg-2 offset-2" onclick="ProjectsButtons(this)" name="reel">REEL</button>
        </div>

        <div id="projects">
            <div class="row rowProyectos">
                <a href="tlaloquines.php" class="col-lg-3 col-md-3 col-sm-3"><img src="img/Proyectos_01.jpg" alt=""></a>
                <a href="wonderware.php" class="col-lg-3 col-md-3 col-sm-3"><img src="img/Proyectos_03.jpg"  alt=""></a>
                <a href="matina.php" class="col-lg-3 col-md-3 col-sm-3"><img src="img/Proyectos_04.jpg"  alt=""></a>
                <a href="eden.php" class="col-lg-3 col-md-3 col-sm-3"><img src="img/Proyectos_05.jpg"  alt=""></a>
            </div>
    
            <div class="row rowProyectos justify-content-center">
                <a href="pasarela.php" class="col-lg-3 col-md-3 col-sm-3"><img src="img/Proyectos_06.jpg" alt=""></a>
                <a href="veneno.php" class="col-lg-3 col-md-3 col-sm-3"><img src="img/Proyectos_07.jpg" alt=""></a>
                <a href="pulse.php" class="col-lg-3 col-md-3 col-sm-3"><img src="img/Proyectos_08.jpg" alt=""></a>
            </div>
        </div>

        <div id="portafolio" style="display: none;">
            aqui va el portafolio
        </div>

        <div id="reel" style="display: none;">
            aqui va el reel
        </div>
    </div>
    <?php
        include "footer.html"
    ?>
</html>