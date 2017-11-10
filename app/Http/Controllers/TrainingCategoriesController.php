<?php

namespace App\Http\Controllers;

use App\Models\TrainingCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TrainingCategoryRequest;

class TrainingCategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$training_categories = TrainingCategory::paginate();
		return view('training_categories.index', compact('training_categories'));
	}

    public function show(TrainingCategory $training_category)
    {
        return view('training_categories.show', compact('training_category'));
    }

	public function create(TrainingCategory $training_category)
	{
		return view('training_categories.create_and_edit', compact('training_category'));
	}

	public function store(TrainingCategoryRequest $request)
	{
		$training_category = TrainingCategory::create($request->all());
		return redirect()->route('training_categories.show', $training_category->id)->with('message', 'Created successfully.');
	}

	public function edit(TrainingCategory $training_category)
	{
        $this->authorize('update', $training_category);
		return view('training_categories.create_and_edit', compact('training_category'));
	}

	public function update(TrainingCategoryRequest $request, TrainingCategory $training_category)
	{
		$this->authorize('update', $training_category);
		$training_category->update($request->all());

		return redirect()->route('training_categories.show', $training_category->id)->with('message', 'Updated successfully.');
	}

	public function destroy(TrainingCategory $training_category)
	{
		$this->authorize('destroy', $training_category);
		$training_category->delete();

		return redirect()->route('training_categories.index')->with('message', 'Deleted successfully.');
	}
}