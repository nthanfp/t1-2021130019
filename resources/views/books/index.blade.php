@extends('layouts.template')

@section('content')
    <div class="container">
        <h2>Daftar Buku</h2>
        <table class="table">
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
                        <td>{{ $book->kategori }}</td>
                        <td>{{ $book->penerbit }}</td>
                        <td>
                            <a href="{{ route('books.show', $book->isbn) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('books.edit', $book->isbn) }}" class="btn btn-primary">Edit</a>
                            <!-- Tambahkan tombol hapus jika diperlukan -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
