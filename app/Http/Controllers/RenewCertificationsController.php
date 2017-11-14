<?php

namespace App\Http\Controllers;

use App\Models\RenewCertification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RenewCertificationRequest;

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
		return view('renew_certifications.create_and_edit', compact('renew_certification'));
	}

	public function store(RenewCertificationRequest $request)
	{
		$renew_certification = RenewCertification::create($request->all());
		return redirect()->route('renew_certifications.show', $renew_certification->id)->with('message', 'Created successfully.');
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