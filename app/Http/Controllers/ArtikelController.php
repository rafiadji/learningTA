<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ArtikelController extends Controller
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
		$artikels = Artikel::orderBy('id', 'desc')->get();
		return view('admin.artikel.list', compact('artikels'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.artikel.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		if($request->file('file')){
			$file = $request->file('file');
			$namefile = "artikel-".time().".".$file->getClientOriginalExtension();
			$request->merge(["image" => $namefile]);
			$file->move("img", $namefile);
		}
		$request->merge(["author" => Auth::user()['name']]);
		Artikel::create($request->except(['file']));

		return redirect()->route('art.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Artikel  $artikel
	 * @return \Illuminate\Http\Response
	 */
	public function show(Artikel $artikel)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Artikel  $artikel
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Artikel $artikel)
	{
		return view('admin.artikel.edit', compact('artikel'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Artikel  $artikel
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Artikel $artikel)
	{
		if($request->file('file')){
			$file = $request->file('file');
			$namefile = "artikel-".time().".".$file->getClientOriginalExtension();
			$request->merge(["image" => $namefile]);
			$file->move("img", $namefile);
		}
		$request->merge(["author" => Auth::user()['name']]);
		$artikel->update($request->except(['file']));

		return redirect()->route('art.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Artikel  $artikel
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Artikel $artikel)
	{
		if(File::exists(public_path("img/".$artikel->image))){
			File::delete(public_path("img/".$artikel->image));
		}
		$artikel->delete();
		return redirect()->route('art.index');
	}
}
