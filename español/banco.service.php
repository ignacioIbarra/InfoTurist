<?php
$ban1 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes studio wow fadeInUpBig" data-wow-delay="300ms" id="1">
        <a class="gallery-img" href="../images/banco/Banco_de_Chile_Logo.png"><img src="../images/banco/Banco_de_Chile_Logo.png" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4>Banco De Chile</h4>
        </div>
    </div>';
$ban2 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits fashion wow fadeInUpBig" data-wow-delay="500ms" id="2">
        <a class="gallery-img" href="../images/banco/bancoestado.png"><img src="../images/banco/bancoestado.png" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
        <h4>Banco Estado</h4>
        </div>
    </div>';

$ban3 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes studio wow fadeInUpBig" data-wow-delay="700ms">
        <a class="gallery-img" href="../images/banco/bci.jpg"><img src="../images/banco/bci.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4>BCI</h4>
        </div>
    </div>';

$ban4 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits studio wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/banco/santander.jpg"><img src="../images/banco/santander.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4>Santander</h4>
        </div>
    </div>';

$banco = [
        $ban1, $ban2, $ban3, $ban4
    ];

function filtrar($filtro)
{
    global $banco;
    if ($filtro == 0) {
        // todos
        return $banco;
    }
}
?>
