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
                                    <h4 class="title">Maat Consulting Africa - Immobilier</h4>
                                    <div class="thumbnail alignwide">
                                        <img class="radius w-100" src="{{asset('assets/images/domaineactivite/immobilier.webp')}}" alt="Corporate Image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt_md--30 mt_sm--30 m_md--30">
                                <div class="content-right">
                                    <h5 class="subtitle"></h5>
                                    <div class="description">
                                        <p>
                                        Chez Maat Consulting Africa, nous proposons des solutions complètes
                                         pour le secteur immobilier, adaptées aux besoins des gestionnaires de biens, promoteurs et agences immobilières. Nos services incluent :
                                        </p>
                                    </div>
                                    <ul class="list-style--1">
                                        <li class="text">
                                            Gestion des biens immobiliers : Grâce à nos outils de gestion performants, vous pouvez suivre l’ensemble de votre portefeuille de 
                                            propriétés en temps réel, gérer les locations, les ventes, ainsi que la maintenance des biens de manière centralisée et efficace.
                                        </li>
                                        <li class="text">
                                            Automatisation des processus administratifs : Simplifiez vos tâches quotidiennes grâce à l’automatisation. Nous vous aidons à numériser et automatiser les démarches administratives comme 
                                            la gestion des contrats, la facturation, les paiements ou encore la gestion des loyers, ce qui vous permet de gagner du temps et de réduire les erreurs.
                                        </li>
                                        <li class="text">
                                            Développement d’applications pour améliorer la relation client : Offrez à vos clients une expérience personnalisée et interactive. Nous développons des applications mobiles et web sur mesure, facilitant les interactions avec vos locataires, acheteurs, et investisseurs. Qu’il 
                                            s’agisse de visites virtuelles, de réservation en ligne ou de suivi des transactions, nos solutions renforcent la relation client et améliorent la satisfaction.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text">
                    Avec notre expertise dans la digitalisation et l’innovation, nous aidons le secteur immobilier à se moderniser et à répondre aux nouvelles exigences du marché.
                    </p>
                    <div class="container">
                        <div class="row mt--40">
                            <div class="col-md-4">
                                <div class="gallery mt--30">
                                    <div class="thumbnail"><img class="radius w-100" src="{{asset('assets/images/domaineactivite/imm1.jpeg')}}" alt="Corporate Image"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery mt--30">
                                    <div class="thumbnail"><img class="radius w-100" src="{{asset('assets/images/domaineactivite/imm2.jpeg')}}" alt="Corporate Image"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery mt--30">
                                    <div class="thumbnail"><img class="radius w-100" src="{{asset('assets/images/domaineactivite/imm3.jpeg')}}" alt="Corporate Image"></div>
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