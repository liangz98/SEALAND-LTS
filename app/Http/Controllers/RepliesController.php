<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReplyRequest;
use Illuminate\Support\Facades\Auth;

class RepliesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

	public function store(ReplyRequest $request, Reply $reply)
	{
        $reply->content = $request->contents;
        $reply->user_id = Auth::id();
        $reply->topic_id = $request->topic_id;
        $reply->save();
		return redirect()->route('topics.show', $reply->topic->id)->with('success', 'Created successfully.');
	}

	public function destroy(Reply $reply)
	{
		$this->authorize('destroy', $reply);
		$reply->delete();

		// return redirect()->route('replies.index')->with('message', 'Deleted successfully.');
        return redirect()->route('topics.show', $reply->topic->id)->with('success', '成功删除回复！');
        // return redirect()->to($reply->topic->link())->with('success', '成功删除回复！');
	}
}