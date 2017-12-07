<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Models\TrainingCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TrainingCategoryRequest;
use Illuminate\Support\Carbon;

class TrainingCategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function show(TrainingCategory $training_category) {
    
        $trainings = Training::where([
                    ['status', '01'],
                    ['category_id', $training_category->id],
                    ['start_date', '>', Carbon::now()],
                ])
                 ->orderBy('start_date')
            // ->get();
                 ->paginate(10);
        return view('training_categories.show', compact('trainings', 'training_category'));
    }
}