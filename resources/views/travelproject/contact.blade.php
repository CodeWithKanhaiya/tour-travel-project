@include('travelproject.layout.header')
<section class="container1">
    <div class="contact-slide">
    <img src="images/contact.png" alt="contact" class="img-fluid ">
    </div>
</section>
<section class="container2">
<div class="container">
    <div class="row">
    <div class="hero">
    <div class="hero-detail-box">
    <div class="journey-heading pb-5">
            <span>CONTACT US</span>
            <h3>CONTACT</h3>
            <p class="meet-text">JOIN US</p>
        </div>
        <div class="contact-detail-box">
            <p class="detail-para">Proin ac lobortis arcu, a vestibulum augue. Vivamus ipsum, facilisis vel
                mollis vitae, mollis nec ante. Quisque aliquam dictumfacilisis vel mollis vitae. Lorem ipsum
                dolor sit amet, ubique admodum euripidis has no, in luptatum nominati.</p>
        </div>
        <div class="contact-detail-box">
            <h3>New York Office</h3>
        </div>
        <div class="contact-detail-box">
            <span class="contact-detail-icon"><i class="fa-solid fa-phone"></i><span
                    class="contact-detail">1-677-124-44227</span></span><br>
            <span class="contact-detail-icon"><i class="fa-regular fa-comment"></i><span
                    class="contact-detail">esmarts@qodeinteractive.com</span></span><br>
            <span class="contact-detail-icon"><i class="fa-regular fa-id-badge"></i><span class="contact-detail">184
                    Main Collins Street, West Victoria</span></span>
        </div>
        <div class="contact-detail-box" style="margin-top: 20px;">
            <h3>Hamburg Office</h3>
        </div>
        <div class="contact-detail-box">
            <span class="contact-detail-icon"><i class="fa-solid fa-phone"></i><span
                    class="contact-detail">1-677-124-44227</span></span><br>
            <span class="contact-detail-icon"><i class="fa-regular fa-comment"></i><span
                    class="contact-detail">esmarts@qodeinteractive.com</span></span><br>
            <span class="contact-detail-icon"><i class="fa-regular fa-id-badge"></i><span class="contact-detail">184
                    Main Collins Street, West Victoria</span></span>
        </div>
    </div>
    <div class="hero-detail-box hero-detaiol-box2">
        <div class="form-hero-box">
            <div class="form-top-box">
                <h3>Get in Touch</h3>
            </div>
            <div class="form-bottom-box">
                <div class="wrapper">
                    <form action="{{route('insertData')}}" method="post">
                        @csrf
                        <div class="dbl-field">
                            <div class="field">
                                <input type="text" name="name" placeholder="Enter your name">
                                
                            </div>
                            <div class="field">
                                <input type="text" name="email" placeholder="Enter your email">
                                
                            </div>
                        </div>
                        <div class="dbl-field">
                            <div class="field">
                                <input type="text" name="phone" placeholder="Enter your phone">
                                
                            </div>
                            
                        </div>
                        <div class="message">
                            <textarea placeholder="Write your message" name="message"></textarea>
                        </div>
                        <div class="button-area">
                            <input type="submit" value="Send Message" class="btn btn-primary" name="submit">
                            <span></span>
                        </div>
                    </form>
                </div>
                <script src="script.js"></script>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
</section>
<!---------------------------------------------------------------->
<!-------------------------------------------------------------->
<section class="container3">
<div class="location">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114018.32789158184!2d82.22822755!3d26.74205455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3990a79183318f3f%3A0xe61f3152d202d5ee!2z4KS44KSo4KWH4KSk4KWN4KS54KWCLCDgpIngpKTgpY3gpKTgpLAg4KSq4KWN4KSw4KSm4KWH4KS2IDIyNDEzNQ!5e0!3m2!1shi!2sin!4v1705499511536!5m2!1shi!2sin"
        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</section>
<!-------------------------------------------------------------->
@include('travelproject.layout.footer')