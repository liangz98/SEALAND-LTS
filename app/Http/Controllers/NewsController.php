<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index(News $news)
	{
		// $news = \DB::table('news')->orderBy('release_date', 'desc')
        
        $news = $news->paginate(20);
		return view('news.index', compact('news'));
	}

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

	public function create(News $news)
	{
		return view('news.create_and_edit', compact('news'));
	}

	public function store(NewsRequest $request)
	{
		$news = News::create($request->all());
		return redirect()->route('news.show', $news->id)->with('message', 'Created successfully.');
	}

	public function edit(News $news)
	{
        $this->authorize('update', $news);
		return view('news.create_and_edit', compact('news'));
	}

	public function update(NewsRequest $request, News $news)
	{
		$this->authorize('update', $news);
		$news->update($request->all());

		return redirect()->route('news.show', $news->id)->with('message', 'Updated successfully.');
	}

	public function destroy(News $news)
	{
		$this->authorize('destroy', $news);
		$news->delete();

		return redirect()->route('news.index')->with('message', 'Deleted successfully.');
	}
}