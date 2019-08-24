<?php
include("superior.php");
?>

    <!-- ***** Hero Area Start ***** -->
    <div class="hero-area d-flex align-items-center">
        <!-- Hero Thumbnail -->
        <div class="hero-thumbnail equalize bg-img" style="background-image: url(img/bg-img/elements.jpg);"></div>
        
        <!-- Hero Content -->
        <div class="hero-content equalize">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="line"></div>
                        <h2>Elements</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui.</p>
                        <a href="#" class="btn sonar-btn white-btn">contact me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Hero Area End ***** -->

    <!-- ***** Elements Area Start ***** -->
    <section class="elements-area section-padding-100-0">
        <div class="container">

            <!-- ***** Buttons ***** -->
            <div class="row mb-100">
                <div class="col-12">
                    <div class="elements-title">
                        <h2>Buttons</h2>
                    </div>
                    <!-- Button -->
                    <div class="sonar-buttons-area">
                        <a href="#" class="btn sonar-btn m-2">Contact Me</a>
                        <a href="#" class="btn sonar-btn btn-2 m-2">Contact Me</a>
                        <a href="#" class="btn sonar-btn btn-3 m-2">Contact Me</a>
                    </div>
                </div>
            </div>


            <!-- ***** Progress Bars & Accordions ***** -->
            <div class="row">
                <div class="col-12">
                    <div class="elements-title">
                        <h2>Progress Bars &amp; Accordions</h2>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <!-- Progress Bar Content Area -->
                            <div class="services-progress-bar mb-100">
                                <!-- Single Progress Bar -->
                                <div class="single_progress_bar">
                                    <div id="bar1" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="80"></span>
                                    </div>
                                    <p>Pacience</p>
                                </div>
                                <!-- Single Progress Bar -->
                                <div class="single_progress_bar">
                                    <div id="bar2" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="90"></span>
                                    </div>
                                    <p>Creativity</p>
                                </div>
                                <!-- Single Progress Bar -->
                                <div class="single_progress_bar">
                                    <div id="bar3" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="100"></span>
                                    </div>
                                    <p>Commited</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                                <!-- single accordian area -->
                                <div class="panel single-accordion">
                                    <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Donec ipsum metus, pharetr a quis nunc sit amet, maximus.
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                                    <div id="collapseOne" class="accordion-content collapse show">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui.</p>
                                    </div>
                                </div>
                                <!-- single accordian area -->
                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Maximus vehicula nibh. Prae sent pulvinar porta.
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    <div id="collapseTwo" class="accordion-content collapse">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui.</p>
                                    </div>
                                </div>
                                <!-- single accordian area -->
                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Pharetr a quis nunc sit amet, maximus vehicula nibh.
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                                    </h6>
                                    <div id="collapseThree" class="accordion-content collapse">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ***** Loaders ***** -->
            <div class="row">
                <div class="col-12">
                    <div class="elements-title">
                        <h2>Loaders</h2>
                    </div>

                    <div class="our-skills-area text-center">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-pie-bar mb-100" data-percent="90">
                                    <canvas class="bar-circle" width="100" height="100"></canvas>
                                    <p>Landsacpes</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-pie-bar mb-100" data-percent="65">
                                    <canvas class="bar-circle" width="100" height="100"></canvas>
                                    <p>Portraits</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-pie-bar mb-100" data-percent="25">
                                    <canvas class="bar-circle" width="100" height="100"></canvas>
                                    <p>Studio</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-pie-bar mb-100" data-percent="69">
                                    <canvas class="bar-circle" width="100" height="100"></canvas>
                                    <p>Weddings</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ***** Milestones ***** -->
            <div class="row">
                <div class="col-12">
                    <div class="elements-title">
                        <h2>Milestones</h2>
                    </div>
                </div>

                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <img src="img/core-img/golden-ratio.png" alt="">
                        <h2><span class="counter">149</span></h2>
                        <p>Happy Brides</p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <img src="img/core-img/canvas.png" alt="">
                        <h2><span class="counter">2391</span></h2>
                        <p>Landscape Photos</p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <img src="img/core-img/mouse.png" alt="">
                        <h2><span class="counter">245</span></h2>
                        <p>Airbrushed Photos</p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <img src="img/core-img/coffee.png" alt="">
                        <h2><span class="counter">128</span></h2>
                        <p>Coffes a month</p>
                    </div>
                </div>
            </div>

            <!-- ***** Icon Boxes ***** -->
            <div class="row mb-50">
                <div class="col-12">
                    <div class="elements-title">
                        <h2>Icon boxes</h2>
                    </div>
                </div>

                <!-- Single Services Area -->
                <div class="col-12 col-md-4">
                    <div class="single-services-area">
                        <img src="img/core-img/camera.png" alt="">
                        <h4>Wedding Photograpy</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui.</p>
                    </div>
                </div>
                <!-- Single Services Area -->
                <div class="col-12 col-md-4">
                    <div class="single-services-area">
                        <img src="img/core-img/vector.png" alt="">
                        <h4>Studio Photograpy</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui.</p>
                    </div>
                </div>
                <!-- Single Services Area -->
                <div class="col-12 col-md-4">
                    <div class="single-services-area">
                        <img src="img/core-img/pantone.png" alt="">
                        <h4>Fashion Photograpy</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ***** Elements Area End ***** -->

    <?php
include("inferior.php");
?>