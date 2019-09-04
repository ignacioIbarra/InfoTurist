<?php
$bus1 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes studio wow fadeInUpBig" data-wow-delay="200ms" id="1">
        <a class="gallery-img" href="../images/terminalbuses/busescaburgua.jpg"><img src="../images/terminalbuses/busescaburgua.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4>Buses Caburgua</h4>
        </div>
    </div>';
$bus2 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits fashion wow fadeInUpBig" data-wow-delay="400ms" id="2">
        <a class="gallery-img" href="../images/terminalbuses/busesjac.jpg"><img src="../images/terminalbuses/busesjac.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
        <h4>Buses Jac</h4>
        </div>
    </div>';

$bus3 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes studio wow fadeInUpBig" data-wow-delay="600ms">
        <a class="gallery-img" href="../images/terminalbuses/igillaima.jpg"><img src="../images/terminalbuses/igillaima.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4>Buses Igi Llaima</h4>
        </div>
    </div>';

$bus4 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits studio wow fadeInUpBig" data-wow-delay="800ms">
        <a class="gallery-img" href="../images/terminalbuses/JetSur.jpg"><img src="../images/terminalbuses/JetSur.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4>Buses Jet Sur</h4>
        </div>
    </div>';
$bus5 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits studio wow fadeInUpBig" data-wow-delay="1000ms">
        <a class="gallery-img" href="../images/terminalbuses/lineaazul.jpg"><img src="../images/terminalbuses/lineaazul.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4>Buses Linea Azul</h4>
        </div>
    </div>';
$bus6 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes studio wow fadeInUpBig" data-wow-delay="1200ms" id="1">
        <a class="gallery-img" href="../images/terminalbuses/pullmanbus.jpg"><img src="../images/terminalbuses/pullmanbus.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4>Buses Pullman Bus</h4>
        </div>
    </div>';
$bus7 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits fashion wow fadeInUpBig" data-wow-delay="1400ms" id="2">
        <a class="gallery-img" href="../images/terminalbuses/sanmartín.jpg"><img src="../images/terminalbuses/sanmartín.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
        <h4>Buses San Martín</h4>
        </div>
    </div>';

$bus8 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes studio wow fadeInUpBig" data-wow-delay="1600ms">
        <a class="gallery-img" href="../images/terminalbuses/turbus.jpg"><img src="../images/terminalbuses/turbus.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4>Buses Tur Bus</h4>
        </div>
    </div>';

$bus9 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits studio wow fadeInUpBig" data-wow-delay="1800ms">
        <a class="gallery-img" href="../images/terminalbuses/vipuray.jpg"><img src="../images/terminalbuses/vipuray.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4>Buses Vipu Ray</h4>
        </div>
    </div>';

$busstation = [
    $bus1, $bus2, $bus3, $bus4, $bus5, $bus6, $bus7, $bus8, $bus9
];

function filtrar($filtro)
{
    global $busstation;
    if ($filtro == 0) {
        // todos
        return $busstation;
    }
}
?>