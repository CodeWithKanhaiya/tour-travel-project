@include('travelproject.layout.header')
<!--------------- index-first-section start ------------------------->
<section class="hero1">
    <div class="hero1-up">
        <div class="container hero1-text-box">
            <div class="col-lg-5">
                <h1>Let's Enjoy The Wonders of Nature</h1>
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
<!------------------our story section start------------------------->
<section class="hero2">
    <div class="container outer-story-box">
        <div class="row d-flex">
            <div class="col-md-6 bacdrop-heading">
                <div class="heading-story pb-5">
                    <span class="backdrop">STORY</span>
                    <h3>DISCOVER STORY</h3>
                    <p>Our Story</p>
                </div>
                <p class="story-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quae expedita
                    fugiat quo incidunt, possimus temporibus aperiam eum, quaerat sapiente.</p>
                <p class="story-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis enim
                    a pariatur molestiae.</p>
            </div>
            <div class="col-md-6 traveler" >
                <img src="images/traveler.jpg" alt="traveler" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!------------------our story section start------------------------->
<!--------------------Our journey section start---------------------->
<section class="journey">
    <div class="container journey-cont">
        <div class="row">
            <div class="journey-heading">
                <span>journey</span>
                <h3>JOURNEY</h3>
                <p>Your Journey Starts Here</p>
            </div>
            <div class="row mt-5 journey-figure">
                <div class="col-lg-4 col-md-6 col-sm-12 journey-img my-2">
                    <figure class="snip1206">
                        <img src="images/p6.jpg" alt="1" />
                        <figcaption>
                            <h2 class="">Tour & Travel</h2>
                            <p class=""> Just makes people try to do everything at once.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 journey-img my-2">
                    <figure class="snip1206">
                        <img src="images/p5.jpg" alt="1" />
                        <figcaption>
                            <h2 class="">Tour & Travel</h2>
                            <p class="">Just makes people try to do everything at once.</p>
                        </figcaption>

                    </figure>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 journey-img my-2">
                    <figure class="snip1206">
                        <img src="images/p4.jpg" alt="1" />
                        <figcaption>
                            <h2 class="">Tour & Travel</h2>
                            <p class="">Just makes people try to do everything at once.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 journey-img my-2">
                    <figure class="snip1206">
                        <img src="images/p3.jpg" alt="1" />
                        <figcaption>
                            <h2 class="">Tour & Travel</h2>
                            <p class="">Just makes people try to do everything at once.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 journey-img my-2">
                    <figure class="snip1206">
                        <img src="images/p2.jpg" alt="1" />
                        <figcaption>
                            <h2 class="">Tour & Travel</h2>
                            <p class="">Just makes people try to do everything at once.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 journey-img my-2">
                    <figure class="snip1206">
                        <img src="images/p1.jpg" alt="1" />
                        <figcaption>
                            <h2 class="">Tour & Travel</h2>
                            <p class="">Just makes people try to do everything at once.</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------Our journey section end---------------------->
<!-------------------Our team section start----------------------->
<section class="team">
    <div class="container team-heading">
        <div class="row">
            <div class="journey-heading">
                <span>Our team</span>
                <h3>AMAZING STAFF</h3>
                <p class="meet-text">Meet Our Team</p>
            </div>
            <div class="row d-flex justify-content-around flex-wrap">
                <div class="col-lg-4 col-md-4 col-sm-6 mt-5">
                    <div class="card border border-0">
                        <div class="meet-img py-3 px-5">
                            <img src="images/person_1.jpg" class="card-img-top img-fluid" alt="...">
                        </div>
                        <div class="card-body py-3 px-5">
                            <h5 class="card-title text-center mt-2 cart-title-name ">Jhon Due</h5>
                            <span class="d-block text-center mb-3  staff">STAFF</span>
                            <p class="card-text text-center lh-lg text-body-tertiary">Lorem ipsum dolor sit amet, elit.
                                Molestiae, maiores? Eos alias fugit eius,
                                repudiandae molestias error</p>
                            <ul class=" social-icon-meet mt-4">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mt-5">
                    <div class="card border border-0">
                        <div class="meet-img py-3 px-5">
                            <img src="images/person_2.jpg" class="card-img-top img-fluid" alt="...">
                        </div>
                        <div class="card-body py-3 px-5">
                            <h5 class="card-title text-center mt-2 cart-title-name">Jean Doe</h5>
                            <span class="d-block text-center mb-3 staff">STAFF</span>
                            <p class="card-text text-center lh-lg text-body-tertiary">Lorem ipsum dolor sit amet, elit.
                                Molestiae, maiores? Eos alias fugit eius,
                                repudiandae molestias error</p>
                            <ul class="d-flex social-icon-meet mt-4">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-6 mt-5">
                    <div class="card border border-0">
                        <div class="meet-img py-3 px-5">
                            <img src="images/person_3.jpg" class="card-img-top img-fluid" alt="...">
                        </div>
                        <div class="card-body py-3 px-5">
                            <h5 class="card-title text-center mt-2 cart-title-name">Claire Dormey</h5>
                            <span class="d-block text-center mb-3 staff">STAFF</span>
                            <p class="card-text text-center lh-lg text-body-tertiary">Lorem ipsum dolor sit amet, elit.
                                Molestiae, maiores? Eos alias fugit eius,
                                repudiandae molestias error</p>
                            <ul class="d-flex social-icon-meet mt-4">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-------------------Our team section end----------------------->
