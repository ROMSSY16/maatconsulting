@extends('layouts.app')
@section('content')

@include('partials.pagetitle')

<div class="rainbow-portfolio-details rainbow-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="inner">
                    <div class="details-list">
                        
                        <div class="row mt--40 row--30">
                            <div class="col-lg-6">
                                <div class="content-left">
                                    <h4 class="title">Éducation : Un Partenariat pour l'Avenir</h4>
                                    <div class="thumbnail alignwide">
                                        <img class="radius w-100" src="{{asset('assets/images/domaineactivite/btp.jpeg')}}" alt="Corporate Image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt_md--30 mt_sm--30 m_md--30">
                                <div class="content-right">
                                    <h5 class="subtitle"></h5>
                                    <div class="description">
                                        <p>
                                            Chez Maat Consulting Africa, nous croyons en la puissance de l'éducation pour transformer des vies et bâtir l'avenir. 
                                            C'est pourquoi nous collaborons activement avec des établissements éducatifs pour offrir des solutions numériques 
                                            innovantes et adaptées aux besoins actuels des étudiants, des enseignants et des administrateurs.
                                        </p>
                                    </div>
                                    <ol class="list-style--1">
                                        <li class="text">
                                            Développement de plateformes d'apprentissage interactives : Grâce à des outils numériques performants, nous créons des environnements 
                                            virtuels immersifs qui facilitent l'acquisition des connaissances et l'engagement des étudiants.
                                        </li>
                                        <li class="text">
                                            Amélioration de l'expérience étudiante : Nous travaillons main dans la main avec les institutions 
                                            pour proposer des solutions intuitives et personnalisées qui répondent aux attentes des apprenants d’aujourd’hui.
                                        </li>
                                        <li class="text">
                                            Modernisation des infrastructures numériques : Nous aidons les écoles, collèges et universités à faire le saut vers la transformation 
                                            numérique en mettant à niveau leurs systèmes et en optimisant leur sécurité, leur performance et leur accessibilité.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text">
                        Notre objectif : Créer un écosystème éducatif moderne et dynamique qui prépare les étudiants aux défis de demain, tout en assurant une efficacité accrue pour les établissements.
                    </p>
                    <div class="container">
                        <div class="row mt--40">
                            <div class="col-md-4">
                                <div class="gallery mt--30">
                                    <div class="thumbnail"><img class="radius w-100" src="{{asset('assets/images/domaineactivite/f1.jpeg')}}" alt="Corporate Image"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery mt--30">
                                    <div class="thumbnail"><img class="radius w-100" src="{{asset('assets/images/domaineactivite/f2.jpeg')}}" alt="Corporate Image"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery mt--30">
                                    <div class="thumbnail"><img class="radius w-100" src="{{asset('assets/images/domaineactivite/f3.jpeg')}}" alt="Corporate Image"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection