<?php


function filtrar($filtro){
    global $restaurantes;
    if ($filtro == 0) {
        // todos
        return $restaurantes;
    } else if ($filtro == 1) {
        // chilena
        return [
            $restaurantes[0], $restaurantes[8], $restaurantes[9], $restaurantes[12], $restaurantes[13], $restaurantes[6],
            $restaurantes[15], $restaurantes[16], $restaurantes[17], $restaurantes[18], $restaurantes[19], $restaurantes[21],
            $restaurantes[26], $restaurantes[29], $restaurantes[30], $restaurantes[32], $restaurantes[36]
        ];
    } else if ($filtro == 2) {
        // comida rapida
        return [
            $restaurantes[0], $restaurantes[1], $restaurantes[2], $restaurantes[5], $restaurantes[11], $restaurantes[22],
            $restaurantes[26], $restaurantes[27], $restaurantes[31], $restaurantes[23]
        ];
    } else if ($filtro == 3) {
        // Parrilladas
        return [$restaurantes[12], $restaurantes[13], $restaurantes[15], $restaurantes[18]];
    } else if ($filtro == 4) {
        // comida internacional
        return [
            $restaurantes[0], $restaurantes[8], $restaurantes[10], $restaurantes[12], $restaurantes[14],
            $restaurantes[16], $restaurantes[17], $restaurantes[19], $restaurantes[20], $restaurantes[21],
            $restaurantes[27], $restaurantes[29], $restaurantes[32], $restaurantes[33], $restaurantes[34], $restaurantes[36], $restaurantes[37], $restaurantes[39]
        ];
    } else if ($filtro == 5) {
        // Bar
        return [$restaurantes[8], $restaurantes[14], $restaurantes[22], $restaurantes[27], $restaurantes[30], $restaurantes[32], $restaurantes[39]];
    } else if ($filtro == 6) {
        // cafe
        return [
            $restaurantes[0], $restaurantes[9], $restaurantes[10], $restaurantes[11], $restaurantes[19],
            $restaurantes[28], $restaurantes[31], $restaurantes[33], $restaurantes[34], $restaurantes[36], $restaurantes[37]
        ];
    } else if ($filtro == 7) {
        // vegana
        return [
            $restaurantes[3], $restaurantes[4], $restaurantes[6], $restaurantes[7],
            $restaurantes[20], $restaurantes[24], $restaurantes[28], $restaurantes[38], $restaurantes[25]
        ];
    } else if ($filtro == 8) {
        // gastropub
        return [
            $restaurantes[1], $restaurantes[14], $restaurantes[27],
            $restaurantes[28], $restaurantes[30]
        ];
    } else if ($filtro == 9) {
        // delicatense
        return [$restaurantes[10], $restaurantes[26], $restaurantes[28], $restaurantes[31], $restaurantes[33], $restaurantes[34], $restaurantes[35]];
    }
};

function buscar($buscar){
    global $restaurantes;
    if($buscar == 'sano'){
        return [$restaurantes[3],$restaurantes[4],$restaurantes[6],$restaurantes[7],$restaurantes[19],
        $restaurantes[20],$restaurantes[24],$restaurantes[28],$restaurantes[34],$restaurantes[38]];
    } else{
        return [];
    }
}

$hamburguesas='Hamburguesas'; $estadoUnidense= 'Comida Estado Unidense'; $ceviche='Ceviche'; $tragos='Tragos';
$fajitas ='Fajitas'; $pizza = 'Pizza'; $sandwich = 'Sandwich'; $hotdogs ='Completos (hotdogs)'; $pastas = 'Pastas';
$postres = 'Postres';

$res1 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes studio wow fadeInUpBig" data-wow-delay="300ms" id="1">
        <a class="gallery-img" href="../images/restaurantes/variedad/torreon.jpg"><img src="../images/restaurantes/variedad/torreon.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>Torreon de Caburgua</b></h4>
        </div>
    </div>';
