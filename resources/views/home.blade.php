@extends('layouts.app')
@section('content')

<!-- Start Slider Area  -->
<div class="rainbow-testimonial-area  slider-style-4  slider-activation slider-dot rainbow-slick-dot rainbow-slick-arrow">
    <div class="single-rainbow-slider slider-bg-image bg-overlay bg_image bg_image--6 height-950 d-flex align-items-center">
        <div class="container">
            <div class="row row--30 align-items-center">
            <div class="inner text-left">
                <h2 class="title theme-gradient display-two">Maat Services Consulting c'est :<br> 
                    <span class="header-caption">
                        <span class="cd-headline clip is-full-width">
                            <span class="cd-words-wrapper">
                                <b class="is-visible theme-gradient display-1 fw-bold">l'expertise dans nos différents services, à savoir : </b>
                                <b class="is-hidden theme-gradient display-1 fw-bold">Software & App Development,</b>
                                <b class="is-hidden theme-gradient display-1 fw-bold">Data enrichment & Management, </b>
                                <b class="is-hidden theme-gradient display-1 fw-bold">Cyber Security, </b>

                                <b class="is-hidden theme-gradient display-1 fw-bold">Ensuite dans nos différents secteurs d'activités,</b>
                                <b class="is-hidden theme-gradient display-1 fw-bold">l'éducation</b>
                                <b class="is-hidden theme-gradient display-1 fw-bold">le BTP </b>
                                <b class="is-hidden theme-gradient display-1 fw-bold">l'immobilier </b>
                                <b class="is-hidden theme-gradient display-1 fw-bold">et le Fintech </b>
                            </span>
                        </span>
                    </span>
                </h2>
                <p class="description">Maat Services Consulting, est une entreprise panafricaine dédiée à dynamiser le climat des affaires en Afrique et à accélérer la digitalisation des entreprises du continent. Notre objectif est de rendre les entreprises africaines plus compétitives sur la scène mondiale.</p>
                <div class="button-group">
                    <a class="btn-default btn-medium round btn-icon" href="{{route('contact')}}">Dévenir actionnaire<i class="icon feather-arrow-right"></i></a>
                    <a class="btn-default btn-medium btn-border round btn-icon" href="{{route('contact')}}">Contactez-nous <i class="icon feather-arrow-right"></i></a>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="single-rainbow-slider height-950 slider-bg-image bg-overlay bg_image bg_image--15 height-950 d-flex align-items-center">
        <div class="container">
            <div class="row row--30 align-items-center">
                <div class="order-2 order-lg-1 col-lg-7">
                    <div class="inner text-left">
                        <h3 class="title theme-gradient ">Participez à notre croissance.</h3>
                        <p class="description">Nous sommes en constante expansion et cherchons à attirer des talents et des investisseurs pour soutenir notre développement.</p>
                        <div class="button-group mt--30"><a class="btn-default" target="_blank" href="#">DEVENIR ACTIONNAIRE</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-rainbow-slider height-950 slider-bg-image bg-overlay bg_image bg_image--4 height-950 d-flex align-items-center">
        <div class="container">
            <div class="row row--30 align-items-center">
                <div class="order-2 order-lg-1 col-lg-7">
                    <div class="inner text-left">
                        <h3 class="title theme-gradient">Nos compétences spécialisées.</h3>
                        <p class="description">Explorez les domaines dans lesquels nous excellons, en offrant des services techniques de pointe qui
                        répondent aux besoins spécifiques de votre entreprise.</p>
                        <div class="button-group mt--30"><a class="btn-default" target="_blank" href="#">EXPLORER D'AVANTAGE </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- End Slider Area  -->
<!-- Start Seperator Area  -->
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div> 
<!-- End Seperator Area  -->


