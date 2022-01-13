<!DOCTYPE html>
<html>
      <?php
        include "head.html";
        include "menu.html";
      ?>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/Carrusel_01_Tlaloquines.jpg" class="d-block w-100" alt="..." >
              </div>
              <div class="carousel-item">
                <img src="img/Carrusel_02_Eden.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/Carrusel_03_Veneno.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/Carrusel_04_Martina.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/Carrusel_05_Pulse.jpg" class="d-block w-100" alt="...">
              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            
        </div>

        <div id="aboutMe" class="container">
          <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 ">
            <div class=""> 
              <img src="img/sobre mi-ELISA ARTEAGA_TXT.svg" class="titlesImg" alt="Sobre mi">
              <p class="description"><br><br>Hola, soy una diseñadora del producto artesanal con un amor por la intervención de superficies y los detalles, me apasiona la creación de productos que puedan hacer aflorar emociones y experiencias. Creo en el valor de los sueños y en la importancia de una dosis diaria de fantasía para afrontar el día a día. Deseo crear alianzas y desarrollar una comunidad alrededor de mujeres empoderadas y colectivos de artistas escénicos que traspasen fronteras. <br><br> Te invito a trabajar juntos, ¿Te animas? </p>              
              <a href="Elisa-Arteaga_CV_SP .pdf" download="Elisa-Arteaga-CV"><img src="img/Boton_CV.png" class="col-lg-7 espaciado40" alt=""></a>
            </div>
            <div id="photoElisa">
              <img id="designerPhoto" src="img/Foto-elisa.png" width="400px" height="auto" alt="Elisa photo">
            </div>
          </div>
        </div>

        <div id="inspiration">
          <img src="img/Inspiracion_background.jpg" class="fullWidthImg" alt="Inspiración">
          <div id="inspirationText"> 
            <img src="img/mi inspiración_TXT.svg" class="titlesImg" alt="Inspiración">
            <p><br><br>Como diseñadora encuentro inspiración en experiencias y sensaciones, historias y mitologías. Es por ello que la naturaleza, la historia y la investigación son mis principales musas. En mi proceso creativo, encuentro en la experimentación y la intervención de superficies el medio para expresar todo aquello que no puedo decir con palabras.          </p>
          </div>         
        </div>

        <div id="concept">
          <img src="img/ONIRISCENCIA_TXT.svg" id="conceptImg" class="titlesImg" alt="Oniriscencia">
          <p id="conceptText"> <br><br>En este mi ser que es mi mundo habita otro ser invisible que con frecuencia se apodera de mí. Se pasea por mis sueños más fantásticos aquellos a los que solo se accede a través del portal de la imaginación, estos sueños que provienen desde lo más profundo traen mensajes del espíritu, de ese mundo interior que ha sido heredado de generación en generación.</p>
        </div>

        <?php
        include "footer.html"
        ?>
</html>