$res2 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits fashion wow fadeInUpBig" data-wow-delay="500ms" id="2">
        <a class="gallery-img" href="../images/restaurantes/variedad/beanies.jpg"><img src="../images/restaurantes/variedad/beanies.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
        <h4><b>Beanis & Bikins</b></h4>
        </div>
    </div>';

$res3 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes studio wow fadeInUpBig" data-wow-delay="700ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/sangurucho.jpg"><img src="../images/restaurantes/variedad/sangurucho.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>Sanguruchos Pizza</b></h4>
        </div>
    </div>';

$res4 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits studio wow fadeInUpBig" data-wow-delay="900ms">
        <a href="/infoTurist/espa%C3%B1ol/detalle-restaurant.php"><img src="../images/restaurantes/variedad/trattoria.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>La Trattoria da Pietro</b></h4>
        </div>
    </div>';
$res5 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="300ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/mundoElefante.jpg"><img src="../images/restaurantes/variedad/mundoElefante.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>Mundo Elefante</b></h4>
        </div>
    </div>';
$res6 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits fashion wow fadeInUpBig" data-wow-delay="500ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/puconStop.jpg"><img src="../images/restaurantes/variedad/puconStop.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>Pucón Stop</b></h4>
        </div>
    </div>';

$res7 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes fashion wow fadeInUpBig" data-wow-delay="700ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/andiamo.jpg"><img src="../images/restaurantes/variedad/andiamo.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>Andiamo</b></h4>
        </div>
    </div>';
$res8 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits studio wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/laForja.jpg"><img src="../images/restaurantes/variedad/laForja.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>La Forja</b></h4>
        </div>
    </div>';

$res9 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes studio wow fadeInUpBig" data-wow-delay="300ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/laFabrika.jpg"><img src="../images/restaurantes/variedad/laFabrika.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>La Fábrika</b></h4>
        </div>
    </div>';
$res10 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="500ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/picaCampesina.jpg"><img src="../images/restaurantes/variedad/picaCampesina.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>Picá Campesina</b></h4>
        </div>
    </div>';
$res11 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes wow fadeInUpBig" data-wow-delay="700ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/cafeEpuDomo.jpg"><img src="../images/restaurantes/variedad/cafeEpuDomo.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>Cafe Epu Domo</b></h4>
        </div>
    </div>';

$res12 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/caffePolitan.jpg"><img src="../images/restaurantes/variedad/caffePolitan.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>Coffeepolitan Chile</b></h4>
        </div>
    </div>';

$res13 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/bovinos.jpg"><img src="../images/restaurantes/variedad/bovinos.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>Bovinos</b></h4>
        </div>
    </div>';

$res14 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/coyoteGrill.jpg"><img src="../images/restaurantes/variedad/coyoteGrill.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>Coyote Grill</b></h4>
        </div>
    </div>';

$res15 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/elCastillo.jpg"><img src="../images/restaurantes/variedad/elCastillo.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>El Castillo</b></h4>
        </div>
    </div>';

$res16 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/elFogon.jpg"><img src="../images/restaurantes/variedad/elFogon.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>El Fogón</b></h4>
        </div>
    </div>';

$res17 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/revanchaChino1.jpg"><img src="../images/restaurantes/variedad/revanchaChino1.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>La Revancha Del Chino Lee Chong</b></h4>
        </div>
    </div>';

$res18 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/loretano.jpg"><img src="../images/restaurantes/variedad/loretano.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>Loretano</b></h4>
        </div>
    </div>';

$res19 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/barrosoParrilla.jpg"><img src="../images/restaurantes/variedad/barrosoParrilla.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>El Barroso Parrilla</b></h4>
        </div>
    </div>';

$res20 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/wedWed.jpg"><img src="../images/restaurantes/variedad/wedWed.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>Wed-Wed</b></h4>
        </div>
    </div>';

$res21 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/fiorentini.jpg"><img src="../images/restaurantes/variedad/fiorentini.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>Fiorentini</b></h4>
        </div>
    </div>';

$res22 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/buenaVida.jpg"><img src="../images/restaurantes/variedad/buenaVida.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>Buena Vida</b></h4>
        </div>
    </div>';


