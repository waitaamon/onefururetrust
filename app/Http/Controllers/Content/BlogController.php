<?php

namespace App\Http\Controllers\Content;

use App\Domain\Content\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		$articles = Blog::where('published', true)->get();

		return view('blog.index', compact('articles'));
    }

	/**
	 * @param $slug
	 * @return \Illuminate\View\View
	 */
	public function show($slug)
	{
		$article = Blog::where('published', true)->where('slug', $slug)->firstOrFail();

		return view('blog.show', compact('article'));
    }
}
