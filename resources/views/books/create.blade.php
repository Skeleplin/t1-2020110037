<!-- resources/views/books/create.blade.php -->

@extends('layouts.template')

@section('content')
<div class="container">
    <h1>Tambah Buku Baru</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" id="isbn" class="form-control" maxlength="13" required>
        </div>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="halaman">Halaman</label>
            <input type="number" name="halaman" id="halaman" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <select name="kategori" id="kategori" class="form-control">
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
        <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection