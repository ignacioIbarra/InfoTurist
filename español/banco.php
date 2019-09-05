<?php
include("../superior.php");
include("banco.service.php");
if (isset($_GET['filtro'])) {
    $filtro = $_GET['filtro'];
} else {
    $filtro = 0;
}
$rests = filtrar($filtro);
?>
<style>
    .header-area {
        background: 100%;
    }
</style>



<!-- ****** Gallery Area Start ****** -->

<section class="sonar-projects-area" id="projects">
    <div class="container-fluid" style="margin-bottom: 80px;">
        <div class="row sonar-portfolio">

            <?php foreach ($rests as $ban => $value) {
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
        window.location = 'banco.php?filtro=' + x;
    }
</script>