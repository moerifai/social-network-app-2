@extends('layouts.master') {{-- On extends la vue master ici --}}

@section('title')
    Bienvenue
@stop

@section('content')
    <div class="intro-hero">
    <div class="container">
        @include('layouts.includes._message-block')
        <!-- Use any element to open/show the overlay navigation menu -->
            <span  onclick="openNav()"><span class="glyphicon glyphicon-menu-hamburger"></span></span>
            <div class="logo">
                <img src="{{ URL::asset("img/logo.png") }}" class="img-responsive center-block logo-title">
            </div>
        <header><h1 class="hero-line-hero">Le réseau social du tourisme français</h1></header>
        <br>
    <div class="row">
        {{-- Ici le formulaire d'inscription avec EMAIL NOM et MOT DE PASSE --}}
        <div class="col-md-6">
            <h3 class="form-title">S'inscrire</h3>
            {{-- Ici on precise la route signup pour l'action --}}
            <form action="{{ route('signup') }}" method="post" class="formulaire">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                    <label for="email" class="textbel">Votre Email</label>
                    <input class="form-control champ-form" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
                    <label for="first_name" class="textbel">Votre Nom</label>
                    <input class="form-control champ-form" type="text" name="first_name" id="first_name" value="{{ Request::old('first_name') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                    <label for="password" class="textbel">Votre Mot de passe</label>
                    <input class="form-control champ-form" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                </div>
                <button type="submit" class="btn bouton1">S'inscrire</button>
                {{-- A mettre dans tous les formulaires pour eviter les erreures --}}
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
        {{-- Ici le formulaire de connexion avec EMAIL et MOT DE PASSE --}}
        <div class="col-md-6">
            <h3 class="form-title">Déjà membre ? Connectez-vous</h3>
            <form action="{{ route('signin') }}" method="post" class="formulaire">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                    <label for="email" class="textbel">Votre Email</label>
                    <input class="form-control champ-form" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                    <label for="password" class="textbel">Votre Mot de passe</label>
                    <input class="form-control champ-form" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn bouton2">Connexion</button>
                {{-- A mettre dans tous les formulaires pour eviter les erreures --}}
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
    </div>
        <div class="container">
            <div class="mouse">
                <div class="scroll"></div>
            </div>
        </div>
    </div>
    {{--suite de la page pour faire genre...--}}
    <div class="features">
        <div class="container">
            <header><h1 class="hero-line2">Voyager comme jamais auparavant</h1></header>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ URL::asset("img/map.svg") }}" class="img-responsive center-block logo-features">
                    <p class="p-features">Ne perdez jamais votre temps en suivant un parcours proposé par d'autres internautes vagabonds</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ URL::asset("img/ticket.svg") }}" class="img-responsive center-block logo-features">
                    <p class="p-features">Partagez vos bons plans et autres promotions avec la communauté</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ URL::asset("img/gens.svg") }}" class="img-responsive center-block logo-features">
                    <p class="p-features">Participez à l'agrandissement d'une communauté, et rendez au tourisme français toute sa lumière</p>
                </div>
            </div>
        </div>
    </div>
    <div class="wander">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <h1 class="hero-line">C'est le moment de s'évader</h1>
                    <p class="p-wander">On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.'</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ URL::asset("img/apple-store.png") }}" class="img-responsive center-block app-down">
                </div>
            </div>
        </div>
    </div>
    @include('layouts.includes.footer')
@stop