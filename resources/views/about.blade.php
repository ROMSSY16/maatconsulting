@extends('layouts.app')
@section('content')

<!-- START homemainclassicslider REVOLUTION SLIDER 6.1.0 -->
@include('partials.pagetitle')
<!-- END REVOLUTION SLIDER -->

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
@endsection