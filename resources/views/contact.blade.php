@extends('layouts.app')
@section('content')

@include('partials.pagetitle')

<div class="rainbow-contact-area rainbow-section-gap">
    <div class="container">
       
        <div class="row row--15">
            <div class="col-lg-12">
                <div class="rainbow-contact-address mt_dec--30">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="rainbow-address">
                                <div class="icon">
                                    <i class="feather-headphones"></i>
                                </div>
                                <div class="inner">
                                    <h4 class="title">Contact téléphonique</h4>
                                    <p><a href="#">+225 01 01 04 61 26</a></p>
                                    <p><a href="#">+33 7 55 50 36 35</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="rainbow-address">
                                <div class="icon">
                                    <i class="feather-mail"></i>
                                </div>
                                <div class="inner">
                                    <h4 class="title">Adresse E-mail</h4>
                                    <p><a href="mailto:maatconsulting@gmail.com">maatconsulting@gmail.com</a></p>
                                    <p><a href="mailto:contact@maatconsulting.africa">contact@maatconsulting.africa</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="rainbow-address">
                                <div class="icon">
                                    <i class="feather-map-pin"></i>
                                </div>
                                <div class="inner">
                                    <h4 class="title">Localisation</h4>
                                    <p>XL Building, 6th & 7th flour, Abidjan Plateau</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt--40 row--15">
            <div class="col-lg-7">
                <form class="contact-form-1 rainbow-dynamic-form" id="contact-form" method="POST" action="mail.php">
                    <div class="form-group">
                        <input type="text" name="contact-name" id="contact-name" placeholder="Votre Nom et prenoms">
                    </div>
                    <div class="form-group">
                        <input type="text" name="contact-phone" id="contact-phone" placeholder="Numero telephone">
                    </div>
                    <div class="form-group">
                        <input type="email" id="contact-email" name="contact-email" placeholder="Adresse Email">
                    </div>

                    <div class="form-group">
                        <input type="text" id="subject" name="subject" placeholder="Objet">
                    </div>

                    <div class="form-group">
                        <textarea name="contact-message" id="contact-message" placeholder="Votre Message"></textarea>
                    </div>

                    <div class="form-group">
                        <button name="submit" type="submit" id="submit" class="btn-default btn-large rainbow-btn">
                            <span>Soumettre</span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-5 mt_md--30 mt_sm--30">
                <div class="google-map-style-1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d780.1474945887724!2d-4.020451546658594!3d5.327379727393191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ebb03fcd5caf%3A0x6d8a488efdd343f7!2sImmeuble%20XL!5e0!3m2!1sfr!2sci!4v1725584446825!5m2!1sfr!2sci" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection