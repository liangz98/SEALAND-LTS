<?php

namespace App\Http\Controllers;

use App\Handlers\FileUploadHandler;
use App\Models\RenewCertification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RenewCertificationRequest;
use Illuminate\Support\Facades\Auth;

class RenewCertificationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$renew_certifications = RenewCertification::paginate();
		return view('renew_certifications.index', compact('renew_certifications'));
	}

    public function show(RenewCertification $renew_certification)
    {
        return view('renew_certifications.show', compact('renew_certification'));
    }

	public function create(RenewCertification $renew_certification)
	{
        $trainingDefaultFile = '/renewCertifications/default/NACE CIP CERTIFICATION RENEWAL APPLICATION.xlsx';
		return view('renew_certifications.create_and_edit', compact('renew_certification', 'trainingDefaultFile'));
	}

	public function store(RenewCertificationRequest $request, RenewCertification $renewCertification, FileUploadHandler $uploader)
	{
        $renewCertification->fill($request->all());
        
        // 封装用户/会员ID
        $member = \DB::table('members')->where('user_id', Auth::id())->first();
        // $renewCertification->user_id = Auth::id();
        if (!empty($member)) {
            $renewCertification->member_id = $member->id;
        }
        
        if ($request->application_form) {
            $result = $uploader->save($request->application_form, 'renewCertifications', Auth::id());
            if ($result) {
                $renewCertification->application_form = $result['path'];
            } else {
                return redirect()->route('renew_certifications.create')->with('danger', '提交出错，申请文件未提交或类型不正确!');
            }
        }
        
        $renewCertification->save();
        
        // 重定向
        return redirect()->route('members.show', Auth::id())->with('message', '申请提交成功.');
	}

	public function edit(RenewCertification $renew_certification)
	{
        $this->authorize('update', $renew_certification);
		return view('renew_certifications.create_and_edit', compact('renew_certification'));
	}

	public function update(RenewCertificationRequest $request, RenewCertification $renew_certification)
	{
		$this->authorize('update', $renew_certification);
		$renew_certification->update($request->all());

		return redirect()->route('renew_certifications.show', $renew_certification->id)->with('message', 'Updated successfully.');
	}

	public function destroy(RenewCertification $renew_certification)
	{
		$this->authorize('destroy', $renew_certification);
		$renew_certification->delete();

		return redirect()->route('renew_certifications.index')->with('message', 'Deleted successfully.');
	}
}