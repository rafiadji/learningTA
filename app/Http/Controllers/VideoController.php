<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
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
		$videos = Video::orderBy('id', 'desc')->get();
		return view('admin.video.list', compact('videos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.video.create');
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
		Video::create($request->all());

		return redirect()->route('vid.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Video  $video
	 * @return \Illuminate\Http\Response
	 */
	public function show(Video $video)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Video  $video
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Video $video)
	{
		return view('admin.video.edit', compact('video'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Video  $video
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Video $video)
	{
		$request->merge(['is_aktif' => '1']);
		$video->update($request->all());

		return redirect()->route('vid.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Video  $video
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Video $video)
	{
		$video->delete();
        return redirect()->route('vid.index');
	}
}
