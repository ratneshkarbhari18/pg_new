<div class="container d-none" id="desktop-section-nav" style="background-color: transparent; "> 
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #393185; padding: 2% 0;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-auto">
                <li class="nav-item">
                    <a class="nav-link section-nav-link text-light" href="<?php echo site_url(""); ?>">
                        <!-- <img src="<?php echo site_url("assets/images/home_icon.png"); ?>" class="home-icon-gold"> -->
                        HOME
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link section-nav-link text-light" section-id="completed" href="#">COMPLETED PROJECTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link section-nav-link text-light" section-id="ongoing" href="#">ONGOING PROJECTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link section-nav-link text-light" section-id="upcoming" href="#">UPCOMING PROJECTS</a>
                </li>
                
            </ul>
        </div>
    </nav>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" />
<main class="page-content" id="all-projects">
    
    <section id="ongoing" class="usual-projects-page-section">
        <div class="container">
            <h1 class="section-title">ONGOING PROJECTS</h1>
            <div class="owl-carousel" id="ongoing-projects-carousel">
                <div class="project-slide" style="border: 3px solid #008DD2; border-radius: 10px;">
                    <a href="<?php echo site_url("precious-harmony"); ?>">
                    <div class="img-container">
                        <img src="<?php echo site_url("assets/images/projects_01.jpg"); ?>" class="project-image w-100">
                    </div>
                    <div class="meta-container container-fluid">
                        <h3 class="project-title">Precious Harmony</h3>
                        <p class="project-text">Badlapur East</p>
                    </div>
                    </a>
                </div>
                <div class="project-slide" style="border: 3px solid #008DD2; border-radius: 10px;">
                    <a href="<?php echo site_url("precious-emerald"); ?>">
                    <div class="img-container">
                        <img src="<?php echo site_url("assets/images/projects_01.jpg"); ?>" class="project-image w-100">
                    </div>
                    <div class="meta-container container-fluid">
                        <h3 class="project-title">Precious Emerald</h3>
                        <p class="project-text">Ulwe, Navi Mumbai</p>
                    </div>
                    </a>
                </div>
                <div class="project-slide" style="border: 3px solid #008DD2; border-radius: 10px;">
                    <a href="<?php echo site_url("precious-heritage"); ?>">
                    <div class="img-container">
                        <img src="<?php echo site_url("assets/images/projects_01.jpg"); ?>" class="project-image w-100">
                    </div>
                    <div class="meta-container container-fluid">
                        <h3 class="project-title">Precious Heritage</h3>
                        <p class="project-text">Joveli, Badlapur</p>
                    </div>
                    </a>
                </div>
                <div class="project-slide" style="border: 3px solid #008DD2; border-radius: 10px;">
                    <a href="<?php echo site_url("vishwajeet-pink-city"); ?>">
                    <div class="img-container">
                        <img src="<?php echo site_url("assets/images/projects_01.jpg"); ?>" class="project-image w-100">
                    </div>
                    <div class="meta-container container-fluid">
                        <h3 class="project-title">Vishwajeet PinkCity</h3>
                        <p class="project-text">Pinkcity Ambernath</p>
                    </div>
                    </a>
                </div>
                <div class="project-slide" style="border: 3px solid #008DD2; border-radius: 10px;">
                    <a href="<?php echo site_url("vishwajeet-pink-city"); ?>">
                    <div class="img-container">
                        <img src="<?php echo site_url("assets/images/projects_01.jpg"); ?>" class="project-image w-100">
                    </div>
                    <div class="meta-container container-fluid">
                        <h3 class="project-title">Vishwajeet Precious</h3>
                        <p class="project-text">Pinkcity Ambernath</p>
                    </div>
                    </a>
                </div>
            </div>           
        </div>
        
    </section>
    <section id="emi-calculator" style='padding: 5rem 0;'>
        <div class="container">
            <h1 class="section-title">LOAN CALCULATOR</h1>

            <div class="row">
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12"> 
                    <div id="emi-calculator-box" class="container-fluid card">
                        <div class="row card-body">
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                <ul id="variables-list" style="list-style: none; padding-left: 0;">
                                    <li class="container-fluid variable-list-item">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="variable">AMOUNT</h5>
                                            </div>
                                            <div class="form-group col-6">
                                                <input type="range" class="form-control-range" id="loanAmount">
                                                <p class="variable-value-wrapper">₹ <span class="variable-value-figure">0</span></label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="container-fluid variable-list-item">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="variable">MONTHS</h5>
                                            </div>
                                            <div class="form-group col-6">
                                                <input type="range" class="form-control-range" id="loanMonths">
                                                <p class="variable-value-wrapper"><span class="variable-value-figure">0</span> MONTHS</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="container-fluid variable-list-item" style="margin-bottom: 0 !important;">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="variable">INTEREST RATE</h5>
                                            </div>
                                            <div class="form-group col-6">
                                                <input type="range" class="form-control-range" id="loanROI">
                                                <p class="variable-value-wrapper"><span class="variable-value-figure">0</span> %</label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-12 text-center">
                                <div class="card" id="results-card">
                                    <div class="card-body">
                                        <p class="result-title">LOAN EMI</p>
                                        <p class="calculated-amount-wrapper">₹ <span id="caclulated-amount">1331.21</span></p>
                                        <p class="result-title">TOTAL PAYMENT</p>
                                        <p class="result-title">(PRINCIPLE + INTEREST)</p>
                                        <p class="calculated-amount-wrapper">₹ <span id="caclulated-amount">1331.21</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
            
        </div>
    </section>
</main>
<style>
    /* Page Specific Styles */
    p.calculated-amount-wrapper{
        font-size: 30px;
        color: #393185;
        font-weight: bold;
    }
    p.result-title{
        font-size: 20px;
        color: #008DD2;
        font-weight: bold;
    }
    .meta-container{
        background-color: white;
    }
    div#results-card{
        border-radius: 10px;
        border: 3px solid #393185;
    }
    footer#desktop {
    padding: 5% 0 5% 0;
    width: 100%;
    z-index: -5;
    background-color: #393185;
    }
    .swiper-container {
      width: 100%;
      height: 100%;
    }
    .meta-container{
        padding-top: 15px;
        padding-bottom: 15px;
    }
    .swiper-container{
        margin-top: 3%;
        padding: 3% 0 5% 0;
    }
    h2.project-title{
        font-size: 1.1rem !important;
    }
    .form-group{margin-bottom: 0;}
    .project-title    {
        font-size: 1.3rem;
        font-weight: bold;
        color: #393185;
    }
    img.project-image:hover{
        z-index: -5;
        transform: scale(1.3);
        transition: .3s ease-in-out;
    }
    .img-container{
        overflow: hidden;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script>
    $('#ongoing-projects-carousel').owlCarousel({
        stagePadding: 50,
        loop:true,
        margin:10,
        nav:false,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            780:{
                items:2
            },
            1024:{
                items:3
            }
        }
    });
</script>