$res23 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/RAPBurger/foto1.jpg"><img src="../images/restaurantes/RAPBurger/foto1.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>RAP burguer</b></h4>
        </div>
    </div>';

$res24 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/artepizza.jpg"><img src="../images/restaurantes/variedad/artepizza.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>ArtePizza Pucón</b></h4>
        </div>
    </div>';


$res25 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/purasPavadas/foto1.jpg"><img src="../images/restaurantes/purasPavadas/foto1.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>Puras Pavadas</b></h4>
        </div>
    </div>';

$res26 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/ecole!/foto1.jpg"><img src="../images/restaurantes/ecole!/foto1.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>ecole!</b></h4>
        </div>
    </div>';
$res27 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/justDelicious/foto1.jpg"><img src="../images/restaurantes/justDelicious/foto1.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>Just Delicious</b></h4>
        </div>
    </div>';

$res28 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/beerHouse/foto1.jpg"><img src="../images/restaurantes/beerHouse/foto1.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>BeerHouse</b></h4>
        </div>
    </div>';

$res29 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/cassis.jpg"><img src="../images/restaurantes/variedad/cassis.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>Cassis</b></h4>
        </div>
    </div>';

$res30 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
    <a class="gallery-img" href="../images/restaurantes/variedad/kutral.jpg"><img src="../images/restaurantes/variedad/kutral.jpg" alt=""></a>
    <!-- Gallery Content -->
    <div class="gallery-content">
        <h4><b>Kutral</b></h4>
    </div>
    </div>';

$res31 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
    <a class="gallery-img" href="../images/restaurantes/variedad/sangucheriaPata.jpg"><img src="../images/restaurantes/variedad/sangucheriaPata.jpg" alt=""></a>
    <!-- Gallery Content -->
    <div class="gallery-content">
        <h4><b>Sangucheria Patacon</b></h4>
    </div>
    </div>';

$res32 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
    <a class="gallery-img" href="../images/restaurantes/variedad/almacen.jpg"><img src="../images/restaurantes/variedad/almacen.jpg" alt=""></a>
    <!-- Gallery Content -->
    <div class="gallery-content">
        <h4><b>Almacén de Quetro</b></h4>
    </div>
    </div>';

$res33 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
    <a class="gallery-img" href="../images/restaurantes/variedad/ottoBar.jpg"><img src="../images/restaurantes/variedad/ottoBar.jpg" alt=""></a>
    <!-- Gallery Content -->
    <div class="gallery-content">
        <h4><b>Otto Bar</b></h4>
    </div>
    </div>';

$res34 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
    <a class="gallery-img" href="../images/restaurantes/variedad/klee.jpg"><img src="../images/restaurantes/variedad/klee.jpg" alt=""></a>
    <!-- Gallery Content -->
    <div class="gallery-content">
        <h4><b>Klee Kaffee</b></h4>
    </div>
    </div>';

$res35 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/kuchenladen.jpg"><img src="../images/restaurantes/variedad/kuchenladen.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>Kuchenladen</b></h4>
        </div>
        </div>';

$res36 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
        <a class="gallery-img" href="../images/restaurantes/variedad/torreDelArtista.jpg"><img src="../images/restaurantes/variedad/torreDelArtista.jpg" alt=""></a>
        <!-- Gallery Content -->
        <div class="gallery-content">
            <h4><b>Torre del artista</b></h4>
        </div>
    </div>';

$res37 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
    <a class="gallery-img" href="../images/restaurantes/variedad/297cafe.jpg"><img src="../images/restaurantes/variedad/297cafe.jpg" alt=""></a>
    <!-- Gallery Content -->
    <div class="gallery-content">
        <h4><b>297 Café Bistro</b></h4>
    </div>
    </div>';

$res38 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
    <a class="gallery-img" href="../images/restaurantes/variedad/cafeBerlin.jpg"><img src="../images/restaurantes/variedad/cafeBerlin.jpg" alt=""></a>
    <!-- Gallery Content -->
    <div class="gallery-content">
        <h4><b>Café Berlin</b></h4>
    </div>
    </div>';