<div class="rainbow-service-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                            <h4 class="subtitle">
                                <span class="theme-gradient">Nos domaines d'intervention.</span>
                            </h4>
                            <h2 class="title w-600 mb--20">Secteurs d’activité</h2>
                            <p class="description b1">Découvrez les secteurs dans lesquels Maat Services Consulting apporte son expertise et ses solutions
                            <br/>innovantes pour transformer les défis en opportunités.</p>
                        </div>
                    </div>
                </div>
                <div class="row row--15">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12 mt--30 sal-animate" data-sal="slide-up" data-sal-duration="700">
                        <div class="rainbow-card box-card-style-default">
                            <div class="inner">
                                <div class="thumbnail"><a class="image" href="{{route('domaine_activite.education')}}"><img style="height:200px;" src="{{asset('assets/images/domaineactivite/education.png')}}" alt="Blog Image"></a></div>
                                <div class="content">
                                    <h4 class="title theme-gradient"><a href="{{route('domaine_activite.education')}}">Education</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-12 mt--30 sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <div class="rainbow-card box-card-style-default">
                            <div class="inner">
                                <div class="thumbnail"><a class="image" href="{{route('domaine_activite.btp')}}"><img style="height:200px;" src="{{asset('assets/images/domaineactivite/btp.jpeg')}}" alt="Blog Image"></a></div>
                                <div class="content">
                                    <h4 class="title theme-gradient"><a href="{{route('domaine_activite.btp')}}">BTP</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-12 mt--30 sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                        <div class="rainbow-card box-card-style-default">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a class="image" href="{{route('domaine_activite.immobilier')}}"><img style="height:200px;" src="{{asset('assets/images/domaineactivite/immobilier.webp')}}" alt="Blog Image"></a>
                                </div>
                                <div class="content"> 
                                    <h4 class="title theme-gradient"><a href="{{route('domaine_activite.immobilier')}}">Immobilier</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-12 mt--30 sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                        <div class="rainbow-card box-card-style-default">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a class="image" href="{{route('domaine_activite.fintech')}}"><img style="height:200px;" src="{{asset('assets/images/domaineactivite/fintech.jpg')}}" alt="Blog Image"></a>
                                </div>
                                <div class="content"> 
                                    <h4 class="title theme-gradient"><a href="{{route('domaine_activite.fintech')}}">Fintech</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
     <!-- Start Time Line Area  -->
    
    <!-- Start Seperator Area  -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- End Seperator Area  -->

    <!-- Srart About Area  -->
    <div class="about-area about-style-4 rainbow-section-gap">
        <div class="container">
            <div class="row row--40 align-items-center">
                <div class="col-lg-6">
                    <div class="video-btn">
                        <div class="video-popup icon-center">
                            <div class="overlay-content">
                                <div class="thumbnail"><img class="radius-small" src="{{asset('assets/images/domaineactivite/about.jpeg')}}" alt="Corporate Image"></div>
                                <div class="video-icon">
                                    <a class="btn-default rounded-player popup-video" href="#">
                                        <span><i class="feather-play"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="video-lightbox-wrapper"></div>
                    </div>
                </div>
                <div class="col-lg-6 mt_md--40 mt_sm--40">
                    <div class="content">
                        <div class="inner">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                                        <h4 class="subtitle "><span class="theme-gradient">Bon à savoir</span></h4>
                                        <h2 class="title w-600 mb--20">Qui sommes nous ?</h2>
                                    </div>
                                </div>
                            </div>
                            <ul class="feature-list">
                                <p class="text">
                                    L’entreprise Maat Services Consulting a été fondée par Monsieur Mohamed Kaba, ingénieur d’affaire
                                    spécialisé en hautes technologie. C’est ce bagage lié au business dans le secteur des technologies de
                                    l’information qui le pousse à fonder en 2024, l’entreprise Maat Services Consulting, composée de 10
                                    collaborateurs aussi dynamiques les uns que les autres.
                                </p>
                                <p class="text">
                                    Chez Maat Services Consulting, nous sommes une entreprise panafricaine dédiée à dynamiser le
                                    climat des affaires en Afrique et à accélérer la digitalisation des entreprises du continent. Notre
                                    objectif est de rendre les entreprises africaines plus compétitives sur la scène mondiale.
                                </p>
                            </ul>
                           <p class="text">
                                Nous sommes guidés par des valeurs fortes : l&#39;unité, inspirée par l&#39;Ubuntu, la Maat, symbole de vérité
                                et de justice, et l&#39;esprit de famille africain. 
                           </p>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <p class="text">
                La rigueur et le travail bien fait sont au cœur de tout ce que
                nous faisons, car nous sommes déterminés à apporter une valeur ajoutée réelle à nos clients et au
                continent africain.
                Ensemble, nous construisons un avenir où les entreprises africaines prospèrent, prêtes à relever les
                défis du monde moderne.
            </p>
        </div>
    </div>
    <!-- End About Area  -->
    <!-- Start Seperator Area  -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- End Seperator Area  -->


    <div class="rainbow-service-area rainbow-section-gap ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <h4 class="subtitle ">
                            <span class="theme-gradient">Expertise</span>
                        </h4>
                        <h2 class="title w-600 mb--20">Nos compétences spécialisées.</h2>
                        <p class="description b1">Explorez les domaines dans lesquels nous excellons, en offrant des services techniques de pointe qui
                            <br/>répondent aux besoins spécifiques de votre entreprise.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row row--15 service-wrapper">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-duration="700">
                    <div class="service service__style--2 text-center">
                        <div class="inner">
                            <div class="image">
                                <img src="{{asset('assets/images/expertise/software.avif')}}" alt="card Images">
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    <a href="#">Software & App development</a>
                                </h4>
                                <p class="description b1 color-gray mb--0">
                                Nous concevons et développons des logiciels sur mesure et des applications mobiles, en
                                mettant l&#39;accent sur la performance, l&#39;ergonomie et la sécurité.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <div class="service service__style--2 text-center">
                        <div class="inner">
                            <div class="image">
                                <img src="{{asset('assets/images/expertise/data-enrichment.webp')}}" alt="card Images">
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    <a href="#">Data enrichment &amp; management</a>
                                </h4>
                                <p class="description b1 color-gray mb--0">
                                    Nos services de gestion et d&#39;enrichissement des données vous aident à transformer vos
                                    données brutes en informations précieuses, optimisant ainsi la prise de décision et la stratégie
                                    d’entreprise.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                    <div class="service service__style--2 text-center">
                        <div class="inner">
                            <div class="image">
                                <img src="{{asset('assets/images/expertise/cyber-security.jpg')}}" alt="card Images">
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    <a href="#">Cyber Security</a>
                                </h4>
                                <p class="description b1 color-gray mb--0">
                                    Protégez votre entreprise contre les menaces numériques grâce à nos solutions avancées de
                                    cybersécurité, incluant des audits, des stratégies de protection et une surveillance continue.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Seperator Area  -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- End Seperator Area  -->
    <div class="blog-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle "><span class="theme-gradient">Actualités</span></h4>
                            <h2 class="title w-600 mb--20">Actualités et mises à jour.</h2>
                            <p class="description b1">Restez informé des dernières nouvelles et des développements concernant Maat Services Consulting,
                                <br/>avec un focus sur les innovations, les événements et les projets récents.</p>
                        </div>
                    </div>
                </div>
                <div class="row row--15">
                    @foreach($posts as $post)
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt--30 sal-animate" data-sal="slide-up" data-sal-duration="700">
                            <div class="rainbow-card box-card-style-default">
                                <div class="inner">
                                    <div class="thumbnail"><a class="image" href="{{route('blog.detail', $post->id)}}"><img src="{{$post->image ? asset($post->image) : '' }}" alt="{{$post->title}}"></a></div>
                                    <div class="content">
                                        <ul class="rainbow-meta-list">
                                            <li><a href="{{route('blog.detail', $post->id)}}">{{ $post->user->name ?? null}}</a></li>
                                            <li class="separator">/</li>
                                            <li>{{ $post->created_at->format('d M Y') }}</li>
                                        </ul>
                                        <h4 class="title"><a href="{{route('blog.detail', $post->id)}}">{{$post->title}} </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                   
                </div>
            </div>
        </div>

    <!-- Start Team-Style-Default Style-Two Area  -->
    <div class="rainbow-team-area rainbow-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <h4 class="subtitle "><span class="theme-gradient">Membres Maat Consulting Africa</span></h4>
                        <h2 class="title w-600 mb--20">Notre équipe</h2>
                    </div>
                </div>
            </div>
            <div class="row row--15">
                <div class="col-lg-4 col-md-6 col-12 mt--10" data-sal="slide-up" data-sal-duration="700">
                    <div class="rainbow-team team-style-default style-two">
                        <div class="inner">
                            <div class="thumbnail"><img src="{{asset('assets/images/team/default.webp')}}" alt="Corporate Template"></div>
                            <div class="content">
                                <h2 class="title">Mohamed KABA</h2>
                                <h6 class="subtitle theme-gradient">PDG MAAT CONSULTING AFRICA</h6>
                                <span class="team-form">
                                    <i class="feather-map-pin"></i>
                                    <span class="location">Lyon, France</span>
                                </span>
                                <ul class="social-icon social-default icon-naked mt--20">
                                    <li><a href="https://www.facebook.com/">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.twitter.com">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.instagram.com/">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mt--10" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <div class="rainbow-team team-style-default style-two">
                        <div class="inner">
                            <div class="thumbnail"><img src="{{asset('assets/images/team/default.webp')}}" alt="Corporate Template"></div>
                            <div class="content">
                                <h2 class="title">Roméo N'GORAN</h2>
                                <h6 class="subtitle theme-gradient">Ingénieur Informatique</h6>
                                <span class="team-form">
                                    <i class="feather-map-pin"></i>
                                    <span class="location">Abidjan, Côte d'ivoire</span>
                                </span>
                                
                                <ul class="social-icon social-default icon-naked mt--20">
                                    <li><a href="https://www.facebook.com/">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.twitter.com">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.instagram.com/">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mt--10" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                    <div class="rainbow-team team-style-default style-two">
                        <div class="inner">
                            <div class="thumbnail"><img src="{{asset('assets/images/team/default.webp')}}" alt="Corporate Template"></div>
                            <div class="content">
                                <h2 class="title">Paul-Axel Yao </h2>
                                <h6 class="subtitle theme-gradient">Analyste Financier </h6>
                                <span class="team-form">
                                    <i class="feather-map-pin"></i>
                                    <span class="location">Lyon, France</span>
                                </span>
                                <ul class="social-icon social-default icon-naked mt--20">
                                    <li><a href="https://www.facebook.com/">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.twitter.com">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.instagram.com/">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team-Style-Default Style-Two Area  -->

    <div class="rainbow-callto-action-area">
        <div class="wrapper">
            
            <div class="rainbow-callto-action clltoaction-style-default style-5">
                <div class="container">
                    <div class="row row--0 align-items-center content-wrapper theme-shape">
                        <div class="col-lg-12">
                            <div class="inner">
                                <div class="content text-center">
                                    <h2 class="title sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="200">L’Enjeux de la digitalisation pour les PME Africaines</h2>
                                    <h6 class="subtitle sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">Les solutions concrètes qui sont mises en place par Maat Services Consulting (MSC) pour les accompagner dans le dépassement de ces défis.</h6>
                                    <div class="call-to-btn sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="350">
                                        <a class="btn-default btn-icon" href="#">Contactez-nous
                                            <i class="feather-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Start Brand Style-2  -->
    <div class="rainbow-brand-area rainbow-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <h4 class="subtitle "><span class="theme-gradient">Nos partenaires</span></h4>
                        <h2 class="title w-600 mb--20"> Les entreprises qui nous font confiance .</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt--10">
                    <ul class="brand-list brand-style-2">
                        <li class="me--3 mr--3"><a href="#"><img src="{{asset('assets/images/partenaire/1.jpeg')}}" alt="Brand Image"></a></li>
                        <li class="me--3 mr--3"><a href="#"><img src="{{asset('assets/images/partenaire/2.jpeg')}}" alt="Brand Image"></a></li>
                        <li class="me--3 mr--3"><a href="#"><img src="{{asset('assets/images/partenaire/3.jpeg')}}" alt="Brand Image"></a></li>
                        <li class="me--3 mr--3"><a href="#"><img src="{{asset('assets/images/partenaire/4.jpeg')}}" alt="Brand Image"></a></li>
                        <li class="me--3 mr--3"><a href="#"><img src="{{asset('assets/images/partenaire/5.jpeg')}}" alt="Brand Image"></a></li>
                        <li class="me--3 mr--3"><a href="#"><img src="{{asset('assets/images/partenaire/6.jpeg')}}" alt="Brand Image"></a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Style-2  -->

    
@endsection