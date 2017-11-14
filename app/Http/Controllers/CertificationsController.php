<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CertificationRequest;

class CertificationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$certifications = Certification::paginate();
		return view('certifications.index', compact('certifications'));
	}

    public function show(Certification $certification)
    {
        return view('certifications.show', compact('certification'));
    }

	public function create(Certification $certification)
	{
		return view('certifications.create_and_edit', compact('certification'));
	}

	public function store(CertificationRequest $request)
	{
		$certification = Certification::create($request->all());
		return redirect()->route('certifications.show', $certification->id)->with('message', 'Created successfully.');
	}

	public function edit(Certification $certification)
	{
        $this->authorize('update', $certification);
		return view('certifications.create_and_edit', compact('certification'));
	}

	public function update(CertificationRequest $request, Certification $certification)
	{
		$this->authorize('update', $certification);
		$certification->update($request->all());

		return redirect()->route('certifications.show', $certification->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Certification $certification)
	{
		$this->authorize('destroy', $certification);
		$certification->delete();

		return redirect()->route('certifications.index')->with('message', 'Deleted successfully.');
	}
}