$res39 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
    <a class="gallery-img" href="../images/restaurantes/variedad/senzo.jpg"><img src="../images/restaurantes/variedad/senzo.jpg" alt=""></a>
    <!-- Gallery Content -->
    <div class="gallery-content">
        <h4><b>Senzo</b></h4>
    </div>
    </div>';

$res40 = '<!-- Single gallery Item -->
    <div class="col-12 col-sm-6 col-lg-3 single_gallery_item portraits wow fadeInUpBig" data-wow-delay="900ms">
    <a class="gallery-img" href="../images/restaurantes/variedad/latitude39.jpg"><img src="../images/restaurantes/variedad/latitude39.jpg" alt=""></a>
    <!-- Gallery Content -->
    <div class="gallery-content">
        <h4><b>Latitude 39</b></h4>
    </div>
    </div>';

$restaurantes = [
    $res1, $res2, $res3, $res4, $res5, $res6, $res7, $res8, $res9, $res10, $res11, $res12, $res13, $res14, $res15, $res16, $res17, $res18, $res19, $res20, $res21, $res22, $res23, $res24, $res25, $res26,
    $res27, $res28, $res29, $res30, $res31, $res32, $res33, $res34, $res35, $res36, $res37, $res38, $res39, $res40,
];
$c1 = 'Chilena';
$c2 = 'Comida rápida';
$c3 = 'Parrilladas';
$c4 = 'Internacional';
$c5 = 'Bar';
$c6 = 'Café';
$c7 = 'Vegana';
$c8 = 'Gastropub';
$c9 = 'Delicatense';

$comRest1 = [$c1, $c2, $c4, $c6];
$comRest2 = [$c8];
$comRest3 = [$c2];
$comRest4 = [$c7];
$comRest5 = [$c7];
$comRest6 = [$c2];
$comRest7 = [$c1, $c7];
$comRest8 = [$c7];
$comRest9 = [$c1, $c4, $c5];
$comRest10 = [$c1, $c6];
$comRest11 = [$c4, $c6, $c9];
$comRest12 = [$c2, $c6];
$comRest13 = [$c1, $c3, $c4];
$comRest14 = [$c1, $c3];
$comRest15 = [$c4, $c5, $c8];
$comRest16 = [$c1, $c3];
$comRest17 = [$c1, $c4];
$comRest18 = [$c1, $c4];
$comRest19 = [$c1, $c3];
$comRest20 = [$c1, $c4, $c6];
$comRest21 = [$c4, $c7];
$comRest22 = [$c1, $c4];
$comRest23 = [$c2, $c5];
$comRest24 = [$c2];
$comRest25 = [$c7];
$comRest26 = [$c7];
$comRest27 = [$c1, $c2, $c9];
$comRest28 = [$c2, $c4, $c8];
$comRest29 = [$c6, $c7, $c8, $c9];
$comRest30 = [$c1, $c4];
$comRest31 = [$c1, $c5, $c8];
$comRest32 = [$c2, $c6, $c9];
$comRest33 = [$c1, $c4, $c5];
$comRest34 = [$c4, $c6, $c9];
$comRest35 = [$c4, $c6, $c9];
$comRest36 = [$c9];
$comRest37 = [$c1, $c4, $c6];
$comRest38 = [$c4, $c6];
$comRest39 = [$c7];
$comRest40 = [$c4, $c5];

$tiposComidaArr = [
    $comRest1, $comRest2, $comRest3, $comRest4, $comRest5, $comRest6, $comRest7, $comRest8, $comRest9, $comRest10, $comRest11, $comRest12, $comRest13, $comRest14, $comRest15,
    $comRest16, $comRest17, $comRest18, $comRest19, $comRest20, $comRest21, $comRest22, $comRest23, $comRest24, $comRest25, $comRest26, $comRest27, $comRest28, $comRest29, $comRest30, $comRest31,
    $comRest32, $comRest33, $comRest34, $comRest35, $comRest36, $comRest37, $comRest38, $comRest39, $comRest40
];
