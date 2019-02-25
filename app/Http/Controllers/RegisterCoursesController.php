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
    
    public function show(RegisterCourse $register_course) {
        $training = \DB::table('trainings')->where('id', $register_course->training_id)->first();
        return view('register_courses.show', compact('register_course', 'training'));
    }

	public function create(RegisterCourse $register_course, $trainingID)
	{
	    $training = \DB::table('trainings')->where('id', $trainingID)->first();
	    // $trainingDefaultFile = \Storage::url('training/default/NACE CIP-1&2.xls');
        $trainingDefaultFile = '/training/default/NACE CIP-1&2.xls';
        $user = Auth::user();
		return view('register_courses.create_and_edit', compact('register_course', 'training', 'trainingDefaultFile', 'user'));
	}
    
    public function store(RegisterCourseRequest $request, RegisterCourse $registerCourse, User $user, FileUploadHandler $uploader) {
        // 检查同一课程是否已报名
        $hasRegister = false;
        $existRegisterCourses = \DB::table('register_courses')->where([['user_id', Auth::id()], ['training_id', $request->training_id], ['status', '01']])->get();
        foreach ($existRegisterCourses as $existRegisterCourse) {
            \DB::table('register_courses')
              ->where('id', $existRegisterCourse->id)
              ->update(['status' => '04']);
        }
    
        $existConfRegisterCourses = \DB::table('register_courses')->where([['user_id', Auth::id()], ['training_id', $request->training_id], ['status', '02']])->get();
        if (!empty($existConfRegisterCourses) && count($existConfRegisterCourses) > 0) {
            return redirect()->route('trainings.index', $registerCourse->id)->with('message', '此课程已存在成功的申请!');
        }
        
        // 封装用户/会员ID
        $member = \DB::table('members')->where('user_id', Auth::id())->first();
        $registerCourse->user_id = Auth::id();
        if (!empty($member)) {
            $registerCourse->member_id = $member->id;
        }
        
        // 封装页面提交的内容
        // $registerCourse->fill($request->all());
        $registerCourse->training_id = $request->training_id;
        $registerCourse->en_company_name = $request->en_company_name;
        $registerCourse->company_name = $request->company_name;
        $registerCourse->en_company_address = $request->en_company_address;
        $registerCourse->company_address = $request->company_address;
        $registerCourse->company_phone = $request->company_phone;
        $registerCourse->company_fax = $request->company_fax;
        $registerCourse->en_mailing_address = $request->en_mailing_address;
        $registerCourse->mailing_address = $request->mailing_address;
        $registerCourse->nace_number = $request->nace_number;
        $registerCourse->en_name = $request->en_name;
        $registerCourse->name = $request->name;
        $registerCourse->en_department = $request->en_department;
        $registerCourse->department = $request->department;
        $registerCourse->en_title = $request->en_title;
        $registerCourse->title = $request->title;
        $registerCourse->identification_number = $request->identification_number;
        $registerCourse->birthday = $request->birthday;
        $registerCourse->phone = $request->phone;
        $registerCourse->mobile = $request->mobile;
        $registerCourse->email = $request->email;
        
        $registerCourse->need_hotel = $request->need_hotel;
        if ($registerCourse->need_hotel) {
            $registerCourse->room_type = $request->room_type;
            $registerCourse->bed_type = $request->bed_type;
            $registerCourse->hotel_check_in_name = $request->hotel_check_in_name;
            $registerCourse->hotel_check_in_date = $request->hotel_check_in_date;
            $registerCourse->hotel_days = $request->hotel_days;
        } else {
            $registerCourse->need_hotel = False;
        }
        
        $registerCourse->need_invoice = $request->need_invoice;
        if ($registerCourse->need_invoice) {
            $registerCourse->invoice_type = $request->invoice_type;
            $registerCourse->invoice_title = $request->invoice_title;
            
            if ($registerCourse->invoice_type == '02') {
                $registerCourse->taxpayer_identification_number = $request->taxpayer_identification_number;
                $registerCourse->invoice_address = $request->invoice_address;
                $registerCourse->invoice_phone = $request->invoice_phone;
                $registerCourse->invoice_bank_name = $request->invoice_bank_name;
                $registerCourse->invoice_bank_no = $request->invoice_bank_no;
            }
        } else {
            $registerCourse->need_invoice = False;
        }
    
        $registerCourse->start_date = $request->start_date;
        $registerCourse->end_date = $request->end_date;
        
        
        // 封装页面提交的附件
        // if ($request->application_form) {
        //     $result = $uploader->save($request->application_form, 'training', Auth::id());
        //     if ($result) {
        //         $registerCourse->application_form = $result['path'];
        //     } else {
        //         return redirect()->route('register_courses.create', $request->training_id)->with('danger', '提交出错，文件类型不正确!');
        //     }
        // }
        $registerCourse->save();
        
        // 更新User表
        $user = Auth::user();
    
        $user->en_company_name = $registerCourse->en_company_name;
        $user->company_name = $registerCourse->company_name;
        $user->en_company_address = $registerCourse->en_company_address;
        $user->company_address = $registerCourse->company_address;
        $user->company_phone = $registerCourse->company_phone;
        $user->company_fax = $registerCourse->company_fax;
        $user->en_mailing_address = $registerCourse->en_mailing_address;
        $user->mailing_address = $registerCourse->mailing_address;
        // $user->nace_number = $request->nace_number;
        if (empty($user->en_name)) {
            $user->en_name = $registerCourse->en_name;
        }
        if (empty($user->name)) {
            $user->name = $request->name;
        }
        $user->en_department = $registerCourse->en_department;
        $user->department = $registerCourse->department;
        $user->en_title = $registerCourse->en_title;
        $user->title = $registerCourse->title;
        $user->identification_number = $registerCourse->identification_number;
        $user->phone = $registerCourse->phone;
        $user->mobile = $registerCourse->mobile;
    
        $user->invoice_title = $registerCourse->invoice_title;
        $user->taxpayer_identification_number = $registerCourse->taxpayer_identification_number;
        $user->invoice_address = $registerCourse->invoice_address;
        $user->invoice_phone = $registerCourse->invoice_phone;
        $user->invoice_bank_name = $registerCourse->invoice_bank_name;
        $user->invoice_bank_no = $registerCourse->invoice_bank_no;
        $user->update();
        
        
        // 重定向
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