@extends('layouts.template')

@section('title', 'Add Book')

@section('content')
    <div class="container">
        <h2>Buat Buku Baru</h2>
        <form method="POST" action="{{ route('books.store') }}">
            @csrf
            <div class="form-group mb-3">
                <label for="isbn">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" required>
            </div>
            <div class="form-group mb-3">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="form-group mb-3">
                <label for="halaman">Halaman</label>
                <input type="number" class="form-control" id="halaman" name="halaman" required>
            </div>
            <div class="form-group mb-3">
                <label for="kategori">Kategori</label>
                <select class="form-control" id="kategori" name="kategori">
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
                <input type="text" class="form-control" id="penerbit" name="penerbit" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
