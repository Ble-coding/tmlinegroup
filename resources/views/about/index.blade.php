<!-- Start About Two Section --> 
<section id="about" class="about-tow-section about-page">
    <div class="container">
      <div class="row">
        <div class="col-xl-6">
            <div class="about-two-left-content wow slideInLeft" data-wow-delay="100ms">
                <div class="about-two-sec-image">
                       <div class="about-two-sec-image-bg-1" style="background-image: url('{{ asset('images/about/about-2--pattern-1.webp') }}')"></div>
                       <div class="about-two-sec-image-bg-2" style="background-image: url('{{ asset('images/about/about-2--pattern-2.webp') }}')"></div>
                    <picture>
                        <!-- Source WebP -->
                        <source srcset="{{ asset('images/about/about-1-img-1.webp') }}" type="image/webp">
                        <!-- Source JPEG -->
                        <source srcset="{{ asset('images/about/about-1-img-1.jpg') }}" type="image/jpeg">
                        <!-- Source PNG (en option) -->
                        <source srcset="{{ asset('images/about/about-1-img-1.png') }}" type="image/png">
                
                        <!-- Image par défaut -->
                        <img src="{{ asset('images/about/about-1-img-1.jpg') }}" alt="">
                    </picture>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="about-two-right-content">
                <div class="about-two-title">
                    <h4 class="sub-title-shape-left section_title-subheading">QUI SOMMES-NOUS ? </h4>
                    <h2 class="upper">TM Line Groupe est une entreprise de droit guinéen</h2>
                    <p class="about-two-title-text"> Nous évoluons dans les domaines comme <strong>la pêche, la location et vente d'engin lourds et Le transport dans le domaine minier</strong>.</p>
                    <p class="about-two-title-text">Avec plus de 5 ans d'expérience dans l'industrie des mines et du transport, nos services de
                        logistique en Guinée offrent le professionnaliste et la flexibilité dans nos procédures avec les
                        partenaires.</p>
                    <p class="about-two-title-text"> Nos produits et services sont utilisés par des entreprises de différentes tailles à travers le monde.
                    Par ailleurs, notre développement interne nous a permis de proposer des opportunités qui
                    rejoint les besoins de nos partenaires.</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-tow-experience-years">
                            <div class="about-tow-experience-years-icon">
                                <span class="flaticon-check"></span>
                            </div>
                            <div class="about-tow-experience-years-text">
                                <h2>5 ans  <br> Expérience </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-tow-experience-years">
                            <div class="about-tow-experience-years-icon">
                                <span class="flaticon-check"></span>
                            </div>
                            <div class="about-tow-experience-years-text">
                                <h2>Professionnalisme <br> Flexibilité</h2>
                            </div>
                        </div>
                    </div>
                    <div class="about-two-bottom-content">
                        <h3>SAHNO Foumgbè- <span class="upper">Administrateur général</span></h3>
                        <div class="signature">
                            <picture>
                                <!-- Source WebP -->
                                <source srcset="{{ asset('images/about/signature-1.webp') }}" type="image/webp">
                                <!-- Source JPEG -->
                                <source srcset="{{ asset('images/about/signature-1.jpg') }}" type="image/jpeg">
                                <!-- Source PNG (en option) -->
                                <source srcset="{{ asset('images/about/signature-1.png') }}" type="image/png">
                            
                                <!-- Image par défaut -->
                                <img src="{{ asset('images/about/signature-1.jpg') }}" alt="">
                            </picture>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>    
<!-- End About Two Section --> 