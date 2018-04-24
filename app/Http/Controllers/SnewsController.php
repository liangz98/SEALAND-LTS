<?php

namespace App\Http\Controllers;

use App\Models\Snew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SnewRequest;

class SnewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index(Snew $snew)
	{
		$snews = $snew->orderBy('created_at', 'desc')->paginate(15);
		return view('snews.index', compact('snews'));
	}

    public function show(Snew $snew)
    {
        return view('snews.show', compact('snew'));
    }

	public function create(Snew $snew)
	{
		return view('snews.create_and_edit', compact('snew'));
	}

	public function store(SnewRequest $request)
	{
		$snew = Snew::create($request->all());
		return redirect()->route('snews.show', $snew->id)->with('message', 'Created successfully.');
	}

	public function edit(Snew $snew)
	{
        $this->authorize('update', $snew);
		return view('snews.create_and_edit', compact('snew'));
	}

	public function update(SnewRequest $request, Snew $snew)
	{
		$this->authorize('update', $snew);
		$snew->update($request->all());

		return redirect()->route('snews.show', $snew->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Snew $snew)
	{
		$this->authorize('destroy', $snew);
		$snew->delete();

		return redirect()->route('snews.index')->with('message', 'Deleted successfully.');
	}
}