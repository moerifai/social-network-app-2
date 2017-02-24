@extends('layouts.master')

@section('title')
    Dashboard
@stop

@section('content')
    @include('layouts.includes._message-block')
    {{-- Écrire un nouveau post --}}
    <div class="intro-hero">
    <div class="container">
        <!-- Use any element to open/show the overlay navigation menu -->
        <span  onclick="openNav()"><span class="glyphicon glyphicon-menu-hamburger"></span></span>
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header class="form-title"><h3>Partagez votre voyage</h3></header>
            <form action="{{ route('post.create') }}" method="post">
                <div class="form-group thomas">
                    <textarea class="form-control champ-form" name="body" id="new-post" rows="5" placeholder="Votre poste..."></textarea>
                </div>
                <button type="submit" class="btn bouton2">Publier</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
        </div>
    </section>
    </div>
    </div>
    {{-- Modifier un post, like, dislike, supprimer un post --}}
    <div class="container">
    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3 class="liner">Les autres voyages...</h3></header>
            @foreach($posts as $post)
                <article class="post well" data-postid="{{ $post->id }}">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        <img src="/images/{{ Session::get('path') }} " class="img-responsive center-block">
                    @endif
                    <p>{{ $post->body }}</p>
                    <div class="info">
                        Publié par {{ $post->user->first_name }} le {{ $post->created_at }}
                    </div>
                    <br>
                    <div class="interaction">
                        <a href="#" class="like">{{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 1 ? 'You like this post' : 'Like' : 'Like'  }}</a> |
                        <a href="#" class="like">{{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 0 ? 'You don\'t like this post' : 'Dislike' : 'Dislike'  }}</a>
                        @if(Auth::user() == $post->user)
                            |
                            <a href="#" class="edit"><i class="fa fa-pencil-square" aria-hidden="true"></i> Modifier</a> |
                            <a href="{{ route('post.delete', ['post_id' => $post->id]) }}" class="delete"><i class="fa fa-trash" aria-hidden="true"></i> Supprimer</a>
                        @endif

                        {{-- ici commence le formulaire de commentaire + le bouton collapse pour les afficher--}}

                        <button class="btn btn-xs btn-info" type="button" data-toggle="collapse" data-target="#view-comments-{{$post->id}}" aria-expanded="false" aria-controls="view-comments-{{$post->id}}">
                            <i class="fa fa-comments-o"></i> Voir les commentaires
                        </button>
                        <hr>
                        {!! Form::open() !!}
                        {!! Form::hidden('post_comment', $post->id) !!}
                        <div class="form-group">
                           <div class="row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="comment-text" id="comment-text" placeholder="Votre commentaire...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">Envoyer</button>
                                    </span>
                                </div>
                            </div>
                            </div>
                        </div>
                        {!! Form::close() !!}

                        <div class="collapse" id="view-comments-{{$post->id}}">
                            bonjour je suis un commentaire
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

    </section>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Post</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="post-body">Edit the Post</label>
                            <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn bouton3" id="modal-save">Sauvegarder</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script>
        var token = '{{ Session::token() }}';
        var urlEdit = '{{ route('edit') }}';
        var urlLike = '{{ route('like') }}';
    </script>
    @include('layouts.includes.footer')
@stop
