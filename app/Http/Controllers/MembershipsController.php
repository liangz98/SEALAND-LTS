<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MembershipRequest;

class MembershipsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$memberships = Membership::paginate();
		return view('memberships.index', compact('memberships'));
	}

    public function show(Membership $membership)
    {
        return view('memberships.show', compact('membership'));
    }

	public function create(Membership $membership)
	{
		return view('memberships.create_and_edit', compact('membership'));
	}

	public function store(MembershipRequest $request)
	{
		$membership = Membership::create($request->all());
		return redirect()->route('memberships.show', $membership->id)->with('message', 'Created successfully.');
	}

	public function edit(Membership $membership)
	{
        $this->authorize('update', $membership);
		return view('memberships.create_and_edit', compact('membership'));
	}

	public function update(MembershipRequest $request, Membership $membership)
	{
		$this->authorize('update', $membership);
		$membership->update($request->all());

		return redirect()->route('memberships.show', $membership->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Membership $membership)
	{
		$this->authorize('destroy', $membership);
		$membership->delete();

		return redirect()->route('memberships.index')->with('message', 'Deleted successfully.');
	}
}