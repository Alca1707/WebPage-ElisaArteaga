<!DOCTYPE html>
<html>
    <?php
        include "head.html";
        include "menu.html";
    ?>

    <div class="container bodyFooter"> 
        <div id="headerContacto" class="row">
            <img src="img/Contactanos.svg" class="col-lg-4 col-md-5 col-sm-8 col-7" alt="">
        </div>
        <div class="row">
            <div class="col-lg-4" id="textContact">
                <p>¿Tienes alguna duda?, ¿Deseas hacer equipo? escríbeme y pongámonos en contacto, será un gusto trabajar contigo y hacer ese sueño realidad.</p>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <form action="emailsender.php" method="post">
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" name="Name">
                        </div>
                    </div>

                    <div class="row mb-3">
                      <label for="email" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="Email">
                      </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="phone" class="col-sm-2 col-form-label">Teléfono</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="phone" name="Phone">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Asunto</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" name="Subject">
                      </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Método de contacto</label>
                        <select class="form-select" aria-label="Default select example" name="Type">
                            <option selected>Email</option>
                            <option value="2">Llamada teléfonica</option>
                            <option value="3">Mensaje por Whatsapp</option>
                        </select>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Mensaje</label>
                        <textarea class="form-control" aria-label="With textarea" name="Message"></textarea>
                    </div>

                    <button type="submit" class="btn"><img src="img/Boton_ENVIAR.png" class="col-lg-6 col-md-7 col-sm-8 col-8" alt=""></button>
                </form>
            </div>
        </div>  
    </div>
    <?php
        include "footer.html"
    ?>
    <script>
        if (location.href.indexOf("#") != -1) {
            document.getElementById(location.href.slice(location.href.indexOf("#") + 1)).style.display = "inline-block";
        }
    </script>
</html>