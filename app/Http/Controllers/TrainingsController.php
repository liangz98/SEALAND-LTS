<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Models\TrainingCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TrainingRequest;

class TrainingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    
    public function index() {
        $trainingCategories = TrainingCategory::where([
                    ['status', '01'],
                ])->orderBy('order')
                  ->get();
        
        
        if (count($trainingCategories)) {
            $trainings = Training::where([
                ['status', '01'],
                ['category_id', $trainingCategories->first()->id],
                ['start_date', '>', Carbon::now()],
            ])
                                 ->orderBy('start_date')
                // ->get();
                                 ->paginate(10);
        }
        
        // $trainings = Training::paginate();
        return view('trainings.index', compact('trainings', 'trainingCategories'));
    }

    public function show(Training $training)
    {
        return view('trainings.show', compact('training'));
    }

	public function create(Training $training)
	{
		return view('trainings.create_and_edit', compact('training'));
	}

	public function store(TrainingRequest $request)
	{
		$training = Training::create($request->all());
		return redirect()->route('trainings.show', $training->id)->with('message', 'Created successfully.');
	}

	public function edit(Training $training)
	{
        $this->authorize('update', $training);
		return view('trainings.create_and_edit', compact('training'));
	}

	public function update(TrainingRequest $request, Training $training)
	{
		$this->authorize('update', $training);
		$training->update($request->all());

		return redirect()->route('trainings.show', $training->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Training $training)
	{
		$this->authorize('destroy', $training);
		$training->delete();

		return redirect()->route('trainings.index')->with('message', 'Deleted successfully.');
	}
}