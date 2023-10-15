@extends('layouts.template')

@section('title', 'Book List')

@section('content')
    <div class="container">
        <h2>Daftar Buku</h2>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="my-2">
            <a href="{{ route('books.create') }}"><button class="btn btn-primary">Tambah Buku</button></a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered text-nowrap">
                <thead>
                    <tr>
                        <th>ISBN</th>
                        <th>Judul</th>
                        <th>Halaman</th>
                        <th>Kategori</th>
                        <th>Penerbit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->isbn }}</td>
                            <td>{{ $book->judul }}</td>
                            <td>{{ $book->halaman }}</td>
                            <td>{{ ucwords($book->kategori) }}</td>
                            <td>{{ $book->penerbit }}</td>
                            <td>
                                <a href="{{ route('books.show', $book) }}" class="btn btn-info">Lihat</a>
                                <a href="{{ route('books.edit', $book->isbn) }}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $books->links() !!}
            </div>
        </div>
    </div>
@endsection
