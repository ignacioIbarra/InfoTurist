<?php
include("superior.php");
include("restaurantes.service.php");

if (isset($_GET['filtro'])) {
    $filtro = $_GET['filtro'];
} else {
    $filtro = 0;
}
$rests = filtrar($filtro);
?>
<style>
    .header-area {
        background-color: black;
    }
</style>



<!-- ****** Gallery Area Start ****** -->

<section class="sonar-projects-area" id="projects">
    <div class="container-fluid" style="margin-bottom: 80px;">
        <div class="d-inline">
            <label for="filtro">Tipo de comida: &nbsp; </label>
            <select id="mySelect" name="filtro" onchange="filtrar()" style="width:20%;" class="form-control d-inline">
        </div>
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
        <p id="demo"></p>
        <div class="row sonar-portfolio">

            <?php foreach ($rests as $res => $value) {
                echo $value;
            } ?>


        </div>

        <!-- <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn sonar-btn">Load More</a>
                </div>
            </div>  -->
    </div>
</section>
<!-- ****** Gallery Area End ****** -->
<?php
include("inferior.php");
?>

<script>
    function filtrar() {
        var x = document.getElementById("mySelect").value;
        // document.getElementById("demo").innerHTML = "You selected: " + x;
        window.location = 'restaurantes.php?filtro=' + x;
    }
</script>