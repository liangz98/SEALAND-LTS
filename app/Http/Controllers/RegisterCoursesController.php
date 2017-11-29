<?php

namespace App\Http\Controllers;

use App\Handlers\FileUploadHandler;
use App\Models\Member;
use App\Models\RegisterCourse;
use App\Models\Training;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterCourseRequest;
use Illuminate\Support\Facades\Auth;

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

	public function create(RegisterCourse $register_course, $trainingID)
	{
	    $training = \DB::table('trainings')->where('id', $trainingID)->first();
	    // $trainingDefaultFile = \Storage::url('training/default/NACE CIP-1&2.xls');
        $trainingDefaultFile = '/training/default/NACE CIP-1&2.xls';
		return view('register_courses.create_and_edit', compact('register_course', 'training', 'trainingDefaultFile'));
	}
    
    public function store(RegisterCourseRequest $request, RegisterCourse $registerCourse, User $user, FileUploadHandler $uploader) {
        // dd($request->training_id);
        
        $member = \DB::table('members')->where('user_id', Auth::id())->first();
        
        $registerCourse->fill($request->all());
        $registerCourse->user_id = Auth::id();
        if (!empty($member)) {
            $registerCourse->member_id = $member->id;
        }
        
        if ($request->application_form) {
            $result = $uploader->save($request->application_form, 'training', Auth::id());
            if ($result) {
                $registerCourse->application_form = $result['path'];
            } else {
                return redirect()->route('register_courses.create', $request->training_id)->with('danger', '提交出错，文件类型不正确!');
            }
        }
        $registerCourse->save();
        return redirect()->route('trainings.index', $registerCourse->id)->with('message', '报表名提交成功.');
        
        
        // $data = $request->all();
        // if ($request->application_form) {
        //     $result = $uploader->save($request->application_form, 'training', $user->id);
        //     if ($result) {
        //         $data['application_form'] = $result['path'];
        //     }
        // }
        // $data['user_id'] = $user->id;
        // $data['member_id'] = $member->id;
        // $register_course = RegisterCourse::create($data);
        // return redirect()->route('trainings.index', $register_course->id)->with('message', '报表名提交成功.');
		// return redirect()->route('register_courses.show', $register_course->id)->with('message', 'Created successfully.');
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