<?php
include("../superior.php");
include("restaurantes.service.php");


?>
<style>
    .header-area {
        background-color: black;
    }
    h4{
        color:aliceblue;
    }
</style>



<!-- ****** Gallery Area Start ****** -->

<section class="sonar-projects-area" id="projects">
    <div class="container-fluid" style="margin-bottom: 80px;">
        <!-- <div class="col-sm-12">
            <label for="filtro" style="width:16%;"> <b>Tipo de comida:</b> &nbsp;</label>
            <select id="mySelect" name="filtro" onchange="filtrar()" style="width:20%;" class="form-control d-inline">
                <option value="0" <?php if ($filtro == 0) echo 'selected' ?>>Todas</option>
                <option value="1" <?php if ($filtro == 1) echo 'selected' ?>>Chilena</option>
                <option value="2" <?php if ($filtro == 2) echo 'selected' ?>>Comida rápida</option>
                <option value="3" <?php if ($filtro == 3) echo 'selected' ?>>Parrilladas</option>
                <option value="4" <?php if ($filtro == 4) echo 'selected' ?>>Internacional</option>
                <option value="5" <?php if ($filtro == 5) echo 'selected' ?>>Bar</option>
                <option value="6" <?php if ($filtro == 6) echo 'selected' ?>>Café</option>
                <option value="7" <?php if ($filtro == 7) echo 'selected' ?>>Vegana</option>
                <option value="8" <?php if ($filtro == 8) echo 'selected' ?>>Gastropub</option>
                <option value="9" <?php if ($filtro == 9) echo 'selected' ?>>Delicatense</option>
            </select>
            <div class="d-inline" >
                <div class="input-group mb-3 d-inline" style="left:15%" >
                    <input type="text" class="form-control d-inline" style="width:41%;"
                    placeholder="Comida, nombre restaurante, etc." aria-label="Comida, nombre restaurante, etc." id="buscar"
                    aria-describedby="basic-addon2" value="<?php echo $buscar; ?>">
                    <div class="input-group-append d-inline">
                        <button class="btn btn-secondary" type="button" style="right:3px;" onclick="kk()">Button</button>
                    </div>
                </div>
            </div>
            
            <p id="demo"></p>
        </div> -->
        <div class="row sonar-portfolio">
            <!-- Single gallery Item -->
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/maki.jpg"><img src="../images/hoteles/variedades/maki.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Maki Hotel</b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/foto1.jpg"><img src="../images/hoteles/variedades/foto1.jpg" alt="Casa Solitaria"></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Hotel Casa Solaria</b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/foto10.jpg"><img src="../images/hoteles/variedades/foto10.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Hostal Buena Tierra</b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/foto9.jpg"><img src="../images/hoteles/variedades/foto9.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Cocurantu Hotel Boutique</b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/monteVerde.jpg"><img src="../images/hoteles/variedades/monteVerde.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Hotel & Apart Hotel Monte Verde</b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/foto7.jpg"><img src="../images/hoteles/variedades/foto7.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Alpes Hotel</b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/casaEstablo.jpg"><img src="../images/hoteles/variedades/casaEstablo.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Hotel Boutique CasaEstablo</b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/saltoCari.jpg"><img src="../images/hoteles/variedades/saltoCari.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Hotel Salto del Carileufu</b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/indomito.jpg"><img src="../images/hoteles/variedades/indomito.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Hotel Pucón Indómito</b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/ecoLodge.jpg"><img src="../images/hoteles/variedades/ecoLodge.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Elementos Eco Lodge</b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/enjoyGranhotel.jpg"><img src="../images/hoteles/variedades/enjoyGranhotel.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Enjoy Gran Hotel Pucon</b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/enjoyPark.jpg"><img src="../images/hoteles/variedades/enjoyPark.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Enjoy Park Lake </b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/vientosDelSur.jpg"><img src="../images/hoteles/variedades/vientosDelSur.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Vientos del Sur</b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/rangi.jpg"><img src="../images/hoteles/variedades/rangi.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Hotel Rangi Pucon </b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/loungeBrasil.jpg"><img src="../images/hoteles/variedades/loungeBrasil.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Lounge Brasil Hostería Boutique</b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/dptos.jpg"><img src="../images/hoteles/variedades/dptos.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Departamentos Gran Hotel Pucón</b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/aldeaNaukana.jpg"><img src="../images/hoteles/variedades/aldeaNaukana.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Aldea Naukana Posada Boutique</b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/malalhue.jpg"><img src="../images/hoteles/variedades/malalhue.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Hotel Malalhue</b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/bordeLuz.jpg"><img src="../images/hoteles/variedades/bordeLuz.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Hotel Borde Luz</b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/graciela.jpg"><img src="../images/hoteles/variedades/graciela.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Hostal Graciela</b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/frontera.jpg"><img src="../images/hoteles/variedades/frontera.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Frontera Pucón Hostel B&B </b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/fresiaSuite.jpg"><img src="../images/hoteles/variedades/fresiaSuite.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Fresia Suite</b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/velvet.jpg"><img src="../images/hoteles/variedades/velvet.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Velvet375 GAY Hotel, Hetero-Friendly</b></h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
                <a class="gallery-img" href="../images/hoteles/variedades/antumalal.jpg"><img src="../images/hoteles/variedades/antumalal.jpg" alt=""></a>
                <!-- Gallery Content -->
                <div class="gallery-content">
                    <h4><b>Hotel Antumalal</b></h4>
                </div>
            </div>
            

            <!-- <div class="row sonar-portfolio">
                <?php foreach ($rests as $res => $value) {
                    echo $value;
                } ?>
            </div> -->

        </div>
    </div>
</section>

<?php
include("../inferior.php");
?>

<script>
    function filtrar() {
        var x = document.getElementById("mySelect").value;
        // document.getElementById("demo").innerHTML = "You selected: " + x;
        window.location = 'restaurantes.php?filtro=' + x;
    }
    function kk(){
        var buscar = document.getElementById('buscar');
        window.location = 'restaurantes.php?buscar=' + buscar.value;
    }
</script>