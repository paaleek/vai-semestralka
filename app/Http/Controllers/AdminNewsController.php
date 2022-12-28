<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{

    public function index()
    {
        $news = News::orderBy('updated_at', 'desc')->get();
        return view('admin.news.index')->with(compact('news'));
    }


    public function create()
    {
        $new = new News();
        return view('admin.news.create')->with(compact('new'));
    }


    public function store(NewsRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = date('Y-m-d-H_i_s').'_'.$request->img->getClientOriginalName();

            $file->move(public_path('img/news/'), $filename);
            $validatedData['img'] = $filename;
        }

        if ($request->hasFile('main_img')) {
            $file = $request->file('main_img');
            $filename = date('Y-m-d-H_i_s').'_'.$request->main_img->getClientOriginalName();

            $file->move(public_path('img/news/'), $filename);
            $validatedData['main_img'] = $filename;
        }

        News::create($validatedData);
        return redirect()->route('admin.news.index')->with('message', 'New created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
