<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'isbn';
    public $incrementing = false;

    protected $fillable = [
        'isbn',
        'judul',
        'halaman',
        'kategori',
        'penerbit',
    ];

    protected $attributes = [
        'halaman' => 0,
        'kategori' => 'uncategorized',
    ];

    /**
     * Simpan buku baru ke dalam basis data.
     */
    public static function createBook($data)
    {
        return self::create($data);
    }

    /**
     * Update buku dalam basis data.
     */
    public function updateBook($data)
    {
        $this->update($data);
    }

    /**
     * Hapus buku dari basis data.
     */
    public function deleteBook()
    {
        $this->delete();
    }

    /**
     * Ambil semua buku dari basis data.
     */
    public static function getAllBooks()
    {
        return self::all();
    }

    /**
     * Ambil detail buku berdasarkan ISBN.
     */
    public static function getBookByISBN($isbn)
    {
        return self::find($isbn);
    }
}
