<?php

namespace App\Http\Controllers;

use App\Models\Forums;
use App\Models\Reply;
use Illuminate\Http\Request;

class AdminForumController extends Controller
{

    public function index()
    {
        $forums = Forums::orderBy('updated_at', 'desc')->get();
        return view('admin.forum.index')->with(compact('forums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    public function showReplies($id)
    {
        $replies = Reply::where('forum_id', $id)->orderBy('updated_at', 'desc')->get();
        return view('admin.forum.replies')->with(compact('replies'));
    }


    public function edit($id)
    {
        $forum = Forums::findorFail($id);
        return view('admin/forum/edit-forum')->with(compact('forum'));
    }


    public function update(Request $request, $id)
    {
        $forum = Forums::findOrFail($id);
        $data = $request->validate([
            'header' => 'required|string',
            'description' => 'required|string',
        ]);

        $forum->update($data);

        return redirect()->route('admin.forum.index')->with('message', 'Forum upravene úspešne');
    }


    public function destroy($id)
    {
        $forum = Forums::findOrFail($id);
        $forum->delete();

        Reply::where('forum_id', $id)->delete();

        return redirect()->route('admin.forum.index')->with('message', 'Forum deleted successfully');
    }

    public function destroyReply($id)
    {
        $reply = Reply::findOrFail($id);
        $forum_id = $reply->forum_id;

        $reply->delete();

        return redirect()->route('admin.forum.show_replies', $forum_id)->with('message', 'Forum deleted successfully');
    }
}
