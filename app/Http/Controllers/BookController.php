<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$books = Book::orderBy('id', 'desc')->get();
		return view('admin.book.list', compact('books'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.book.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$request->merge(['is_aktif' => '1']);
		Book::create($request->all());

		return redirect()->route('bk.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Book  $book
	 * @return \Illuminate\Http\Response
	 */
	public function show(Book $book)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Book  $book
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Book $book)
	{
		return view('admin.book.edit', compact('book'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Book  $book
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Book $book)
	{
		$request->merge(['is_aktif' => '1']);
		$book->update($request->all());

		return redirect()->route('bk.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Book  $book
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Book $book)
	{
		$book->delete();
        return redirect()->route('bk.index');
	}
}
