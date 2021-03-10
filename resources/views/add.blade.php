@extends('layouts.base')
@section('title', 'Livres')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/add.css') }}">
@endsection

@section('content')
    <h1 class="title">Ajouter un livre</h1>
    <div>
        <form action="/addBook" method="POST">
            @csrf
            <div class="form-group row">
                <label for="title" class="col-sm-4 col-form-label">Titre</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="title" placeholder="Titre" value="Narnia">
                </div>
            </div>
            <div class="form-group row">
                <label for="author" class="col-sm-4 col-form-label">Auteur</label>
                <div class="col-sm-8">
                    <select class="form-control form-control-lg" name="author_id" id="">
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-4 col-form-label">Résumé</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="description" placeholder="Résumé" value="Une drôle d'histoire">
                </div>
            </div>
            <div class="form-group row">
                <label for="publication_year" class="col-sm-4 col-form-label">Année de publication</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="publication_year" placeholder="Année de publication" value="2015">
                </div>
            </div>
            <div class="form-group row">
                <label for="genre" class="col-sm-4 col-form-label">Genre</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="genre" placeholder="Genre" value="Fantastique">
                </div>
            </div>
            <div class="form-group row">
                <label for="pages_nb" class="col-sm-4 col-form-label">Nombre de pages</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="pages_nb" placeholder="Nombre de pages" value="5">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Ajouter !</button>
            </div>
        </form>
    </div>
@endsection




