@include('travelproject.layout.header')
<section class="hero1  about">
    <div class="hero1-up">
        <div class="container hero1-text-box">
            <div class="col-lg-5">
                <h1>Trips List</h1>
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
                            <iframe width="853" height="480" src="https://www.youtube.com/embed/t_aiGGrIzWI" title="Sri Lanka Tour Packages - Thrillophilia" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
            <div class="col-md-6 traveler">
                <img src="images/traveler.jpg" alt="traveler" class="img-fluid">
            </div>
        </div>
    </div>
</section>
@include('travelproject.layout.footer')
<!------------------our story section start------------------------->
