<?php

namespace App\Http\Controllers;

use App\Models\Forums;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForumsController extends Controller
{
    public function index()
    {
        $forums = Forums::orderBy('updated_at', 'desc')->get();
        //$forums = DB::table('forums')->get();

        return view('forums')->with(compact('forums'));
    }


    public function create()
    {
        return view('_forum_formular');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'header' => 'required|string',
            'description' => 'required|string',
        ]);

        $data['user_id'] = auth()->user()->id;

        Forums::create($data);
        return redirect()->route('forums')->with('message', 'Forums pridane úspešne');
    }

    public function store_reply(Request $request, $forum_id)
    {
        $data = $request->validate([
            'answer' => 'required|string',
        ]);

        $data['user_id'] = auth()->user()->id;
        $data['forum_id'] = $forum_id;

        Reply::create($data);
        return redirect()->route('forums')->with('message', 'Odpoved pridana úspešne');
    }


    public function show($id)
    {
        $forum = Forums::findorFail($id);

        $author = $forum->user;


        $replies = DB::table('reply')
                    ->select('reply.*', 'users.name', 'users.profile_picture')
                    ->join('users', 'users.id', '=', 'reply.user_id')
                    ->where('forum_id','=',$forum->id)
                    ->get();
        //$replies = Reply::find($)->reply->rightJoin('users', 'reply.user_id', '=', 'users.id');
        return view('forum')->with(compact('forum', 'replies', 'author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
