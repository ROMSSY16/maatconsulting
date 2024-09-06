@extends('layouts.app')
@section('content')

<!-- START homemainclassicslider REVOLUTION SLIDER 6.1.0 -->
@include('partials.pagetitle')
<!-- END REVOLUTION SLIDER -->


<div class="rainbow-contact-form-area rainbow-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-2 text-start sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                    <h3 class="title w-600 mb--20">
                        Découvrez comment vous pouvez investir dans notre entreprise, participer à nos succès et
                        bénéficier de la croissance de Maat Services Consulting.
                    </h3>
                </div>
            </div>
        </div>
        <div class="row row--30 mt--40">
            <div class="col-lg-6 order-2 oder-lg-1 mt_md--30 mt_sm--30">
                <form class="contact-form-1">
                    <div class="form-group"><input type="text" name="fullname" placeholder="Nom & prénoms"></div>
                    <div class="form-group"><input type="text" name="phone" placeholder="Téléphone"></div>
                    <div class="form-group"><input type="email" name="email" placeholder="E-mail"></div>
                    <div class="form-group"><input type="text" name="montant" placeholder="Montant d'investissement"></div>
                    <div class="form-group"><textarea name="message" placeholder="Commentaire"></textarea>
                    </div>
                    <div class="form-group"><button class="btn-default btn-large">ENVOYER</button></div>
                </form>
            </div>
            <div class="col-lg-6 order-1 oder-lg-2">
                <div class="thumbnail"><img class="radius w-100" src="{{asset('assets/images/about/actionnaire.jpeg')}}" alt="Corporate"></div>
            </div>
        </div>
    </div>
</div>


@endsection