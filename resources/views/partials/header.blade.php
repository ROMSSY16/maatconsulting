<!-- Start Header Top Area  -->
{{-- <div class="header-top-news bg-image1">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner">
                        <div class="content">
                            <span class="rainbow-badge">Limited Time Offer</span>
                            <span class="news-text">Intro price. Get Doob for Big Sale -95% off.</span>
                        </div>
                        <div class="right-button">
                            <a class="btn-read-more" href="https://themeforest.net/checkout/from_item/34133466?license=regular">
                                <span>Purchase Now <i class="feather-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="icon-close">
        <button class="close-button bgsection-activation">
            <i class="feather-x"></i>
        </button>
    </div>
</div> --}}
<!-- End Header Top Area  -->
<!-- Start Header Area  -->
<header class="rainbow-header header-default header-not-transparent header-sticky">
    <div class="container position-relative">
        <div class="row align-items-center row--0">
            <div class="col-lg-2 col-md-5 col-3">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img class="logo-light" src="{{asset('assets/images/logo/logo.png')}}" alt="Corporate Logo">
                        <img class="logo-dark" src="{{asset('assets/images/logo/logo.png')}}" alt="Corporate Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-10 col-md-7 col-9 position-static">
                <div class="header-right">

                    <nav class="mainmenu-nav d-none d-lg-block">
                        <ul class="mainmenu">
                            <li><a href="{{route('home')}}">Accueil</a></li>
                            <li class="has-droupdown has-menu-child-item"><a href="#">Nos domaines d'interventions</a>
                                <ul class="submenu">
                                    <li><a href="{{route('domaine_activite.education')}}">Education</a></li>
                                    <li><a href="{{route('domaine_activite.btp')}}">BTP</a></li>
                                    <li><a href="{{route('domaine_activite.immobilier')}}">Immobilier</a></li>
                                    <li><a href="{{route('domaine_activite.fintech')}}">Fintech</a></li>
                                </ul>
                            </li>
                            <li class="has-droupdown has-menu-child-item"><a href="#">Nos expertises</a>
                                <ul class="submenu">
                                    <li><a href="{{route('expertise.software_app_development')}}">Software & App development</a></li>
                                    <li><a href="{{route('expertise.data_enrichment_management')}}">Data enrichment & Management</a></li>
                                    <li><a href="{{route('expertise.cyber_security')}}">Cyber Security</a></li>
                                   
                                </ul>
                            </li>
                            <li><a href="{{route('blog')}}">News</a> </li>
                            <li class="has-droupdown has-menu-child-item"><a href="#">Rejoingnez-nous</a>
                                <ul class="submenu">
                                    <li><a href="{{route('nos_offres_emplois')}}">Nos offres d'emplois</a></li>
                                    <li><a href="{{route('devenir_actionnaire')}}">Dévenir actionnaire</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('about')}}">A propos</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- Start Mobile-Menu-Bar -->
                    <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                        <div class="hamberger">
                            <button class="hamberger-button">
                                <i class="feather-menu"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Start Mobile-Menu-Bar -->

                    <div id="my_switcher" class="my_switcher">
                        <ul>
                            <li>
                                <a href="javascript: void(0);" data-theme="light" class="setColor light">
                                    <img class="sun-image" src="{{asset('assets/images/icons/sun-01.svg')}}" alt="Sun images">
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                    <img class="Victor Image" src="{{asset('assets/images/icons/vector.svg')}}" alt="Vector Images">
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Area  -->
<div class="popup-mobile-menu">
    <div class="inner">
        <div class="header-top">
            <div class="logo">
                <a href="{{url('/')}}">
                    <img class="logo-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="Corporate Logo">
                    <img class="logo-dark" src="{{ asset('assets/images/logo/logo.png') }}" alt="Corporate Logo">
                </a>
            </div>
            <div class="close-menu">
                <button class="close-button">
                    <i class="feather-x"></i>
                </button>
            </div>
        </div>
   
        <ul class="mainmenu">
            <li><a href="{{route('home')}}">Accueil</a></li>
            <li class="has-droupdown has-menu-child-item"><a href="#">Nos domaines d'interventions</a>
                <ul class="submenu">
                    <li><a href="{{route('domaine_activite.education')}}">Education</a></li>
                    <li><a href="{{route('domaine_activite.btp')}}">BTP</a></li>
                    <li><a href="{{route('domaine_activite.immobilier')}}">Immobilier</a></li>
                    <li><a href="{{route('domaine_activite.fintech')}}">Fintech</a></li>
                </ul>
            </li>
            <li class="has-droupdown has-menu-child-item"><a href="#">Nos expertises</a>
                <ul class="submenu">
                    <li><a href="{{route('expertise.software_app_development')}}">Software & App development</a></li>
                    <li><a href="{{route('expertise.data_enrichment_management')}}">Data enrichment & Management</a></li>
                    <li><a href="{{route('expertise.cyber_security')}}">Cyber Security</a></li>
                    
                </ul>
            </li>
            <li><a href="{{route('blog')}}">News</a> </li>
            <li class="has-droupdown has-menu-child-item"><a href="#">Rejoingnez-nous</a>
                <ul class="submenu">
                    <li><a href="{{route('nos_offres_emplois')}}">Nos offres d'emplois</a></li>
                    <li><a href="{{route('devenir_actionnaire')}}">Dévenir actionnaire</a></li>
                </ul>
            </li>
            <li><a href="{{route('about')}}">A propos</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
       
    </div>
