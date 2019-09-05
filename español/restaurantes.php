<?php
include("../superior.php");
include("restaurantes.service.php");

if (isset($_GET['filtro'])) {
    $filtro = $_GET['filtro'];
    $rests = filtrar($filtro);
    $buscar= '';
} else if(isset($_GET['buscar'])){
    $filtro=0;
    $buscar= $_GET['buscar'];
    $rests = buscar($buscar);
    echo 'pasa por aqui';
} else {
    $filtro=0;
    $rests = filtrar($filtro);
    $buscar= '';
}


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
        <div class="col-sm-12">
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
        </div>

        

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