<?php
include("../superior.php");
include("restaurantes.service.php");
$h = $tiposComidaArr;
?>

<style>
    .header-area {
        background-color: black;
    }

    img {
        padding: 5%;
    }

    h4 {
        margin-top: 1%;
    }

    .middle {
        transition: .5s ease;
        opacity: 1;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }

    .text {
        color: white;
        font-size: 16px;
        padding: 16px 32px;
    }

    * {
        box-sizing: border-box;
    }

    .row>.column {
        padding: 0 8px;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .column {
        float: left;
        width: 10%;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 7%;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: cornsilk;
    }


    /* Modal Content */
    .modal-content {
        position: relative;
        background-color: cornsilk;
        margin: auto;
        padding: 0;
        width: 65%;
        max-width: 900px;
        height: 80%;
    }

    /* The Close Button */
    .close {
        color: brown;
        position: absolute;
        top: 10%;
        right: 13%;
        font-size: 46px;
        font-weight: bold;
        opacity: 1;
    }

    .close:hover,
    .close:focus {
        color: #999;
        text-decoration: none;
        cursor: pointer;
    }

    .mySlides {
        display: none;
    }

    .cursor {
        cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: black;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    img {
        margin-bottom: -4px;
    }

    .caption-container {
        text-align: center;
        background-color: sienna;
        padding: 2px 16px;
        color: white;
    }

    .demo {
        opacity: 0.6;
    }

    .active,
    .demo:hover {
        opacity: 1;
    }

    img.hover-shadow {
        transition: 0.3s;
    }

    .hover-shadow:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    #caption {
        color: white;
        font-size: 20px;
    }
</style>
<!--  BeerHouse  -->
<!-- <div class ="card">
    <div class="card-body" style="margin-bottom:5%;padding: 9%;">
        <h3> <b> BeerHouse </b></h3>
        <div class="row" >
            <div class="col-sm-6">
            <div class="single_gallery_item landscapes studio wow fadeInUpBig" 
                data-wow-delay="300ms" id="1">
                    <div id="carouselExampleControls" class="carousel slide"  data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="../images/restaurantes/beerHouse/foto1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../images/restaurantes/beerHouse/foto2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../images/restaurantes/beerHouse/foto3.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../images/restaurantes/beerHouse/foto4.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../images/restaurantes/beerHouse/foto5.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../images/restaurantes/beerHouse/foto6.jpg" class="img-fluid" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../images/restaurantes/beerHouse/foto7.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../images/restaurantes/beerHouse/foto8.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../images/restaurantes/beerHouse/foto9.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../images/restaurantes/beerHouse/foto10.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
            <div class="container">
            <h4>Tipos de comida:</h4> 
                <?php
                for ($i = 0; $i < count($tiposComidaArr[27]); $i++) {
                    if ($i < count($tiposComidaArr[27]) - 1) {
                        echo $tiposComidaArr[27][$i] . ', ';
                    } else {
                        echo $tiposComidaArr[27][$i] . '.';
                    }
                }
                ?>
                <br>
                <h4>Menú</h4>
                    <?php echo $hamburguesas . ', ' . $estadoUnidense . ', ' . $ceviche . ', ' . $tragos . '.'; ?>

                <h4>Dirección</h4>
                    <a href="https://www.google.com/maps/place/BEERHOUSE+Pucon-Chile/@-39.275398,-71.976426,15z/data=!4m5!3m4!1s0x0:0xeb0840a9de62f2b6!8m2!3d-39.275398!4d-71.976426">
                        Gral. Urrutia 324, Pucon, Pucón, Región de la Araucanía
                </a>
                <br>
            </div>

            <div class="container text-center">
                <h4 style="text-align:left;">Fotos</h4>
                <div class="row">
                    <div class="col-sm-4">
                    <img src="../images/restaurantes/beerHouse/foto10.jpg" class="img-responsive" style="width:100%" alt="Image">
                    </div>
                    <div class="col-sm-4">
                    <img src="../images/restaurantes/beerHouse/foto9.jpg" class="img-responsive" style="width:100%" alt="Image">
                    </div>
                    <div class="col-sm-4">
                    <img src="../images/restaurantes/beerHouse/foto8.jpg" class="img-responsive" style="width:100%" alt="Image">
                    </div>
                </div>

                <div class="row">
                    <br>
                    <div class="col-sm-4">
                    <img src="../images/restaurantes/beerHouse/foto7.jpg" class="img-responsive" style="width:100%" alt="Image">
                    </div>
                    <div class="col-sm-4">
                    <img src="../images/restaurantes/beerHouse/foto6.jpg" class="img-responsive" style="width:100%" alt="Image">
                    </div>
                    <div class="col-sm-4">
                    <img src="../images/restaurantes/beerHouse/foto5.jpg" class="img-responsive" style="width:100%" alt="Image">
                    </div>
                </div>
                </div><br>

            </div>
        </div>
    </div>
</div> -->



<!-- Torreon de Caburgua -->
<!-- <div class ="card">
    <div class="card-body" style="margin-bottom:5%;padding: 9%;">
        <h3> <b> Torreon de Caburgua </b></h3>
        <div class="row" >
            <div class="col-sm-6">
                <img class="d-block w-100" src="../images/restaurantes/variedad/torreon.jpg" alt="First slide">
            </div>
            <div class="col-sm-6">
            <div class="container">
            <h4>Tipos de comida:</h4>
                <?php
                for ($i = 0; $i < count($tiposComidaArr[0]); $i++) {
                    if ($i < count($tiposComidaArr[0]) - 1) {
                        echo $tiposComidaArr[0][$i] . ', ';
                    } else {
                        echo $tiposComidaArr[0][$i] . '.';
                    }
                }
                ?>
                <br>
                <h4>Menú</h4>
                    Criolla, Cajún, Tortas, Comida típica chilena.

                <h4>Dirección</h4>
                    <a href="https://www.google.com/maps/place/Torreon+de+Caburgua/@-39.2272677,-71.818951,17z/data=!4m8!3m7!1s0x96138256d5b8f2bb:0x479ce0169f32a48d!5m2!4m1!1i2!8m2!3d-39.2272677!4d-71.818951">
                        Camino a Caburgua km 19, Pucón, 4920000
                </a>
                <br>
            </div>

            <div class="container text-center">
                Comparte tus fotos de tu visita a Torreon de Caburgua.
            </div>
        </div>
    </div>
</div> -->

<!-- BEANIES & BIKINIS -->
<!-- <div class ="card">
    <div class="card-body" style="margin-bottom:5%;padding: 9%;">
        <h3> <b> Beanis & Bikins </b></h3>
        <div class="row" >
            <div class="col-sm-6">
                <img class="d-block w-100" src="../images/restaurantes/variedad/beanies.jpg" alt="First slide">
            </div>
            <div class="col-sm-6">
            <div class="container">
            <h4>Tipos de comida:</h4>
            <?php
            for ($i = 0; $i < count($tiposComidaArr[1]); $i++) {
                if ($i < count($tiposComidaArr[1]) - 1) {
                    echo $tiposComidaArr[1][$i] . ', ';
                } else {
                    echo $tiposComidaArr[1][$i] . '.';
                }
            }
            ?>
                <br>
                <h4>Menú</h4>
                    <?php echo $pizza . ', ' . $tragos . ', ' . $hamburguesas . ', ' . $fajitas ?>.

                <h4>Dirección</h4>
                <a href="https://www.google.com/maps/place/Beanies%26Bikinis/@-39.2775909,-71.9756511,17z/data=!4m5!3m4!1s0x96147f40750ebe97:0x93622fc7dfebdfc8!8m2!3d-39.2775708!4d-71.9755787">
                    Fresia 548, Pucon, Pucón, Región de la Araucanía
                </a>
                <br>
            </div>

            <div class="container text-center">
            </div>
            <div class="container text-center">
                <h4 style="text-align:left;">Fotos</h4>
                <div class="row">
                    <div class="col-sm-4">
                    <img src="../images/restaurantes/beanies/foto1.png" class="img-responsive" style="width:100%" alt="Image">
                    </div>
                    <div class="col-sm-4">
                    <img src="../images/restaurantes/beanies/foto2.png" class="img-responsive" style="width:100%" alt="Image">
                    </div>
                    <div class="col-sm-4">
                    <img src="../images/restaurantes/beanies/foto3.png" class="img-responsive" style="width:100%" alt="Image">
                    </div>
                </div>

                <div class="row">
                    <br>
                    <div class="col-sm-4">
                    <img src="../images/restaurantes/beanies/foto4.png" class="img-responsive" style="width:100%" alt="Image">
                    </div>
                    <div class="col-sm-4">
                    <img src="../images/restaurantes/beanies/foto5.png" class="img-responsive" style="width:100%" alt="Image">
                    </div>
                    <div class="col-sm-4">
                    Comparte tus fotos de tu visita a Beanis & Bikins.
                    </div>
                </div>
                </div><br>

            </div>
        </div>
    </div>
</div>  -->

<!-- Sanguruchos Pizza -->
<!-- <div class ="card">
    <div class="card-body" style="margin-bottom:5%;padding: 9%;">
        <h3> <b> Sanguruchos Pizza</b></h3>
        <div class="row" >
            <div class="col-sm-6">
                <img class="d-block w-100" src="../images/restaurantes/variedad/sangurucho.jpg" alt="First slide">
            </div>
            <div class="col-sm-6">
            <div class="container">
            <h4>Tipos de comida:</h4>
            <?php
            for ($i = 0; $i < count($tiposComidaArr[2]); $i++) {
                if ($i < count($tiposComidaArr[2]) - 1) {
                    echo $tiposComidaArr[2][$i] . ', ';
                } else {
                    echo $tiposComidaArr[2][$i] . '.';
                }
            }
            ?>
                <br>
                <h4>Menú</h4>
                    <?php echo $pizza . ', ' . $sandwich . ', ' . $hotdogs . ', ' . $hamburguesas ?>.

                <h4>Dirección</h4>
                <a href="https://www.google.com/maps/search/Ohiggins+774+Loc.1104,+Puc%C3%B3n+2920000+Chile/@-39.2749836,-71.9730837,17z/data=!3m1!4b1">
                    Ohiggins 774 Loc.1104, Pucón 2920000 Chile
                </a>
                <br>
            </div>

            <div class="container text-center">
            </div>
            <div class="container text-center">
                <h4 style="text-align:left;">Fotos</h4>
                <div class="row">
                    <div class="col-sm-4">
                    <img src="../images/restaurantes/sangurucho/foto1.jpg" class="img-responsive" style="width:100%" alt="Image">
                    </div>
                    <div class="col-sm-4">
                    <img src="../images/restaurantes/sangurucho/foto2.jpg" class="img-responsive" style="width:100%" alt="Image">
                    </div>
                    <div class="col-sm-4">
                    <img src="../images/restaurantes/sangurucho/foto3.jpg" class="img-responsive" style="width:100%" alt="Image">
                    </div>
                </div>

                <div class="row">
                    Comparte tus fotos de tu visita a Sanguruchos Pizza.
                </div>
                </div><br>
            </div>
        </div>
    </div>
</div>  -->

<!-- La trattoria-->

<div class="card">
    <div class="card-body" style="margin-bottom:5%;padding: 9%;">
        <h3> <b> La Trattoria da Pietro</b></h3>
        <div class="row">
            <div class="col-sm-6">
                <img class="d-block w-100" src="../images/restaurantes/variedad/trattoria.jpg" alt="First slide" onclick="openModal();currentSlide(1)" style="cursor:pointer;">
            </div>
            <div class="col-sm-6">
                <div class="container">
                    <h4>Tipos de comida:</h4>
                    <?php
                    for ($i = 0; $i < count($tiposComidaArr[3]); $i++) {
                        if ($i < count($tiposComidaArr[3]) - 1) {
                            echo $tiposComidaArr[3][$i] . ', ';
                        } else {
                            echo $tiposComidaArr[3][$i] . '.';
                        }
                    }
                    ?>
                    <br>
                    <h4>Menú</h4>
                    <?php echo $pastas . ', ' . $pizza . ', ' . $postres ?>.

                    <h4>Dirección</h4>
                    <a href="https://www.google.com/maps/place/La+Trattoria+da+Pietro/@-39.2752858,-71.9700697,15z/data=!4m5!3m4!1s0x0:0xab42566ed0759ed6!8m2!3d-39.2752858!4d-71.9700697">
                        Bernardo O'Higgins 717, local 4 Patagonia Boulevard, Pucón Chile
                    </a>
                    <br>
                </div>

                <div class="container text-center">
                </div>
                <div class="container text-center">
                    <h4 style="text-align:left;">Fotos</h4>
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="../images/restaurantes/tratoria/foto1.jpg" class="img-responsive" style="width:100%;cursor:pointer;" alt="Image" onclick="openModal();currentSlide(2)">
                        </div>
                        <div class="col-sm-4">
                            <img src="../images/restaurantes/tratoria/foto2.jpg" class="img-responsive" style="width:100%;cursor:pointer;" alt="Image" onclick="openModal();currentSlide(3)">
                        </div>
                        <div class="col-sm-4">
                            <img src="../images/restaurantes/tratoria/foto3.jpg" class="img-responsive" style="width:100%;cursor:pointer;" alt="Image" onclick="openModal();currentSlide(4)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="../images/restaurantes/tratoria/foto10.jpg" class="img-responsive" style="width:100%;cursor:pointer;" alt="Image" onclick="openModal();currentSlide(5)">
                        </div>
                        <div class="col-sm-4">
                            <img src="../images/restaurantes/tratoria/foto4.jpg" class="img-responsive" style="width:100%;cursor:pointer;" alt="Image" onclick="openModal();currentSlide(6)">
                        </div>
                        <div class="col-sm-4" style="cursor:pointer;">
                            <img src="../images/restaurantes/tratoria/foto6.jpg" class="img-responsive" style="width:100%;opacity: 0.3;" alt="Image" onclick="openModal();currentSlide(7)">
                            <div class="middle">
                                <div class="text" style="font-size:60px;">+</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- 
<h2 style="text-align:center">Lightbox</h2>

<div class="row">
  <div class="column">
    <img src="../images/restaurantes/tratoria/foto1.jpg" style="width:490px;height:403px;padding:1%;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="../images/restaurantes/tratoria/foto2.jpg" style="width:87%;height:79%;padding:3%;" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="../images/restaurantes/tratoria/foto3.jpg" style="width:87%;height:79%;padding:3%;" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="../images/restaurantes/tratoria/foto4.jpg" style="width:87%;height:79%;padding:3%;" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div> -->


    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content" style="text-align:center">

            <div class="mySlides">
                <div class="numbertext">1 / 10</div>
                <img src="../images/restaurantes/variedad/trattoria.jpg" style="width:678px;height:500px;padding:1%;">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 10</div>
                <img src="../images/restaurantes/tratoria/foto1.jpg" style="width:678px;height:500px;padding:1%;">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 10</div>
                <img src="../images/restaurantes/tratoria/foto2.jpg" style="width:678px;height:500px;padding:1%;">
            </div>

            <div class="mySlides">
                <div class="numbertext">4 / 10</div>
                <img src="../images/restaurantes/tratoria/foto3.jpg" style="width:678px;height:500px;padding:1%;">
            </div>

            <div class="mySlides">
                <div class="numbertext">5 / 10</div>
                <img src="../images/restaurantes/tratoria/foto10.jpg" style="width:678px;height:500px;padding:1%;">
            </div>
            <div class="mySlides">
                <div class="numbertext">6 / 10</div>
                <img src="../images/restaurantes/tratoria/foto4.jpg" style="width:678px;height:500px;padding:1%;">
            </div>
            <div class="mySlides">
                <div class="numbertext">7 / 10</div>
                <img src="../images/restaurantes/tratoria/foto6.jpg" style="width:678px;height:500px;padding:1%;">
            </div>
            <div class="mySlides">
                <div class="numbertext">8 / 10</div>
                <img src="../images/restaurantes/tratoria/foto7.jpg" style="width:678px;height:500px;padding:1%;">
            </div>
            <div class="mySlides">
                <div class="numbertext">9 / 10</div>
                <img src="../images/restaurantes/tratoria/foto8.jpg" style="width:678px;height:500px;padding:1%;">
            </div>
            <div class="mySlides">
                <div class="numbertext">10 / 10</div>
                <img src="../images/restaurantes/tratoria/foto9.jpg" style="width:678px;height:500px;padding:1%;">
            </div>

            <a class="prev" onclick="plusSlides(-1)" style="left: 3%;color:white;">&#10094;</a>
            <a class="next" onclick="plusSlides(1)" style="right: 3%;color:white;">&#10095;</a>

            <div class="caption-container" style="color:white;">
                <p id="caption"></p>
            </div>


            <div class="col-sm-12">
                <div class="column">
                    <img class="demo cursor" src="../images/restaurantes/variedad/trattoria.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
                </div>
                <div class="column">
                    <img class="demo cursor" src="../images/restaurantes/tratoria/foto1.jpg" style="width:100%" onclick="currentSlide(2)" alt="Panini Veneto ">
                </div>
                <div class="column">
                    <img class="demo cursor" src="../images/restaurantes/tratoria/foto2.jpg" style="width:100%" onclick="currentSlide(3)" alt="Panini vegetariana">
                </div>
                <div class="column">
                    <img class="demo cursor" src="../images/restaurantes/tratoria/foto3.jpg" style="width:100%" onclick="currentSlide(4)" alt="Mountains and fjords">
                </div>
                <div class="column">
                    <img class="demo cursor" src="../images/restaurantes/tratoria/foto10.jpg" style="width:100%" onclick="currentSlide(5)" alt="Northern Lights">
                </div>
                <div class="column">
                    <img class="demo cursor" src="../images/restaurantes/tratoria/foto4.jpg" style="width:100%" onclick="currentSlide(6)" alt="Northern Lights">
                </div>
                <div class="column">
                    <img class="demo cursor" src="../images/restaurantes/tratoria/foto6.jpg" style="width:100%" onclick="currentSlide(7)" alt="Northern Lights">
                </div>
                <div class="column">
                    <img class="demo cursor" src="../images/restaurantes/tratoria/foto7.jpg" style="width:100%" onclick="currentSlide(8)" alt="Northern Lights">
                </div>
                <div class="column">
                    <img class="demo cursor" src="../images/restaurantes/tratoria/foto8.jpg" style="width:100%" onclick="currentSlide(9)" alt="Northern Lights">
                </div>
                <div class="column">
                    <img class="demo cursor" src="../images/restaurantes/tratoria/foto9.jpg" style="width:100%" onclick="currentSlide(10)" alt="Northern Lights">
                </div>
            </div>

        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>



    <!-- <div class="mfp-container mfp-s-ready mfp-image-holder">
    <div class="mfp-content"><div class="mfp-figure">
        <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        <figure>
            <div class="single_gallery_item landscapes studio wow fadeInUpBig"  style="max-height: 700px"
                data-wow-delay="300ms" id="1">
                    <div id="carouselExampleControls" class="carousel slide"  data-ride="carousel">
                        <div class="carousel-inner" >
                        <?php
                        for ($i = 1; $i <= 10; $i++) {
                            if ($i == 5) {
                                $active = 'active';
                            } else {
                                $active = '';
                            }
                            echo '<div class="carousel-item ' . $active . '" style="max-height: 700px">
                                        <img class="d-block w-100" src="../images/restaurantes/tratoria/foto' . $i . '.jpg" alt="First slide" >
                                    </div>';
                        }
                        ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>


            <figcaption>
                <div class="mfp-bottom-bar">
                    <div class="mfp-title"></div>
                    <div class="mfp-counter"></div>
                </div>
            </figcaption>
        </figure>
    </div>
</div>
<div class="mfp-preloader">Loading...</div> -->

    <?php
    include("../inferior.php");
    ?>