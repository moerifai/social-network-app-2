@extends('layouts.master')

@section('title')
    Contact
@stop

@section('content')
    <div class="intro-hero">
        <div class="container">
        @include('layouts.includes._message-block')
        <!-- Use any element to open/show the overlay navigation menu -->
            <span  onclick="openNav()"><span class="glyphicon glyphicon-menu-hamburger"></span></span>


            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            {!! Form::open(['route'=>'contactus.store']) !!}
            <div class="col-md-6">
                <br>
                <h3 style="font-weight: 900; color: white; text-transform: uppercase;">Écrivez-nous!</h3>
                <br>
                <p class="p-wander">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad autem cupiditate distinctio dolorum, enim facilis harum iusto, magnam optio repellendus reprehenderit rerum totam? Esse ipsam maiores pariatur quis tempora.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad autem cupiditate distinctio dolorum, enim facilis harum iusto, magnam optio repellendus reprehenderit rerum totam? Esse ipsam maiores pariatur quis tempora.</p>

            </div>
            <div class="col-md-6">
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('Votre Nom:','Votre nom', array('class' => 'textbelw')) !!}
                {!! Form::text('name', old('name'), ['class'=>'form-control champ-form', 'placeholder'=>'Votre Nom']) !!}
                <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>

            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Form::label('Email:','Votre email', array('class' => 'textbelw')) !!}
                {!! Form::text('email', old('email'), ['class'=>'form-control champ-form', 'placeholder'=>'Votre Email']) !!}
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>

            <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                {!! Form::label('Message:','Message', array('class' => 'textbelw')) !!}
                {!! Form::textarea('message', old('message'), ['class'=>'form-control champ-form', 'placeholder'=>'Votre message']) !!}
                <span class="text-danger">{{ $errors->first('message') }}</span>
            </div>

            <div class="form-group">
                <button class="btn bouton2">Envoyer!</button>
            </div>
            </div>
            {!! Form::close() !!}

        </div>
        </div>
    </div>
    @include('layouts.includes.footer')
@stop