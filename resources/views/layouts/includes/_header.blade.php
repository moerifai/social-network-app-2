{{--<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header manav">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('dashboard') }}"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('account') }}">Mon Profil</a></li>
                    <li><a href="{{ route('logout') }}">Se deconnecter</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header> --}}
<!-- The overlay-->
<div id="myNav" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content">
        <div class="container">
        <a href="{{ route('dashboard') }}">Accueil</a>
        <a href="{{ route('account') }}">Mon Profil</a>
        <a href="{{ route('contactus.store') }}">Nous Contacter</a>
        <a href="{{ route('logout') }}">Se déconnecter</a>
        <hr>
        <a href="{{ route('imageupload') }}" style="font-style: italic; font-weight: 100;">Ajout d'image (Beta)</a>
    </div>
    </div>

</div>


