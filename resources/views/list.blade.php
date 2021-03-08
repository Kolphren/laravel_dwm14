@extends('layouts.base')
@section('title', 'Livres')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/list.css') }}">
@endsection

@section('content')
    <h1 class="title">Liste des livres</h1>
    <div class="list">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Genre</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($books as $book)
                <tr>
                    <th scope="row">{{ $book->id }}</th>
                    <td><a href="/book/{{ $book->id }}">{{ $book->title }}</a></td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->genre }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
