@extends('layouts.master')

@section('title')
    Account
@stop

@section('content')
    <div class="intro-hero">
        <div class="container">
            <!-- Use any element to open/show the overlay navigation menu -->
            <span  onclick="openNav()"><span class="glyphicon glyphicon-menu-hamburger"></span></span>
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <h3 class="form-title">Mon compte</h3>
            <form action="{{ route('account.save') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="first_name" class="textbelw">First Name</label>
                    <input type="text" name="first_name" class="form-control champ-form" value="{{ $user->first_name }}" id="first_name">
                </div>
                <div class="form-group">
                    <label for="image" class="textbelw">Image (.jpg seulement)</label>
                    <input type="file" name="image" class="form-control champ-form" id="image">
                </div>
                <button type="submit" class="btn bouton2">Sauvegarder</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
        </div>
    </section>
        </div>
    </div>
    @if (Storage::disk('local')->has($user->first_name . '-' . $user->id . '.jpg'))
        <section class="row new-post">
            <div class="col-md-6 col-md-offset-3">
                <h3>Votre photo de profil</h3>
                <img src="{{ route('account.image', ['filename' => $user->first_name . '-' . $user->id . '.jpg']) }}" alt="" class="img-responsive">
            </div>
        </section>
    @endif
    @include('layouts.includes.footer')
@stop