@include('travelproject.layout.header')
<!--------------- index-first-section start ------------------------->
<section class="hero1">
    <div class="hero1-up">
        <div class="container hero1-text-box">
            <div class="col-lg-5">
                <h1>Gallary</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque,
                    maiores doloribus officia iste. Dolores.</p>
                <!-- Button trigger modal -->
                <div class="d-flex align-items-center justify-content-between w-50 ">
                    <p>Watch more videos &rarr;</p>
                    <button type="button" class="btn btn-primary py-2 px-3 ms-3" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa-solid fa-play"></i>
                    </button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe src="https://www.youtube.com/embed/_KCzjzyrbyQ"
                                    title="Tourism in India | India in 1 Minutes | Beauty of India | Travel to India | Travel Viness | 2020"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------- index-first-section end ------------------------->
<section id="gallery">
    <div class="container">
        <div id="image-gallery">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                        <a href="images/i3.jpg"><img src="images/i3.jpg" class="img-responsive" height="300px"
                                width="300px"></a>
                        <div class="img-overlay">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                        <a href="images/p2.jpg"><img src="images/p2.jpg" class="img-responsive" height="300px"
                                width="300px"></a>
                        <div class="img-overlay">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                        <a href="images/p3.jpg"><img src="images/p3.jpg" class="img-responsive" height="300px"
                                width="300px"></a>
                        <div class="img-overlay">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                        <a href="images/p4.jpg"><img src="images/p4.jpg" class="img-responsive" height="300px"
                                width="300px"></a>
                        <div class="img-overlay">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                        <a href="images/p5.jpg"><img src="images/p6.jpg" class="img-responsive" height="300px"
                                width="300px"></a>
                        <div class="img-overlay">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                        <a href="images/i1.avif"><img src="images/i1.avif" class="img-responsive" height="300px"
                                width="300px"></a>
                        <div class="img-overlay">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                        <a href="images/i2.jpg"><img src="images/i2.jpg" class="img-responsive" height="300px"
                                width="300px"></a>
                        <div class="img-overlay">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                        <a href="images/i3.jpg"><img src="images/i3.jpg" class="img-responsive" height="300px"
                                width="300px"></a>
                        <div class="img-overlay">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('travelproject.layout.footer')