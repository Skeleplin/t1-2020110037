<!-- resources/views/books/index.blade.php -->

@extends('layouts.template')

@section('content')
<div class="container">
    <h1>
        <i class="fas fa-book"></i> Daftar Buku
    </h1>
</div>

<div class="card">
    <div class="card-header">
        <a href="{{ route('books.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Buku</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th class="text-center">ISBN</th>
                    <th class="text-center">Judul</th>
                    <th class="text-center">Halaman</th>
                    <th class="text-center">Kategori</th>
                    <th class="text-center">Penerbit</th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $index => $book)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        {{ substr($book->isbn, 0, 3) }}-{{ substr($book->isbn, 3, 1) }}-{{ substr($book->isbn, 4, 2) }}-{{ substr($book->isbn, 6, 6) }}-{{ substr($book->isbn, 12, 1) }}
                    </td>
                    <td>{{ $book->judul }}</td>
                    <td class="text-center">{{ $book->halaman }} Hal</td>
                    <td>{{ $book->kategori }}</td>
                    <td>{{ $book->penerbit }}</td>
                    <td>
                        <a href="{{ route('books.edit', $book->isbn) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                        <form action="{{ route('books.destroy', $book->isbn) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"> <i class="fas fa-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection