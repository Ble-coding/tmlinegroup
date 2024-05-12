   <!-- Main Header-->
   <header class="main-header">
        
    @include('layouts.header_top')
        <!-- Header Upper -->
        <div class="header_upper">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_upper_inner clearfix">
                            <div class="header_upper_one_box pull-left">
                                <div class="logo">
                                    <a href="{{ route('home.index') }}"><img src="images/logo.png" alt="" title=""></a>
                                </div>
                            </div>
                            <div class="header_upper_two_box one pull-right">
                                <div class="nav-outer">
                                    <!--Mobile Navigation Toggler-->
                                    <div class="mobile-nav-toggler">
                                        <span class="icon flaticon-menu"></span>
                                    </div>
                                    <div class="nav-inner">
                                        <!-- Main Menu -->
                                        <nav class="main-menu navbar-expand-xl navbar-dark">

                                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                <ul class="navigation">
                                                    <li><a href="#accueil">ACCUEIL</a></li>
                                                    <li><a href="#about">À PROPOS</a></li>
                                                    <li><a href="#services">SERVICES</a></li>
                                                    <li><a href="#contact">CONTACT</a></li>
                                                </ul>
                                            </div>
                                        </nav><!-- Main Menu End-->
                                    </div>
                                </div>
                             
                            </div>
                        
                        </div>
                    </div>
                </div>               
                    
            </div>
        </div>
        <!--End Header Upper-->

        <!--End Header Upper-->
        <div class="sticky-header"> 
            <div class="auto-container">
                <div class="outer-container">
                    <div class="header-column">
                        <div class="logo-box">
                            <div class="logo"><a href="{{ route('home.index') }}"><img src="images/logo.png" alt="" title=""></a></div>
                        </div>
                    </div>
                    <div class="header-column">
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                            
                            <div class="nav-inner">
                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-xl navbar-dark">
                                    <div class="collapse navbar-collapse">
                                        <ul class="navigation">
                                        </ul>
                                    </div>
                                </nav><!-- Main Menu End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
        <!-- Mobile Menu  -->
        <div class="mobile-menu close-menu">        
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">            
                <ul class="navigation"></ul>
            </nav>
        </div><!-- End Mobile Menu -->

        <div class="nav-overlay">
        </div>
    </header>
    <!-- End Main Header -->

   // cni + lettre de motivation + CV