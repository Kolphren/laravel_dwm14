@extends('layouts.base')
@section('title', 'MAJ')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/add.css') }}">
@endsection

@section('content')
    <h1 class="title">Modifier le livre</h1>
    <div>
        <form action="/updateBook" method="POST">
            @csrf
            <div class="form-group row">
                <input type="hidden" name="id" value="{{ $book->id }}">
                <label for="title" class="col-sm-2 col-form-label">Titre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" value="{{ $book->title }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="author" class="col-sm-2 col-form-label">Auteur</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="author" value="{{ $book->author }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Résumé</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="description" value="{{ $book->description }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="publication_year" class="col-sm-2 col-form-label">Année de publication</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="publication_year" value="{{ $book->publication_year }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="genre" class="col-sm-2 col-form-label">Genre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="genre" value="{{ $book->genre }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="pages_nb" class="col-sm-2 col-form-label">Nombre de pages</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="pages_nb" value="{{ $book->pages_nb }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour !</button>
        </form>
    </div>
@endsection




