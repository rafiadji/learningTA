<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Video;
use App\Models\Book;

class WelcomeController extends Controller
{
	public function __construct()
	{

	}

	public function index()
	{
        $artikels = Artikel::orderBy('id', 'desc')->get();
		return view('welcome', ['artikels' => $artikels]);
	}

    public function video()
    {
        $videos = Video::orderBy('id', 'desc')->get();
        $artikels = Artikel::orderBy('id', 'desc')->get();
		return view('video', ['videos' => $videos, 'artikels' => $artikels]);
    }

    public function book()
    {
        $books = Book::orderBy('id', 'desc')->get();
        $artikels = Artikel::orderBy('id', 'desc')->get();
		return view('book', ['books' => $books, 'artikels' => $artikels]);
    }

    public function dartikel(Artikel $artikel)
	{
        $artikels = Artikel::orderBy('id', 'desc')->get();
		return view('dartikel', ['artikels' => $artikels, 'artikel' => $artikel]);
	}
}
