@extends('layouts.template')

@section('content')
<div class="container">
    <h1>Edit Buku</h1>

    <form action="{{ route('books.update', $book->isbn) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="isbn">ISBN:</label>
            <input type="text" name="isbn" id="isbn" class="form-control" value="{{ $book->isbn }}" readonly>
        </div>

        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ $book->judul }}">
        </div>

        <div class="form-group">
            <label for="halaman">Halaman:</label>
            <input type="number" name="halaman" id="halaman" class="form-control" value="{{ $book->halaman }}">
        </div>

        <div class="form-group">
            <label for="kategori">Kategori:</label>
            <select name="kategori" id="kategori" class="form-control">
                <option value="uncategorized" @if ($book->kategori === 'uncategorized') selected @endif>Uncategorized</option>
                <option value="sci-fi" @if ($book->kategori === 'sci-fi') selected @endif>Science Fiction</option>
                <option value="novel" @if ($book->kategori === 'novel') selected @endif>Novel</option>
                <option value="history" @if ($book->kategori === 'history') selected @endif>History</option>
                <option value="biography" @if ($book->kategori === 'biography') selected @endif>Biography</option>
                <option value="romance" @if ($book->kategori === 'romance') selected @endif>Romance</option>
                <option value="education" @if ($book->kategori === 'education') selected @endif>Education</option>
                <option value="culinary" @if ($book->kategori === 'culinary') selected @endif>Culinary</option>
                <option value="comic" @if ($book->kategori === 'comic') selected @endif>Comic</option>
            </select>
        </div>


        <div class="form-group">
            <label for="penerbit">Penerbit:</label>
            <input type="text" name="penerbit" id="penerbit" class="form-control" value="{{ $book->penerbit }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection