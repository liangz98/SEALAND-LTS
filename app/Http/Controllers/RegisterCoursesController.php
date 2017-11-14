<?php

namespace App\Http\Controllers;

use App\Models\RegisterCourse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterCourseRequest;

class RegisterCoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$register_courses = RegisterCourse::paginate();
		return view('register_courses.index', compact('register_courses'));
	}

    public function show(RegisterCourse $register_course)
    {
        return view('register_courses.show', compact('register_course'));
    }

	public function create(RegisterCourse $register_course)
	{
		return view('register_courses.create_and_edit', compact('register_course'));
	}

	public function store(RegisterCourseRequest $request)
	{
		$register_course = RegisterCourse::create($request->all());
		return redirect()->route('register_courses.show', $register_course->id)->with('message', 'Created successfully.');
	}

	public function edit(RegisterCourse $register_course)
	{
        $this->authorize('update', $register_course);
		return view('register_courses.create_and_edit', compact('register_course'));
	}

	public function update(RegisterCourseRequest $request, RegisterCourse $register_course)
	{
		$this->authorize('update', $register_course);
		$register_course->update($request->all());

		return redirect()->route('register_courses.show', $register_course->id)->with('message', 'Updated successfully.');
	}

	public function destroy(RegisterCourse $register_course)
	{
		$this->authorize('destroy', $register_course);
		$register_course->delete();

		return redirect()->route('register_courses.index')->with('message', 'Deleted successfully.');
	}
}