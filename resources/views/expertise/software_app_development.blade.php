@extends('layouts.app')
@section('content')

@include('partials.pagetitle')

<div class="rainbow-portfolio-details rainbow-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="inner">
                    <div class="details-list">
                        <div class="thumbnail alignwide">
                            <img class="radius w-100" src="{{asset('assets/images/expertise/software.avif')}}" alt="Corporate Image">
                        </div>
                        <div class="row mt--40 row--30">
                            <div class="col-lg-12 mt_md--30 mt_sm--30 m_md--30">
                                <div class="content-right">
                                    <h5 class="subtitle"></h5>
                                    <div class="description">
                                        <p>
                                        Le développement de logiciels et d'applications est un domaine clé dans la transformation numérique des entreprises. Il englobe la conception, 
                                        la création, le déploiement et la maintenance de programmes informatiques et d'applications mobiles ou web pour répondre à des besoins spécifiques.
                                        </p>
                                    </div>
                                    <ol class="list-style--1">
                                        <li class="text">
                                            Types de développement
                                        </li>
                                        <ul>
                                            <li>Développement de logiciels : Cela inclut la création de programmes qui permettent aux entreprises de gérer 
                                                leurs activités internes (ERP, CRM, gestion de stock, facturation, etc.) ou des logiciels spécialisés selon leur domaine (immobilier, santé, éducation, etc.).</li>
                                            <li>
                                                Développement d’applications mobiles : Il s'agit de créer des applications pour smartphones et tablettes (iOS, Android). Ces applications peuvent être destinées 
                                                aux clients (comme des apps de gestion d'immobilier, de réservation) ou aux employés (gestion des opérations sur le terrain).
                                            </li>
                                            <li>
                                                Développement d’applications web : Ce sont des applications accessibles via des navigateurs web. 
                                                Elles sont largement utilisées pour les plateformes collaboratives, les services SaaS (Software as a Service), et les systèmes de gestion centralisée.
                                            </li>
                                        </ul>
                                        

                                        <li class="text">
                                            Étapes du développement de logiciels et d’applications
                                        </li>
                                        <ul>
                                            <li>Analyse des besoins : Comprendre les besoins de l'entreprise, de ses clients, et des utilisateurs finaux. 
                                                Cette étape implique souvent des ateliers de travail avec les parties prenantes pour définir les objectifs du projet.
                                            </li>
                                            <li>
                                                Conception : Après l'analyse, l'architecture du logiciel ou de l'application est définie. 
                                                Cette étape inclut la création de maquettes, de wireframes et parfois d'un prototype interactif.
                                            </li>
                                            <li>
                                                Développement : C’est la phase où les développeurs écrivent le code source pour créer l'application ou le logiciel. 
                                                Ils utilisent des langages de programmation comme JavaScript, PHP, Python, Swift, ou Java, selon le type d'application (mobile, web, ou desktop).
                                            </li>
                                            <li>
                                                Tests et validation : Avant la mise en production, le produit est testé pour 
                                                vérifier qu'il fonctionne correctement et qu'il répond aux spécifications. Cela inclut des tests de performance, de sécurité, et des tests utilisateurs.
                                            </li>
                                            <li>
                                                Déploiement et maintenance : Une fois le produit testé et validé, il est déployé et mis à disposition des utilisateurs. 
                                                La maintenance continue est nécessaire pour corriger les bugs, mettre à jour les fonctionnalités et améliorer l’expérience utilisateur.
                                            </li>
                                        </ul>

                                        <li class="text">
                                            Technologies courantes utilisées
                                        </li>
                                        <ul>
                                            <li>Front-end : HTML, CSS, JavaScript (React, Vue.js, Angular) pour l’interface utilisateur.
                                            </li>
                                            <li>
                                                Back-end : PHP (Laravel), Python (Django, Flask), Node.js, Ruby on Rails pour le traitement des données côté serveur.
                                            </li>
                                            <li>
                                                Bases de données : MySQL, PostgreSQL, MongoDB pour la gestion des données.
                                            </li>
                                            <li>
                                                Frameworks mobiles : Swift (iOS), Kotlin (Android), React Native, Flutter pour le développement d’applications mobiles natives ou hybrides.
                                            </li>
                                            
                                        </ul>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text">
                        Nous concevons et développons des logiciels sur mesure et des applications mobiles, en
                        mettant l&#39;accent sur la performance, l&#39;ergonomie et la sécurité.
                    </p>
                    <div class="container">
                        <div class="row mt--40">
                            <div class="col-md-4">
                                <div class="gallery mt--30">
                                    <div class="thumbnail"><img class="radius w-100" src="{{asset('assets/images/domaineactivite/edu1.jpeg')}}" alt="Corporate Image"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery mt--30">
                                    <div class="thumbnail"><img class="radius w-100" src="{{asset('assets/images/domaineactivite/edu2.jpg')}}" alt="Corporate Image"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery mt--30">
                                    <div class="thumbnail"><img class="radius w-100" src="{{asset('assets/images/domaineactivite/edu3.jpeg')}}" alt="Corporate Image"></div>
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