<!-------------------testimonial section start------------------->
<section class="testimonial">
    <div class="container testimonial-start">
        <div class="row">
            <div class="journey-heading">
                <span>TESTIMONIALS</span>
                <h3>TESTIMONY</h3>
                <p class="meet-text">Happy Customers</p>
            </div>
            <div class="row mt-5">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial-slide d-flex p-5">
                            <div>
                                <p class="text-start lh-lg fs-5 ">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit.
                                    Inventore, tempora exercitationem perspiciatis ab rem quo alias adipisci aliquam,
                                    libero doloribus </p>
                            </div>
                            <div class="testmoinial-image me-3">
                                <img src="images/person_1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-slide d-flex p-5">
                            <div>
                                <p class="text-start lh-lg fs-5 ">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit.
                                    Inventore, tempora exercitationem perspiciatis ab rem quo alias adipisci aliquam,
                                    libero doloribus </p>
                            </div>
                            <div class="testmoinial-image me-3">
                                <img src="images/person_2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-slide d-flex p-5">
                            <div>
                                <p class="text-start lh-lg fs-5 ">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit.
                                    Inventore, tempora exercitationem perspiciatis ab rem quo alias adipisci aliquam,
                                    libero doloribus </p>
                            </div>
                            <div class="testmoinial-image me-3">
                                <img src="images/person_1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-slide d-flex p-5">
                            <div>
                                <p class="text-start lh-lg fs-5 ">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit.
                                    Inventore, tempora exercitationem perspiciatis ab rem quo alias adipisci aliquam,
                                    libero doloribus </p>
                            </div>
                            <div class="testmoinial-image me-3">
                                <img src="images/person_2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-------------------testimonial section end------------------->
<!--------------blog section start-------------------------->
<section class="blog-section">
    <div class="container blog-cont">
        <div class="row">
            <div class="blog">
                <span>BLOG</span>
                <h3>update</h3>
                <p class="blog-text">Our Blog</p>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-4 col-md-6 col-sm-6 blog-box">
                <img src="images/p1.jpg" alt="" class="img-fluid">
                <h6 class=" fs-5 cart-title-name mt-3 mx-3">Lorem ipsum dolor sit amet</h6>
                <span class="d-block staff mt-3 mx-2">July 17, 2019 by Admin</span>
                <p class="text-secondary mt-3 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores
                    eos soluta, dolore harum molestias consectetur.</p>
                <a href="blog.php" class="btn btn-pill btn-primary mx-3 mt-2">Know more</a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 blog-box">
                <img src="images/p2.jpg" alt="" class="img-fluid">
                <h6 class=" fs-5 cart-title-name mt-3 mx-3">Lorem ipsum dolor sit amet</h6>
                <span class="d-block staff mt-3 mx-2">July 17, 2019 by Admin</span>
                <p class="text-secondary mt-3 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores
                    eos soluta, dolore harum molestias consectetur.</p>
                <a href="blog.php" class="btn btn-pill btn-primary mx-3 mt-2">Know more</a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 blog-box">
                <img src="images/p3.jpg" alt="" class="img-fluid per-3">
                <h6 class=" fs-5 cart-title-name mt-3 mx-3">Lorem ipsum dolor sit amet</h6>
                <span class="d-block staff mt-3 mx-2">July 17, 2019 by Admin</span>
                <p class="text-secondary mt-3 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores
                    eos soluta, dolore harum molestias consectetur.</p>
                <a href="blog.php" class="btn btn-pill btn-primary mx-3 mt-2">Know more</a>
            </div>
        </div>
    </div>
</section>
<!--------------blog section end-------------------------->
<!---------------trip section start--------------------------->
<section class="trip">
    <div class="trip-out">
        <div class="container trip-cont">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column">
                <h2 class="text-white text-center">Join and Trip With Us</h2>
                <p class="text-white text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ut, doloremque
                     quo molestiae nesciunt officiis veniam, beatae dignissimos!</p>
                     <button class="btn btn-primary ">GET IN TOUCH</button>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
</section>
<!----------------trip section end ----------------------------->
@include('travelproject.layout.footer')