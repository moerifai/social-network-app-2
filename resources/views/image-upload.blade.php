@extends('layouts.master')

@section('title')
    Dashboard
@stop

@section('content')
    @include('layouts.includes._message-block')

    <div class="intro-hero">
    <div class="container">
        <!-- Use any element to open/show the overlay navigation menu -->
        <span  onclick="openNav()"><span class="glyphicon glyphicon-menu-hamburger"></span></span>
        <h1 class="hero-line">Ajout d'image (Beta)</h1>
        <div class="panel">

            <div class="panel-body">

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    <img src="/images/{{ Session::get('path') }}">
                @endif

                <form action="{{ url('image-upload') }}" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <input type="file" name="image" />
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
    </div>
    @include('layouts.includes.footer')
@stop
