@extends('layouts.template')

@section('title', 'Book List')

@section('content')
    <div class="container">
        <h2>Detail Buku</h2>
        <table class="table">
            <tr>
                <th>ISBN</th>
                <td>{{ $book->isbn }}</td>
            </tr>
            <tr>
                <th>Judul</th>
                <td>{{ $book->judul }}</td>
            </tr>
            <tr>
                <th>Halaman</th>
                <td>{{ $book->halaman }}</td>
            </tr>
            <tr>
                <th>Kategori</th>
                <td>{{ $book->kategori }}</td>
            </tr>
            <tr>
                <th>Penerbit</th>
                <td>{{ $book->penerbit }}</td>
            </tr>
        </table>
        <a href="{{ route('books.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
