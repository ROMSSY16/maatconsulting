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
                            <img class="radius w-100" src="{{asset('assets/images/expertise/cyber-security.jpg')}}" alt="Corporate Image">
                        </div>
                        <div class="row mt--40 row--30">
                            <div class="col-lg-12 mt_md--30 mt_sm--30 m_md--30">
                                <div class="content-right">
                                    <h5 class="subtitle"></h5>
                                    <div class="description">
                                        <p>
                                        La cybersécurité (Cyber Security) est un domaine crucial qui vise à protéger les systèmes informatiques, les réseaux, les données et les utilisateurs contre les cyberattaques, les intrusions, 
                                        le vol de données, et les autres menaces numériques. À mesure que les entreprises et les individus se connectent davantage à Internet, la cybersécurité est devenue une priorité pour protéger les actifs numériques et les informations sensibles contre une gamme de menaces de plus en plus sophistiquées.
                                        </p>
                                    </div>
                                    <ol class="list-style--1">
                                        <li class="text">
                                            Principaux domaines de la cybersécurité
                                        </li>
                                        <p class="text">
                                        La cybersécurité englobe plusieurs aspects, chacun ciblant une couche ou un aspect spécifique de la sécurité des systèmes informatiques.
                                        </p>
                                        <ul>
                                            <li>
                                            Sécurité des réseaux : Vise à protéger les réseaux informatiques internes contre les intrusions non autorisées. Cela inclut l’utilisation de pare-feu, de systèmes de détection et de prévention d'intrusion (IDS/IPS), et de solutions de surveillance en temps réel pour identifier et bloquer les accès malveillants.
                                            </li>
                                            <li>
                                                Sécurité des applications :
                                                Concerne la sécurisation des applications web et mobiles contre les vulnérabilités qui pourraient être exploitées par des hackers, comme les failles dans le code source (injection SQL, cross-site scripting). Les tests de sécurité des applications (AST) et les correctifs de sécurité réguliers font partie des meilleures pratiques.
                                            </li>
                                            <li>
                                                Sécurité des données :
                                                La protection des données sensibles (informations personnelles, données financières) contre les accès non autorisés, les fuites ou les attaques comme les ransomwares. Les mesures de sécurité incluent le chiffrement des données, l’anonymisation, et les solutions de gestion des droits d'accès.
                                            </li>
                                            <li>
                                                Sécurité des terminaux (Endpoint Security) :
                                                Porte sur la protection des appareils connectés, comme les ordinateurs, les smartphones, et les serveurs, contre les menaces. Des solutions telles que les antivirus, les logiciels anti-malware, et les systèmes de détection d'anomalies aident à défendre les terminaux contre les attaques.
                                            </li>
                                            <li>
                                                Sécurité du cloud :
                                                Avec la montée en puissance du cloud computing, la protection des données et des applications hébergées sur des plateformes cloud (AWS, Azure, Google Cloud) est cruciale. Cela inclut la gestion des accès, la protection des API, et le chiffrement des données à la fois en transit et au repos.
                                            </li>
                                        </ul>
                                        <li class="text">
                                        Types de menaces en cybersécurité
                                        </li>
                                        <li class="text">
                                        Meilleures pratiques en cybersécurité
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text">
                    La cybersécurité est une nécessité absolue à l'ère numérique. Protéger les systèmes, les données et les utilisateurs contre les menaces évolutives nécessite une approche proactive, des outils sophistiqués, et une sensibilisation continue. Les entreprises doivent investir dans la cybersécurité pour protéger non seulement leurs actifs numériques, mais aussi leur réputation et leur relation avec leurs clients
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