@extends('layouts.template')

@section('title', 'Edit Book')

@section('content')
    <div class="container">
        <h2>Edit Buku</h2>
        <form method="POST" action="{{ route('books.update', $book) }}">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $book->judul }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="halaman">Halaman</label>
                <input type="number" class="form-control" id="halaman" name="halaman" value="{{ $book->halaman }}"
                    required>
            </div>
            <div class="form-group mb-3">
                <label for="kategori">Kategori</label>
                <select class="form-control" id="kategori" name="kategori">
                    <option value="uncategorized" {{ $book->kategori == 'uncategorized' ? 'selected' : '' }}>Uncategorized
                    </option>
                    <option value="sci-fi" {{ $book->kategori == 'sci-fi' ? 'selected' : '' }}>Science Fiction</option>
                    <option value="uncategorized">Uncategorized</option>
                    <option value="sci-fi">Science Fiction</option>
                    <option value="novel">Novel</option>
                    <option value="history">History</option>
                    <option value="biography">Biography</option>
                    <option value="romance">Romance</option>
                    <option value="education">Education</option>
                    <option value="culinary">Culinary</option>
                    <option value="comic">Comic</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="penerbit">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $book->penerbit }}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
