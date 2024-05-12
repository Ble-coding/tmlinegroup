<!--Start Contact One Section-->
<div id="contact">
    <section class="contact-one-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="contact-one-image">
                          <picture>
                            <!-- Source WebP -->
                            <source srcset="{{ asset('images/resource/contact-one-img-1.webp') }}" type="image/webp">
                            <!-- Source JPEG (alternative) -->
                            <img src="{{ asset('images/resource/contact-one-img-1.png') }}" alt="">
                        </picture>
                    </div>
                </div>
                <div class="col-xl-6">
                    @include('include.formContact')
                </div>
            </div>
        </div>
    </section>
    <!--End Contact One Section-->
    
    <section class="google_map">
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="google-map__contact" allowfullscreen=""></iframe> --}}
            <iframe class="google-map__contact"  src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3932.663854705207!2d-13.476197524972678!3d9.70970339038134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s5th%20Avenue%20Quartier%20Almamya%20BP%204464%20Conakry%2C%20Guin%C3%A9e!5e0!3m2!1sfr!2sci!4v1712188194674!5m2!1sfr!2sci"allowfullscreen="" ></iframe>
    </section>
    
    <!--Start ContactinfoSection -->   
    <section class="contactinfo">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <!--Contactinfo Single-->
                    <div class="contactinfo-single">
                        <div class="contactinfo-icon">
                            <span class="far fa-envelope-open"></span>
                        </div>
                        <div class="contactinfo-content">
                            <h4>Adresse E-mail</h4>
                            <a href="mailto:contact@tmlinegroupe.com ">contact@tmlinegroupe.com </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Contactinfo Single-->
                    <div class="contactinfo-single">
                        <div class="contactinfo-icon">
                            <span class="far fa-phone"></span>
                        </div>
                        <div class="contactinfo-content">
                            <h4>Contactez-nous</h4>
                            <a href="tel:+224625207077">+224.625.20.7077</a><br>
                            <a href="https://wa.me/2250102443942">+225.01.02.44.39.42</a><br>
                            <a href="https://wa.me/15149681370">+1-514.968.1370 </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Contactinfo Single-->
                    <div class="contactinfo-single">
                        <div class="contactinfo-icon">
                            <span class="far fa-map-pin"></span>
                        </div>
                        <div class="contactinfo-content">
                            <h4>Siège Social</h4>
                            <p> Conakry BLVD de la République Almamya,<br>Kaloum, Guinée.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End ContactinfoSection -->
</div> 