</div>

<!-- Start Theme Style  -->
<div>
    <div class="rainbow-gradient-circle"></div>
    <div class="rainbow-gradient-circle theme-pink"></div>
</div>
<!-- End Theme Style  -->


<div class="popup-mobile-menu">
    <div class="inner">
        <div class="header-top">
            <div class="logo">
                <a href="{{url('/')}}">
                    <img class="logo-light" src="{{asset('assets/images/logo/logo.png')}}" alt="Corporate Logo">
                    <img class="logo-dark" src="{{asset('assets/images/logo/logo.png')}}" alt="Corporate Logo">
                </a>
            </div>
            <div class="close-menu">
                <button class="close-button">
                    <i class="feather-x"></i>
                </button>
            </div>
        </div>
        <ul class="mainmenu">
            <li><a href="{{route('home')}}">Accueil</a></li>
            <li class="has-droupdown has-menu-child-item"><a href="#">Nos domaines d'interventions</a>
                <ul class="submenu">
                    <li><a href="{{route('domaine_activite.education')}}">Education</a></li>
                    <li><a href="{{route('domaine_activite.btp')}}">BTP</a></li>
                    <li><a href="{{route('domaine_activite.immobilier')}}">Immobilier</a></li>
                    <li><a href="{{route('domaine_activite.fintech')}}">Fintech</a></li>
                </ul>
            </li>
            <li class="has-droupdown has-menu-child-item"><a href="#">Nos expertises</a>
                <ul class="submenu">
                    <li><a href="{{route('expertise.software_app_development')}}">Software & App development</a></li>
                    <li><a href="{{route('expertise.data_enrichment_management')}}">Data enrichment & Management</a></li>
                    <li><a href="{{route('expertise.cyber_security')}}">Cyber Security</a></li>
                    
                </ul>
            </li>
            <li><a href="{{route('blog')}}">News</a> </li>
            <li class="has-droupdown has-menu-child-item"><a href="#">Rejoingnez-nous</a>
                <ul class="submenu">
                    <li><a href="{{route('nos_offres_emplois')}}">Nos offres d'emplois</a></li>
                    <li><a href="{{route('devenir_actionnaire')}}">Dévenir actionnaire</a></li>
                </ul>
            </li>
            <li><a href="{{route('about')}}">A propos</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
    </div>
</div>