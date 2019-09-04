<?php
$far1 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes studio wow fadeInUpBig" data-wow-delay="300ms" id="1">
        <a class="gallery-img" href="../images/farmacias/ahumada.png"><img src="../images/farmacias/ahumada.png" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4>farmacias Ahumada</h4>
        </div>
    </div>';
$far2 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits fashion wow fadeInUpBig" data-wow-delay="500ms" id="2">
        <a class="gallery-img" href="../images/farmacias/cruzverde.png"><img src="../images/farmacias/cruzverde.png" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
        <h4>farmacias Cruz Verde</h4>
        </div>
    </div>';

$far3 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes studio wow fadeInUpBig" data-wow-delay="700ms">
        <a class="gallery-img" href="../images/farmacias/farmaciapucon.png"><img src="../images/farmacias/farmaciapucon.png" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4>Farmacia Pucon</h4>
        </div>
    </div>';

$far4 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits studio wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/farmacias/relmu.png"><img src="../images/farmacias/relmu.png" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4>Farmacia Relmu</h4>
        </div>
    </div>';
$far5 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits studio wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/farmacias/salcobrand.png"><img src="../images/farmacias/salcobrand.png" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4>Farmacia Salcobrand</h4>
        </div>
    </div>';

$farmacia = [
    $far1, $far2, $far3, $far4, $far5
];

function filtrar($filtro)
{
    global $farmacia;
    if ($filtro == 0) {
        // todos
        return $farmacia;
    }
}
?>
