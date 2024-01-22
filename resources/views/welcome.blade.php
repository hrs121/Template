@extends('master')

@section('content')
    <!-- Page Header -->
    <header class="header" id="home">
        <div class="container">
            <div class="infos">
                <h6 class="subtitle">hello,I'm</h6>
                <h6 class="title">James Smith</h6>
                <p>UI/UX Designer</p>

                <div class="buttons pt-3">
                    <button class="btn btn-primary rounded">HIRE ME</button>
                    <button class="btn btn-dark rounded">DOWNLOAD CV</button>
                </div>      
            </div>              
            <div class="img-holder">
                <img src="assets/imgs/man.svg" alt="">
            </div>      
        </div>  

        <!-- Header-widget -->
        <div class="widget">
            <div class="widget-item">
                <h2>124</h2>
                <p>Happy Clients</p>
            </div>
            <div class="widget-item">
                <h2>456</h2>
                <p>Project Completed</p>
            </div>
            <div class="widget-item">
                <h2>789</h2>
                <p>Awards Won</p>
            </div>
        </div>
    </header>
    <!-- End of Page Header -->
    
    <!-- About section -->
    <section id="about" class="section mt-3">
        <div class="container mt-5">
            <div class="row text-center text-md-left">
                <div class="col-md-3">
                    <img src="assets/imgs/avatar.jpg" alt="" class="img-thumbnail mb-4">
                </div>
                <div class="pl-md-4 col-md-9">
                    <h6 class="title">James Smith</h6>
                    <p class="subtitle">UI/UX Designer</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, pariatur, aperiam aut autem voluptas odit. Odio ducimus delectus totam sed aliquam sequi praesentium mollitia, illum repudiandae quidem quod, magni magnam.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, eius, nam. Quo praesentium qui temporibus voluptatum, facilis aliquid eligendi fugiat beatae neque inventore non. Laborum repellendus consequatur ullam voluptatum asperiores.</p>
                    <button class="btn btn-primary rounded mt-3">DOWNLOAD CV</button>                   
                </div>
            </div>
        </div>
    </section>

    <!-- Service section -->
    <section id="service" class="section">
        <div class="container text-center">
            <h6 class="subtitle">Service</h6>
            <h6 class="section-title mb-4">What I Do</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>

            <div class="row">
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-crown"></i>
                            <h5>UI/UX Design</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-desktop"></i>
                            <h5>Web Design</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-mobile"></i>
                            <h5>App Design</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-bar-chart"></i>
                            <h5>SEO</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Sectoin -->

    

    <!-- Portfolio section -->
    <section id="portfolio" class="section">
        <div class="container text-center">
            <h6 class="subtitle">Portfolio</h6>
            <h6 class="section-title mb-4">Check My Wonderful Works</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>

            <div class="row">
                <div class="col-sm-4">
                    <div class="img-wrapper">
                        <img src="assets/imgs/folio-1.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>  
                        </div>
                    </div>
                    <div class="img-wrapper">
                        <img src="assets/imgs/folio-2.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>                              
                        </div>
                    </div>                  
                </div>
                <div class="col-sm-4">
                    <div class="img-wrapper">
                        <img src="assets/imgs/folio-3.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>  
                        </div>
                    </div>
                    <div class="img-wrapper">
                        <img src="assets/imgs/folio-4.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>                              
                        </div>
                    </div>                  
                </div>
                <div class="col-sm-4">
                    <div class="img-wrapper">
                        <img src="assets/imgs/folio-5.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>  
                        </div>
                    </div>
                    <div class="img-wrapper">
                        <img src="assets/imgs/folio-6.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Project Title</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>                              
                        </div>
                    </div>                  
                </div>
            </div>

        </div>
    </section>
    <!-- End of portfolio section -->

    <!-- Testmonial Section -->
    <section id="testmonial" class="section">
        <div class="container text-center">
            <h6 class="subtitle">Testmonial</h6>
            <h6 class="section-title mb-4">What People Say About Me</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>


            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/imgs/avatar-1.jpg" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates in enim vel amet?</p>
                                <h1 class="title">Emma Re</h1>
                                <h1 class="subtitle">Graphic Designer</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/imgs/avatar-2.jpg" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates in enim vel amet?</p>
                                <h1 class="title">James Bert</h1>
                                <h1 class="subtitle">Web Designer</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/imgs/avatar-3.jpg" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates in enim vel amet?</p>
                                <h1 class="title">Michael Abra</h1>
                                <h1 class="subtitle">Web Developer</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of testmonial section -->


    <!-- Hire me section -->
    <section class="bg-gray p-0 section">
        <div class="container">
            <div class="card bg-primary">
                <div class="card-body text-light">
                    <div class="row align-items-center">
                        <div class="col-sm-9 text-center text-sm-left">
                            <h5 class="mt-3">Hire Me For Your Project</h5>
                            <p class="mb-3">Accusantium labore nostrum similique quisquam.</p>
                        </div>
                        <div class="col-sm-3 text-center text-sm-right">
                            <button class="btn btn-light rounded">Hire Me!</button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>      
    <!-- End od Hire me section. -->

   
    <!-- End of Contact Section -->

@endsection